<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'nome'=>'required|min:2|max:100',
            'codigo'=>'required|min:2|max:150|unique:produtos',
            'descricao'=>'max:255',
            'unidade'=>'required|integer|min:1',
            'user_id'=>'required|integer|min:1',
        ];
    }
}
