<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\Candidatura;
use App\Mail\CurriculoAnexo;
use App\Models\Vaga;

class UserController extends Controller
{

    public function redirect($provider) {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(Request $request, $provider) {

        $userProvider = Socialite::driver($provider)->user();

        $user = User::firstOrCreate(['email' => $userProvider->getEmail()], [
            'name' => $userProvider->getName(),
            'email' => $userProvider->getEmail(),
            'provider' => $provider,
            'provider_id' => $userProvider->getId(),
        ]);

        
        $request->session()->put('user', $user);

        return to_route('vagas.index');
    }

    public function upload(Request $request, $id) {

        $vaga = Vaga::find($id);

        $curriculo = $request->file('curriculo');
        
        Mail::to($vaga->email)->send(new CurriculoAnexo($vaga->titulo, $vaga->id, $curriculo));

        Candidatura::create([
            'user_id' => session()->get('user')['id'],
            'vaga_id' => $vaga->id
        ]);

        return to_route('vagas.index');
    }
}
