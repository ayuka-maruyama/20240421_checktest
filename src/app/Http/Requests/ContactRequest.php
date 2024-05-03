<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'first_name' => ['required'],
            'last_name' => ['required'],
            'gender' => ['required'],
            'email' => ['required', 'email'],
            'left-tel' => ['required', 'regex:/^[0-9]+$/', 'digits_between:1,5'],
            'middle-tel' => ['required', 'regex:/^[0-9]+$/', 'digits_between:1,5'],
            'right-tel' => ['required', 'regex:/^[0-9]+$/', 'digits_between:1,5'],
            'address' => ['required'],
            'category_id' => ['required'],
            'detail' => ['required', 'max:120']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'last_name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'left-tel.required' => '電話番号を入力してください',
            'middle-tel.required' => '電話番号を入力してください',
            'right-tel.required' => '電話番号を入力してください',
            'left-tel.regex' => '電話番号は半角数字で入力してください', 
            'middle-tel.regex' => '電話番号は半角数字で入力してください', 
            'right-tel.regex' => '電話番号は半角数字で入力してください', 
            'left-tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'middle-tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'right-tel.digits_between' => '電話番号は5桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.max' => 'お問合せ内容は120文字以内で入力してください'
        ];
    }

}
