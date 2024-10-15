<?php

namespace App\Http\Requests\RBAC;

use App\Rules\GuardNameRule;
use App\Http\Requests\Request;
use App\Rules\PermissionOnRule;

class StoreRoleRequest extends Request
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
            'name' => ['required', 'string', 'max:255', 'unique:roles,name'],
            'guard_name' => ['required', 'string', 'max:255', new GuardNameRule],
            'permissions' => ['nullable', 'array', new PermissionOnRule],
        ];
    }
}
