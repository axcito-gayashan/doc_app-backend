<?php

namespace App\Http\Controllers;

use App\Service\AdminUserService;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    protected AdminUserService $adminUserService;
    public function __construct(AdminUserService $adminUserService)
    {
        $this->adminUserService = $adminUserService;
    }

    public function register(Request $request)
    {
        return $this->adminUserService->register($request);

    }

    public function login(Request $request)
    {
        return $this->adminUserService->login($request->all());
    }

    public function passwordUpdate(Request $request)
    {
        return $this->adminUserService->passwordUpdate($request->all());
    }
    //
}
