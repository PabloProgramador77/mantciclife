<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Http\Requests\Users\Profile;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            
            $users = User::orderBy('created_at', 'desc')
                    ->get();

            $roles = Role::all();

            return view('usuarios.index', compact('users', 'roles'));

        } catch (\Throwable $th) {
            
            echo $th->getMessage();
            
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            
            if( auth()->user()->id ){

                return view('usuarios.perfil');

            }else{

                return redirect('/');

            }

        } catch (\Throwable $th) {
            
            echo $th->getMessage();

        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $password = str_replace(' ', '', $request->nombre);
            $password = strtolower( $password );

            $usuario = User::create([

                'name' => $request->nombre,
                'email' => $request->email,
                'password' => Hash::make( $password.'123' ),

            ]);

            if( $usuario->id ){

                $usuario->syncRoles( [$request->rol] );

                $datos['exito'] = true;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( Profile $request )
    {
        try {
            
            $usuario = User::where('id', '=', auth()->user()->id)
                    ->update([

                        'name' => $request->nombre,
                        'email' => $request->email,

                    ]);

            $datos['exito'] = true;

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            
            $usuario = User::find( $request->id );
            
            if( $usuario->id ){

                User::where('id', '=', $request->id)
                    ->update([

                        'name' => $request->nombre,
                        'email' => $request->email,

                    ]);

                $usuario->syncRoles( [$request->rol] );

                $datos['exito'] = true;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        try {
            
            $usuario = User::find( $request->id );

            if( $usuario->id ){

                $usuario->delete();

                $datos['exito'] = true;

            }
        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json( $datos );
    }
}
