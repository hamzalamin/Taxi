<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admine;
use Illuminate\Http\Request;

class AdmineController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
        ]);
        // dd($validatedData);

        $user = new User(); // Use the User model
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->save();

        return redirect()->back()->with('success', 'User added successfully.');
    }
}