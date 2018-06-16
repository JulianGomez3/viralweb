<?php

namespace App\Http\Controllers\Auth;
    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    use App\Participante;
    use DB;

class LoginController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/Inicio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }


    protected function logout(){
        Auth::logout();
        return redirect('Login');
    }

    public function login(Request $request){
        
        $validatedData = $request->validate([
            'codigo' => 'required|max:10',
            'clave' => 'required|string',
            'optradio' => 'required'
        ]);
        
        if(Auth::attempt(['codigo'=>$validatedData['codigo'], 'password'=>$validatedData['clave'], 'tipo'=>$validatedData['optradio']])){
            $url;
            switch ($validatedData['optradio']) {
                case '2':
                    $url='/Administrador';
                    break;
                default:
                    $url='/Perfil';
                    break;
            }
            return redirect($url);
        }
        else{
            return back()->with('warning', 'Codigo y/o contraseña incorrectos.');
        }

        
        
    }

}


