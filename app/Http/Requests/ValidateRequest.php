<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'userName' => 'required|regex:/^[^#<>^;_]*$/',  //氏名は必須、特殊文字禁止
            'tel' => 'nullable|regex:/^[0-9 ]*$/',  //数字と＋と半角のみOK
            'email' => 'nullable|email',  //Email形式のみOK
        ];
    }

    /**
     * エラーメッセージ
     */
    public function messages()
    {
        return [
            'userName.required' => '氏名は必須です。',
            'userName.regex' => '正しい氏名を入力してください。',
            'tel.regex' => '正しい電話番号を入力してください。',
            'email.email' => '使用可能なメールアドレスを入力してください。',
        ];
    }
}
