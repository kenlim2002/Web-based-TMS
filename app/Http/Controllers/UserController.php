<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    
    public function create()
    {
        return view('users.create');
    }
     // Show all users
     public function index()
     {
         $users = User::all();
         return view('users.index', compact('users'));
     }
 
     // Show a specific user
     public function show(User $user)
     {
         return view('users.show', compact('user'));
     }
 
     // Store a new user in the database
     public function store(Request $request)
     {
         // Validation logic here (e.g., $request->validate())

         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
         // Save the user in the database
         $user = new User();
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->password = Hash::make($request->password);
         $user->save();
         return redirect()->route('users.index')->with('success', 'User created successfully!');


         
     }
 
     // Show the form to edit an existing user
     public function edit(User $user)
     {
         return view('users.edit', compact('user'));
     }
 
     // Update an existing user in the database
     public function update(Request $request, User $user)
     {
         // Validation logic here (e.g., $request->validate())
         // Update the user in the database
         $user->name = $request->input('name');
         $user->email = $request->input('email');
         $user->save();
 
         return redirect()->route('users.index')->with('success', 'User updated successfully!');
     }
 
     // Delete a user from the database
     public function destroy(User $user)
     {
         $user->delete();
         return redirect()->route('users.index')->with('success', 'User deleted successfully!');
     }
}
