<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $users = [
            [
                'name' => 'Samiir',
                'age' => 30,
            ],
            [
                'name' => 'Mohamed',
                'age' => 20,
            ],
            [
                'name' => 'Abdi',
                'age' => 16,
            ],
        ];

        // dump($users);

        return view(
            'dashboard',
            [
                'userList' => $users
            ]
        );
    }
}
