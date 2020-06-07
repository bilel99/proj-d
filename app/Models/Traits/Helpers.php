<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Model;

trait Helpers
{
    /**
     * Get all fillable attributes of a Model
     *
     * @param  array  $filters
     *
     * @return array
     *
     */
    public static function cleanFilters(array $filters)
    {
        if (!$filters) {
            return $filters;
        }

        $fillable = (new static())->getFillable();

        foreach ($filters as $key => $filter) {
            if (!in_array($key, $fillable)) {
                unset($filters[$key]);
            }
        }

        return $filters;
    }

    /**
     * Get collection of model filtered by attributes (only equal operator)
     *
     * @param  array  $attributes
     * @param  int  $offset
     *
     * @return mixed
     */
    public static function getByAttributes(array $attributes, int $offset = 50)
    {
        $query = static::query();

        foreach ($attributes as $attribute => $value) {
            $query->where($attribute, $value);
        }

        return $query->paginate($offset);
    }

    /**
     * @param  string  $name
     *
     * @return Model|null
     */
    public static function getByUniqueName(string $name): ?Model
    {
        return static::where(['unique_name' => $name], 1)->first();
    }
}
