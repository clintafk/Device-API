<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDeviceRequest extends FormRequest
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
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => 'required|string',
                'data.color' => 'required|string',
                'data.price' => 'required|string',
            ];
        } else {
            return [
                'name' => ['sometimes', 'string'],
                'data.color' => ['sometimes', 'string'],
                'data.price' => ['sometimes', 'string'],
            ];
        }
    }
}
