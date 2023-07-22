<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Symfony\Contracts\Service\Attribute\Required;

class OrderRequest extends FormRequest
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
            'number' => 'required',
            'users_id'=>'required',
            'type' => 'required',
            'date' => 'required',
            'customer_id' => 'required',
            'users_id' => 'required',
            'type_payment_id' => 'required',
            'observation' => 'required'

        ];
    }
}
