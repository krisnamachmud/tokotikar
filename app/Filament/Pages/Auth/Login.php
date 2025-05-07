<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Login as BaseLogin;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use DanHarrin\LivewireRateLimiting\WithRateLimiting;
use Filament\Notifications\Notification;

class Login extends BaseLogin
{
    use WithRateLimiting;

    public function authenticate(): ?LoginResponse
    {
        try {
            $this->rateLimit(5); // Limit login attempts to 5 times
        } catch (\DanHarrin\LivewireRateLimiting\Exceptions\TooManyRequestsException $exception) {
            Notification::make()
                ->title('Too many login attempts')
                ->danger()
                ->send();

            return null;
        }

        return parent::authenticate();
    }
}