<?php

namespace App\Tenant;

use Illuminate\Support\Facades\Auth;

class ManagerTenant{

    public function getTenantIdentify()
    {
        return Auth::user()->tenant->id;
    }

}