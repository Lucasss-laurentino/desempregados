<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vaga;

use App\Models\Beneficio;

use App\Models\Candidatura;

class VagaController extends Controller
{
    public function index() {

        if(session()->get('user') != null) {

            $candidaturas = Candidatura::where('user_id', session()->get('user')['id'])->get();
            $vagas = Vaga::query()->orderBy('id', 'desc')->simplePaginate(10);

            return view('vagas.index')->with('vagas', $vagas)->with('candidaturas', $candidaturas);
    
        } else {
            $vagas = Vaga::query()->orderBy('id', 'desc')->simplePaginate(10);

            return view('vagas.index')->with('vagas', $vagas);
        }


    }

    public function create() {
        return view('vagas.create');
    }

    public function store(Request $request) {

        // cadastrando vaga
        $vaga = Vaga::create([
            'email' => $request->email,
            'titulo' => $request->titulo,
            'cargo' => $request->cargo,
            'tipo_de_vaga' => $request->tipo_de_vaga,
            'forma_de_trabalho' => $request->forma_de_trabalho,
            'estado' => $request->estado,
            'cidade' => $request->cidade,
            'salario' => $request->salario,
            'descricao' => $request->descricao,
            'requisitos' => $request->requisitos,
        ]);

        // cadastrando beneficios da vaga
        $beneficios = [
            'vale-transporte',
            'vale-alimentacao',
            'vale-refeicao',
            'refeicao-local',
            'cesta-basica',
            'convenio-medico',
            'seguro-grupo',
            'convenio-faculdade',
            'auxilio-creche',
            'outros'
        ];

        // para cada beneficio escolhido, crie um registro no banco
        foreach($beneficios as $beneficio) {
            
            if($request->has($beneficio)){
                
                Beneficio::create([
                    'beneficio' => $request->$beneficio,
                    'vaga_id' => $vaga->id
                ]);

            }

        }

        return to_route('vagas.index');
    }

    public function logout(Request $request) {
        
        $request->session()->flush('user');

        return to_route('vagas.index');
    }

    public function show($id) {

        $vaga = Vaga::find($id);

        $candidaturas = Candidatura::where('user_id', session()->get('user')['id'])->get();

        foreach($candidaturas as $candidatura) {

            if(!empty($vaga)) {

                // Se esse usuario possuir candidatura pra esta vaga
                if($candidatura->vaga_id === $vaga->id) {
                
                    $beneficios = Beneficio::where('vaga_id', $vaga->id)->get();
        
                    return view('vagas.show')
                            ->with('vaga', $vaga)
                            ->with('beneficios', $beneficios)
                            ->with('candidatura', $candidatura);                        

                } else {

                    $beneficios = Beneficio::where('vaga_id', $vaga->id)->get();
                    $candidatura = null;
                    return view('vagas.show')
                            ->with('vaga', $vaga)
                            ->with('beneficios', $beneficios)        
                            ->with('candidatura', $candidatura);                        

                }        
            }
        }

        $beneficios = Beneficio::where('vaga_id', $vaga->id)->get();
        $candidatura = null;
        return view('vagas.show')
        ->with('vaga', $vaga)
        ->with('beneficios', $beneficios)        
        ->with('candidatura', $candidatura);                        



    }

}
