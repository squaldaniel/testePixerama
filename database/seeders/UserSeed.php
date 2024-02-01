<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\AuthController;
use App\Models\UsersModel;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsersModel::create([
            'email'=> "admin@sys.com",
            'passwd'=> AuthController::cryptin('admin@sys.com', '1234'),
            'active'=> 1
        ]);
    }
}
