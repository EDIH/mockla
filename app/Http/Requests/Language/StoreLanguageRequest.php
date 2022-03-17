<?php

namespace App\Http\Requests\Language;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreLanguageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'iso' => [
                'required',
                Rule::in(\Languages::lookup()->keys()->toArray()),
                Rule::unique('languages', 'iso')
                    ->ignore( $this->language, 'iso'),
            ],
            'enabled' => 'nullable|boolean'
        ];
    }
}
