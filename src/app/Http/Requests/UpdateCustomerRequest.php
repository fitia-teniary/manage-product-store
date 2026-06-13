<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UpdateCustomerRequest extends CustomerRequest
{
    protected function emailRule(): array|string
    {
        return [
            'required',
            'email',
            'max:255',
            Rule::unique('customers', 'email')->ignore($this->route('customer')),
        ];
    }
}