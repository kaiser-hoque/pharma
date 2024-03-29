<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Http\Requests\Authentication\SignupRequest;
use App\Http\Requests\Authentication\SigninRequest;
use Illuminate\Support\Facades\Hash;
use Exception;

class AuthenticationController extends Controller
{
    public function signUpForm()
    {
        return view('backend.Authentication.register');
    }

    public function signUpStore(SignupRequest $request)
    {
        try {
            $user = new User;
            $user->name_en = $request->FullName;
            $user->contact_no_en = $request->contact_no_en;
            $user->email = $request->EmailAddress;
            $user->password = Hash::make($request->password);
            $user->role_id = 1;
            if ($user->save())
                return redirect('login')->with('success', 'Successfully Registred');
            else
                return redirect('login')->with('danger', 'Please try again');
        } catch (Exception $e) {
            // dd($e);
            return redirect('login')->with('danger', 'Please try again');
            ;
        }

    }

    public function signInForm()
    {
        return view('backend.Authentication.login');
    }

    public function signInCheck(SigninRequest $request)
    {
        try {
            $user = User::where('contact_no_en', $request->username)
                ->orWhere('email', $request->username)->first();
            if ($user) {
                if (Hash::check($request->password, $user->password)) {
                    $this->setSession($user);
                    $this->notice::success('Successfully login');
                    return redirect()->route('dashboard')->with('success', 'Successfully login');
                } else
                    return redirect()->route('login')->with('error', 'Your phone number or password is wrong1!');
            } else
                return redirect()->route('login')->with('error', 'Your phone number or password is wrong2!');
        } catch (Exception $e) {
            // dd($e);
            return redirect()->route('login')->with('error', 'Your phone number or password is wrong3!');
        }
    }

    public function setSession($user)
    {
        return request()->session()->put(
            [
                'userId' => encryptor('encrypt', $user->id),
                'username' => encryptor('encrypt', $user->name_en),
                'role_id'=>encryptor('encrypt', $user->role_id),
                'accessType'=>encryptor('encrypt', $user->full_access),
                'role' => encryptor('encrypt', $user->role->name),
                'roleIdentity' => encryptor('encrypt', $user->role->identity),
                'language' => encryptor('encrypt', $user->language),
                'image' => $user->image ?? 'no-image.png'
            ]
        );
    }

    public function singOut()
    {
        request()->session()->flush();
        // return redirect('login')->with($this->resMessageHtml(false, 'error', currentUserId()));
        return redirect()->route('login')->with('danger', 'succfully logged out');
    }
}
