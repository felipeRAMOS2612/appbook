<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:student.create');
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'rut' => $request->rut,
            'address' => $request->address,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ])->assignRole($request->get('type_of_register'));

        if($request->get('type_of_register') == 'teacher'){
            $user = Teacher::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'rut' => $request->rut,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_id' => User::latest()->first()->id ?? null,
            ]);
        }

        if($request->get('type_of_register') == 'student'){
            $user = Student::create([
                'name' => $request->name,
                'last_name' => $request->last_name,
                'phone' => $request->phone,
                'rut' => $request->rut,
                'address' => $request->address,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'user_id' => User::latest()->first()->id ?? null,
            ]);
        } 

        event(new Registered($user));

        return redirect()->route('login');
    }
}
