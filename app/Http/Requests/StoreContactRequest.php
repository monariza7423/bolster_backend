<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Katakana;
use App\Rules\ValidEmail;

class StoreContactRequest extends FormRequest
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
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'first_name_kana' => ['required', 'string', 'max:255', new Katakana()],
            'last_name_kana' => ['required', 'string', 'max:255', new Katakana()],
            'company' => 'nullable|string|max:255',
            'email' => 'required|string|max:255|email',
            'contact_type' => 'required|in:事業(WEB制作・開発)について,事業(オハナスタイル)について,事業(リモートスタイル)について,採用について,その他',
            'content' => 'required',
        ];
    }
}
