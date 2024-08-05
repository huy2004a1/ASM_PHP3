<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminIndex()
    {
        return view('admin.index');
    }

    public function accountIndex()
    {
        $accounts = User::All();
        return view('admin.account.index', compact('accounts'));
    }

    public function destroy(User $account)
    {
        
        $account->delete();

        return redirect()->route('account.index')->with('success', 'Tin tức đã được xóa thành công.');
    }
}
