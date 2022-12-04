<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Ramsey\Uuid\v1;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachingCourses = Course::all()->where('user_id', Auth::user()->id);
        $enrolledCourses = Auth::user()->classes;

        return view('users.userIndex', compact('teachingCourses', 'enrolledCourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.userRegister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'comfirmedPassword' => 'required|min:8'
        ]);

        // validar la contraseña ingresada con la confirmación

        User::create($request->all());

        return redirect('user');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $teachingCourses = Course::all()->where('user_id', $user->id);
        $enrolledCourses = $user->classes;

        return view('users.userShow', compact('user', 'teachingCourses', 'enrolledCourses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $teachingCourses = Course::all()->where('user_id', $user->id);
        $enrolledCourses = $user->classes;

        return view('users.userEdit', compact('user', 'teachingCourses', 'enrolledCourses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            // 'password' => 'required|min:8',
            // 'comfirmedPassword' => 'required|min:8'
        ]);

        // validar la contraseña ingresada con la confirmación
            // validar también los campos que queden en null para no guardarlos en la DB

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = $request->password;
        $user->save();

        User::where('id', $user->id)->update($request->except('_token', '_method', 'password'));

        return redirect('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('user');
    }
}
