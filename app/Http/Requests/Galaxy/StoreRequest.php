<?php

namespace App\Http\Requests\Galaxy;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'galaxy.title' => 'string',
            'galaxy.image' => 'string',
            'galaxy.url' => 'string',
            'galaxy.description' => 'string',
        ];
    }
}
