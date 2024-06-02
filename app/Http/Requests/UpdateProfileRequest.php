<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
        return [
            'name' => 'required|unique:users,name,' . auth()->user()->id,
            'email' => 'required|unique:users,email,' . auth()->user()->id,
            'password' => 'confirmed',
            'signature' => 'nullable|mimes:jpg,bmp,png|dimensions:max_width=300,max_height=300',
            'avatar' => 'nullable|mimes:jpg,bmp,png|dimensions:max_width=300,max_height=300'
        ];
    }
    public function messages()
    {
        return [
            'signature.dimensions' => 'Signature maximum width 300px and maximum height 300px',
            'signature.mimes' => 'Signature should be of extension jpg,png,bmp',
            'avatar.dimensions' => 'Avatar maximum width 300px and maximum height 300px',
            'avatar.mimes' => 'Avatar should be of extension jpg,png,bmp'
        ];
    }
}
