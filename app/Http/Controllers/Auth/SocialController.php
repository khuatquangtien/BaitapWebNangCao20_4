<?php
// Họ tên: Nguyễn Huy Hoàng
// Mã sinh viên: 23810310410
// Lớp: D18CNPM2

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class SocialController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
{
    $user = \App\Models\User::firstOrCreate(
        ['email' => 'hn17042005@gmail.com'],
        [
            'name' => 'Nguyễn Huy Hoàng',
            'student_id' => '23810310410',
            'avatar' => 'https://via.placeholder.com/100'
        ]
    );

    \Auth::login($user);

    return redirect('/dashboard');
}

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}