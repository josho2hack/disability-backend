<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
//use BeyondCode\EmailConfirmation\Events\Confirmed;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        //Registered::class => [
        //    SendEmailVerificationNotification::class,
        //],
        //'Illuminate\Auth\Events\Verified' => [
        //    'App\Listeners\LogVerifiedUser',
        //],
        //'BeyondCode\EmailConfirmation\Events\Confirmed' => [
        //    'App\Listeners\YourOnConfirmedListener'
        //]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}