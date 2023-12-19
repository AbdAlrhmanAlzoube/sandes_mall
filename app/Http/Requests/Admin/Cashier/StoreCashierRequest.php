<?php

namespace App\Http\Requests\Admin\Cashier;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashierRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'user_id' =>[ 'required','exists:users,id'],
            'department' => ['required','string'],
        ];
    }
}
