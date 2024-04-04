<?php

namespace modules\Rayium\Auth\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidEmail implements ValidationRule
{
    public function __construct()
    {
        //
    }
    public function passes($attribute, $value): bool|int
    {
        return preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/', $value);
    }

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/', $value)) {
            $fail('نوع'  . $attribute .  'نامناسب است و باید ایمیل شما از سرویس Gmail باشد.');
        }
    }
}
