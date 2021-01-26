<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        // 1
        $tabla = new User();
        $tabla->name = 'Alexis Chata';
        $tabla->email = 'alexizz.19.ac@gmail.com';
        $tabla->email_verified_at = now();
        $tabla->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        $tabla->remember_token = Str::random(10);
        $tabla->save();
    }
}
