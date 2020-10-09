<?php

namespace App\Http\Requests\Order;

use Illuminate\Foundation\Http\FormRequest;

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
     * @return array
     */
    public function rules()
    {
      $id = $this->route('orders');

		return [
            'name'             => 'required',
            'product_name'     => 'required',
            'quantity'         => 'required',
            'price'            => 'required',
            'imageFile'        =>  'required|mimes:jpeg,png,jpg|max:3000',
            'address'          => 'required',
            'phone'            => 'required',
            'email'            => 'required|email',
            'category_id'      => 'required',
            'rating_id'        => 'required',
            'description'      => 'required|min:10',
           
		];
    }
}
