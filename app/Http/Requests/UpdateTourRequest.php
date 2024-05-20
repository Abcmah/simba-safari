<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTourRequest extends FormRequest
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
            'place' => 'required',
            'days' => 'required',
            'nights' => 'required',
            'description' => 'required',
            'badget_from' => 'required',
            'region_id' => 'required',
            'activity_id' => 'required',
            'activity_level_id' => 'required',
            'landscape_id' => 'required',
            'photo' => 'nullable'
        ];
    }
}
