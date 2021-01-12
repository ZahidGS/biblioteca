<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function perfil()
    {
        $books = Book::where('user_id', Auth::id())
            ->orderBy('titulo','asc')
            ->paginate(7);

        return view('auth.perfil', compact('books'));
    }

    public function editPerfil()
    {
        $user = User::find(Auth::user()->id);
        return view('auth.actualizarPerfil', compact('user'));
    }

    public function updatePerfil(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'picture' => 'image'
        ]);

        $user->name = $request['name'];
        $user->email = $request['email'];

        if (isset($request['picture'])) {
            $ruta_imagen = $request['picture']->store('images/users','public');

            $user->picture = $ruta_imagen;
        }

        $user->save();

        return redirect()->route('perfil');

    }
}
