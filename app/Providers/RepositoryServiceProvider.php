<?php
/**
 *doctorweb
 *ASUS
 *3/15/2022
 *11:36 PM
 *SRILANKA-AXCITO
 */

namespace App\Providers;

use App\Repostiory\AdminUserRepository;
use App\Repostiory\PatientRepository;
use App\ServiceInterface\AdminUserServiceInterface;
use App\ServiceInterface\PatientServiceInterface;
use Carbon\Laravel\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->app->bind(AdminUserServiceInterface::class, AdminUserRepository::class);
        $this->app->bind(PatientServiceInterface::class, PatientRepository::class);
    }

}
