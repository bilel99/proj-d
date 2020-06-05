<?php

namespace Generatornewpassword\Generatornewpassword;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class Generatornewpassword extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'generatornewpassword';

    /**
     * @param NovaRequest $request
     * @param string $requestAttribute
     * @param object $model
     * @param string $attribute
     * @return mixed|void
     */
    protected function fillAttributeFromRequest(
        NovaRequest $request,
        $requestAttribute,
        $model,
        $attribute
    ) {
        if ($request->exists('password')) {
            $model->password = request('password');
        }
    }
}
