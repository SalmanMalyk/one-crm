<?php

namespace App\Http\Controllers;

use App\Models\User;
use Faker\Provider\Uuid;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function users(Request $request)
    {
        return Inertia::render('Users', [
            'users' => User::query()
                ->when($request->search, function ($query, $search) {
                    return $query->where('name', 'LIKE', "%{$search}%");
                })
                ->paginate(15)
                ->withQueryString()
                ->through(function ($user) {
                    return [
                        'id'    => Uuid::uuid($user->id),
                        'name'  => $user->name
                    ];
                }),
            'filters' => $request->only(['search'])
        ]);
    }
}
