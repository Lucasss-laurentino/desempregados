@extends('layout.layout')


@section('content')

<main style="height:100%;">
    <div class="row w-100">
        <div class="d-flex justify-content-center w-100 mt-3">
        </div>
        <div class="container d-flex justify-content-center my-4">
            <div class="col-10 col-sm-8 card border-card">
                <div class="card-header">
                    <div class="container d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title titulo-card m-0">{{ $vaga->titulo }}</h4>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                        </svg>                                
                    </div>
                    <div class="card-body">
                        <div class="container my-4">
                            <p class="font">Tipo de vaga:</p>
                            <p class="card-text mx-3">{{ $vaga->tipo_de_vaga }}</p>
                            <p class="card-text mx-3">{{ $vaga->forma_de_trabalho }}</p>
                        </div>
                        <div class="container my-4">
                            <p class="font">Cargo:</p>
                            <p class="card-text mx-3">{{ $vaga->cargo }}</p>
                        </div>
                        <div class="container my-4">
                            <p class="font">Local:</p>
                            <p class="card-text mx-3">{{ $vaga->estado }}</p>
                            <p class="card-text mx-3">{{ $vaga->cidade }}</p>
                        </div>
                        <div class="container my-4">
                            <p class="font">Salário:</p>
                            <p class="card-text mx-3">{{ $vaga->salario }}</p>
                        </div>
                        <div class="container my-4">
                            <p class="font">Benefícios:</p>
                            @foreach($beneficios as $beneficio)
                            <p class="card-text mx-3">{{ $beneficio->beneficio }}</p>
                            @endforeach
                        </div>
                        <div class="container my-4">
                            <p class="font">Descrição: </p>
                            <p class="card-text mx-3">{{ $vaga->descricao }}</p>
                        </div>                        
                        <div class="container my-4">
                            <p class="font">Requisitos: </p>
                            <p class="card-text mx-3">{{ $vaga->requisitos }}</p>
                        </div>                        

                    </div>
                </div>
                <div class="card-footer">
                    @if($candidatura != null)
                    <p class="font">Candidatou-se</p>
                    @else
                    <form action="{{ route('users.upload', $vaga->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label font">Envie seu currículo</label>
                            <input class="form-control" type="file" id="formFile" name="curriculo">
                        </div>    
                        <button class="btn btn-sm btn-ver-vaga w-100" type="submit">Enviar</button>                
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>

@endsection