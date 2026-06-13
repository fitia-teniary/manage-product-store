<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

abstract class CustomerRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => $this->emailRule(),
            'phone'      => 'nullable|string|max:20|regex:/^[0-9+\s]+$/',
        ];
    }

    /**
     * Allows Store/Update to override just the email rule.
     */
    protected function emailRule(): array|string
    {
        return 'required|email|max:255|unique:customers,email';
    }
}