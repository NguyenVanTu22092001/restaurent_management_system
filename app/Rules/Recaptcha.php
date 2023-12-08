<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class Recaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $request; // Store the request

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

        $g_response = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $value,
            'remoteip' => $this->request->ip(),
        ]);

        // dd($g_response->json());

        if (!$g_response->json('success') || $g_response->json('score') < config('services.recaptcha.min_score')) {
            $fail("Failed to validate reCaptCha.");
            // $fail("The {$attribute} is invalid.");

        }
    }
    public function message()
    {
        return 'Failed to validate reCaptCha.';
    }
}
