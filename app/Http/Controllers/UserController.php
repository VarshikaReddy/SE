<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @return View
     */
    public function profile(): View
    {
        return view('admin.pages.profile');
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
        return redirect()->back()->with(['success'=> 'Information Updated']);
    }
}
