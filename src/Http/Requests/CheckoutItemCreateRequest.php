<?php

namespace AbdulkadirBak\LaravelCart\Http\Requests;

use AbdulkadirBak\LaravelCart\Http\Requests\APIRequest;

class CheckoutItemCreateRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'purchaseable_type' => 'required',
            'purchaseable_id' => 'required',
            'qty' => 'required|integer',
            'options' => 'sometimes|nullable|array',
        ];
    }
}
