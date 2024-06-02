<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        // Dump and die the request data to debug
        if ($this->_method == 'put') {
            return [
                'name' => 'required',
                'icon' => 'nullable',
                'description' => 'required|string'
            ];
        } else {
            return [
                'name' => 'required',
                'icon' => 'required',
                'description' => 'required|string'
            ];
        }
    }
}
