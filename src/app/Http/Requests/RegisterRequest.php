<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required',
            'price' => 'required' | 'integer',
            'photo' => 'required',
            'season' => 'required',
            'explanation' => 'required|max:120',
        ];
    }

    public function messages()
    {
    return [
      'name.required' => '商品名を入力してください',
      'price.required' => '値段を入力してください',
      'photo.required' => '商品画像を登録してください',
      'photo.' => '「.png」または「.jpeg」形式でアップロードしてください',
      'season.required' => '季節を選択してください',
      'explanation.required' => '商品説明を入力してください',
      'explanation.max' => '120文字以内で入力してください',
    ];
  }



}
