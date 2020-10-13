<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
//        dd($this->all());
        $id = $this->route('post');

		return [
            'title'       => 'required|unique:posts,title,'.$id.',id',
            'description' => 'min:10',
            'imageFile'   => 'required|mimes:jpeg,png,jpg|dimensions:min_width=1900,min_height=1266,max_width=1900,max_height=1268|max:3000',

		];
    }
}
