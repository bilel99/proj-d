<?php

namespace App\Http\Controllers\Api;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use \Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Class BaseResourceController
 * @package App\Http\Controllers\API
 *
 * Implements 5 basics methods for Api endpoints :
 * * list resources
 * * display resource
 * * store resource
 * * update/patch resource
 * * delete resource
 */
class BaseResourceController extends Controller
{
    /**
     * @var string the model namespace
     */
    protected $model = '';

    /**
     * @var array Eager loading relationships
     */
    protected $relationShips = [];

    /**
     * @var string The resource collection namespace
     */
    protected $modelResource;

    /**
     * @var null|Model
     */
    protected $modelObject = null;

    /**
     * @var array
     */
    protected $requestDatas;

    public function __construct()
    {
        if (empty($this->model) or empty($this->modelResource)) {
            throw new \LogicException('model or modelResource can\'t be empty');
        }
    }

    /**
     * List resources
     *
     * @param Request $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request): AnonymousResourceCollection
    {
        //Get filters from query and filter it depending on the model fillable attribute.
        $filters = $this->model::cleanFilters($request->all());

        $queryBuilder = ($this->relationShips) ? $this->model::with($this->relationShips) : $this->model::query();

        foreach ($filters as $attribute => $value) {
            $queryBuilder->where($attribute, $value);
        }

        return $this->modelResource::collection($queryBuilder->paginate());
    }

    /**
     * Display a resource.
     *
     * @param $id
     * @return JsonResource
     */
    public function show(int $id): JsonResource
    {
        $queryBuilder = ($this->relationShips) ? $this->model::with($this->relationShips) : $this->model::query();
        $this->modelObject = $queryBuilder->find($id);
        return new $this->modelResource($this->modelObject);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $this->requestDatas = $request->all();
        $this->preSaveStore();
        $this->modelObject = $this->model::create($this->requestDatas);

        return (new $this->modelResource($this->model::find($this->modelObject->id)))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Update a resource.
     *
     * @param Request $request
     * @param $id
     * @return JsonResource
     */
    public function update(Request $request, int $id): JsonResource
    {
        $this->requestDatas = $request->all();
        $this->preSaveUpdate();
        $this->model::whereId($id)->update($this->requestDatas);

        return $this->show($id);
    }

    /**
     * Remove a resource
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        $this->model::whereId($id)->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Modify data before being saved
     */
    protected function preSaveStore()
    {
    }

    /**
     * Modify data before being saved
     */
    protected function preSaveUpdate()
    {
    }
}
