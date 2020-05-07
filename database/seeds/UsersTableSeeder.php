<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                 => 1,
                'name'               => 'Admin',
                'email'              => 'admin@admin.com',
                'password'           => '$2y$10$1RR4DCBGHtw8QMJLDfdVCe/kRwRdQla82E3JXth2AcR4gsOPFAzLO',
                'remember_token'     => null,
                'approved'           => 1,
                'verified'           => 1,
                'verified_at'        => '2020-05-07 16:31:32',
                'verification_token' => '',
            ],
        ];

        User::insert($users);
    }
}
