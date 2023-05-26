<?php

namespace App\Http\Requests;

use App\Rules\Order;
use Darryldecode\Cart\Facades\CartFacade as Cart;
use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'phone' => 'required|max:255',
            'email' => 'required|max:255|email',
            'address' => 'required',
            'city' => 'required|max:255',
            'street' => 'required|max:255',
            'home' => 'required|max:255',
            'floor' => 'required|max:255',
            'door' => 'required|max:255',
            'flat' => 'required|max:255',
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
     */
    public function withValidator($validator)
    {

    }
}
