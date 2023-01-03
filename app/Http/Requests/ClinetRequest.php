<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClinetRequest extends FormRequest
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
            'name' => 'required|string',
            'name_ar' => 'required|string',
            'description' => 'required|string',
            'description_ar' => 'required|string',
            'image' => 'required',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Oops!,Name is required',
            'name.string' => 'Warning!,Name must be a string',
            'name_ar.required' => 'Oops!,Name_ar is required',
            'name_ar.string' => 'Warning!,Name_ar must be a string',
            'description.required' => 'Oops!,Description is required',
            'description.string' => 'Warning!,Description must be a string',
            'description_ar.required' => 'Oops!,Description_ar is required',
            'description_ar.string' => 'Warning!,Description_ar must be a string',
            'image.required' => 'Oops!,You must upload an image',
        ];
    }
}
