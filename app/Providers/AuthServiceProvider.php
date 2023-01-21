<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Http;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();


//        $response = Http::asForm()->post('http://passport-app.test/oauth/token', [
//
//            'grant_type' => 'refresh_token',
//
//            'refresh_token' => 'the-refresh-token',
//
//            'client_id' => 'client-id',
//
//            'client_secret' => 'client-secret',
//
//            'scope' => '',
//
//        ]);


//        return $response->json();
    }
}
