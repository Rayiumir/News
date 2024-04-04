<?php

namespace modules\Rayium\Auth\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidPassword implements ValidationRule
{
    public function __construct()
    {
        //
    }
    public function passes($attribute, $value): bool|int
    {
        return preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/', $value);
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/', $value)) {
            $fail('نوع'  . $attribute .  'نامناسب است و باید ترکیبی از حروف بزرگ, کوچک و اعداد باشد.');
        }
    }
}
