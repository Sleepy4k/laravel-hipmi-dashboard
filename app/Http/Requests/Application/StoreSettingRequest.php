<?php

namespace App\Http\Requests\Application;

use App\Http\Requests\Request;
use App\Rules\ApplicationSettingKey;

class StoreSettingRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth('web')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'key' => ['required', 'string', 'max:255', new ApplicationSettingKey, 'unique:application_settings,key'],
            'display' => ['required', 'string', 'max:255'],
            'value' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string', 'max:255'],
            'type_id' => ['required', 'integer', 'exists:application_setting_types,id'],
            'file' => ['exclude_unless:type_id,3', 'image', 'mimes:jpeg,png,jpg', 'extensions:jpeg,png,jpg', 'max:4096', 'dimensions:min_width=100,min_height=100'],
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'key' => 'Key',
            'display' => 'Display',
            'value' => 'Value',
            'description' => 'Description',
            'type_id' => 'Type',
            'file' => 'File',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'file.required_if' => 'The :attribute field is required when type is image.',
            'file.mimes' => 'The :attribute must be a file of type: :values.',
            'file.max' => 'The :attribute may not be greater than :max kilobytes.',
        ];
    }
}