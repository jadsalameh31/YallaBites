<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;

class RolesController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|unique:roles|max:255',
        ]);

        // Create a new role instance
        $role = new Roles;
        $role->name = $request->name;
        $role->save();

        return redirect()->route('index')->with('success', 'Role added successfully');
    }

    public function index()
    {
        // Retrieve all roles from the database
        $roles = Roles::all();

        return view('index', compact('roles'));
    }
}
