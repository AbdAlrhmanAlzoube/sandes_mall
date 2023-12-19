<?php

namespace App\Http\Requests\Admin\Cashier;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCashierRequest extends FormRequest
{
    
    public function rules(): array
    {
        return [
            'user_id' =>[ 'exists:users','id'],
            'department' => ['string'],
        ];
    }
}
