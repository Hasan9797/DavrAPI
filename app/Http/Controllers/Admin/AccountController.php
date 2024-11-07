<?php

namespace App\Http\Controllers\Admin;

use App\Models\Account;
use App\Http\Controllers\Controller;
use App\Http\Requests\Account\StoreAccountRequest ;
use App\Http\Requests\Account\UpdateAccountRequest ;

class AccountController extends Controller
{
    public function index()
    {
        //
    }


    public function store(StoreAccountRequest $request)
    {
        //
    }

    public function show(Account $account)
    {
        //
    }

    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    public function destroy(Account $account)
    {
        //
    }
}
