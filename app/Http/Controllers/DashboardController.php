<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Pengguna yang sedang login
        $user = Auth::user();

        // Memastikan pengguna ada dan memiliki role_id
        if ($user && $user->role_id) {
            // Mengambil data jenis_id dari tabel master_role_id yang sesuai dengan role_id pengguna
            $jenisId = DB::table('users')
                        ->join('master_role_id', 'users.role_id', '=', 'master_role_id.id')
                        ->where('users.id', $user->id)
                        ->value('master_role_id.jenis_id');

            // Meneruskan data pengguna dan jenis_id ke tampilan dashboard
            return view('dashboard', ['user' => $user, 'jenis_id' => $jenisId]);
        } else {
            // Redirect ke halaman login jika pengguna tidak terautentikasi atau tidak memiliki role_id
            return redirect()->route('login');
        }
    }
}
