<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

        // Register policies
        $this->register();

        // Check if the database is connected and the permissions table exists
        if (DB::connection()->getDatabaseName() && Schema::hasTable('permissions')) {
            $permissions = \App\Models\Permission::all();

            foreach ($permissions as $permission) {
                Gate::define($permission['key'], function ($user = null) use ($permission) {
                    if (auth()->check()) {
                        if (auth()->user()->id == 1) {
                            return true;
                        }

                        $roles = \App\Models\UserRole::where('user_id', auth()->user()->id)
                            ->select('role_id')
                            ->get();

                        foreach ($roles as $role) {
                            $check = \App\Models\RolePermission::where([
                                ['role_id', $role['role_id']],
                                ['permission_id', $permission['id']]
                            ])->count();

                            if ($check) {
                                return true;
                            }
                        }
                    }

                    return false;
                });
            }
        }

        // Define admin and patient gates
        Gate::define('admin', function ($user = null) {
            return auth()->check();
        });

        // Gate::define('patient', function ($user = null) {
        //     return auth()->guard('patient')->check();
        // });

    }
}
