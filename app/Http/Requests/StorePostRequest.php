<?php

namespace App\Http\Requests;

use App\Rules\MessengerBrandRule;
use App\Rules\ReCaptcha;
use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:255',
            'description' => 'required|max:255',
            'link' => ['required', 'url', new MessengerBrandRule()],
            'image' => 'nullable|mimes:jpeg,jpg,png',
            'category_id' => 'required|exists:categories,id',
            'messenger_brand_id' => 'required|exists:messenger_brands,id',
            'g-recaptcha-response' => [new ReCaptcha]
        ];
    }
}
