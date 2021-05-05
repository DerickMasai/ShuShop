<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        

        Fortify::loginView(function () {
            $page = 'Login';
            return view('auth.login', ['page' => $page]);
        });
        Fortify::registerView(function () {
            $page = 'Create an Account';
            return view('auth.register', ['page' => $page]); 
        });
        Fortify::requestPasswordResetLinkView(function () {
            $page = 'Forgot Password';
            return view('auth.passwords.email', ['page' => $page]);
        });
        Fortify::resetPasswordView(function ($request) {
            $page = 'Reset Your Password';
            return view('auth.passwords.reset', ['request' => $request, 'page' => $page]);
        });
    }
}
