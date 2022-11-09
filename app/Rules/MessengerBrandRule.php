<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MessengerBrandRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $messengers = [
            'https://chat.whatsapp.com/',
            'https://t.me/',
            'https://signal.group/'
        ];
        foreach ($messengers as $messenger ) {
            if(\Str::contains($value, $messenger)){
                return true;
            }
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('messages.links_error');
    }
}
