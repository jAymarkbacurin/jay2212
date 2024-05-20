<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
    public function delete(Request $request): RedirectResponse
    {
        $user = User::find($request->id);
        if($user){
            $user->delete();
            return redirect()->back();
        }
    }
    public function edituser(Request $request): ?View
    {
        $user = User::find($request->id);
         return view('editpage', [
            'user' => $user,
        ]);
    }
    public function editpost(Request $request): ?RedirectResponse
    {
      $user = User::find($request->id);
      $user->name = $request->name;
      $user->email = $request->email;
      $user->save();
      return redirect()->route('dashboard')->with(['status'=>'successfully edited post']);
       
    }
}
