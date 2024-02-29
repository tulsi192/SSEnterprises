<?php

namespace App\Http\Requests\Focus\allocation\openallocation;

use Illuminate\Foundation\Http\FormRequest;

class CreateAllocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return access()->allow('create-allocation');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                //Put your rules for the request in here
                //For Example : 'title' => 'required'
                //Further, see the documentation : https://laravel.com/docs/5.4/validation#creating-form-requests
            ];
    }

    public function messages()
    {
        return [];
    }
}
