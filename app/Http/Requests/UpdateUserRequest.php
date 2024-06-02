<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        if (isset($this->user) && $this->user == 1) {
            return [
                'name' => [
                    'required',
                    Rule::unique('users')->ignore($this->user)->whereNull('deleted_at')
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($this->user)->whereNull('deleted_at')
                ]
            ];
        } else {
            return [
                'name' => [
                    'required',
                    Rule::unique('users')->ignore($this->user)->whereNull('deleted_at')
                ],
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($this->user)->whereNull('deleted_at')
                ],
                'roles' => 'required',
            ];
        }
    }
}
