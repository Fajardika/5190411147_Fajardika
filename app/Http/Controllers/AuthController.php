<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Function untuk menampilkan halaman register
    public function register(){
        return view('register');
    }
    // Function untuk menampilkan halaman login
    public function login(){
        return view('login');
    }
    // Function untuk menampilkan halaman dashboard
    public function dashboard(){
        return view('dashboard');
    }
    // Function untuk simpan user
    public function simpanuser(Request $request){
        User::create(['nama' => $request->nama,
                      'email' => $request->email,
                      'password' => bcrypt($request->password)
    ]);
    // Jika berhasil maka akan menampilkan halaman login
    return redirect('/');
    }
    // Function untuk cek login
    public function ceklogin(Request $request){
        if(!Auth::attempt(['email'=>$request->email,
                           'password'=>$request->password
        ]))
    {
        // Jika gagal maka akan menampilkan halaman login kembali
        return redirect('/');
    } else {
        // Jika berhasil maka akan menampilkan pesan
        return redirect('/dashboard');
    }
    }
}



