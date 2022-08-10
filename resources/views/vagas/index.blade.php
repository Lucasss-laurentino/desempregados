@extends('layout.layout')


@section('content')

<main style="height: 80vh;">
            <div class="container d-flex justify-content-center mt-4">
                <ul class="list-group" style="width: 90%;">
                    <!--- Card --->
                    @isset($vagas)
                    @foreach($vagas as $vaga)
                    <li class="list-group-item border-white d-flex justify-content-center">
                        <div class="card border-card col-12">
                            <div class="card-body">
                                <div class="container d-flex justify-content-between align-items-center mb-3">
                                    <h4 class="card-title titulo-card m-0">{{ $vaga->titulo }}</h4>
                                </div>
                                <div class="container d-flex my-4">
                                    <p class="font mx-3 d-none d-sm-block">Descrição: </p>
                                    <p class="card-text">{{ $vaga->descricao }}</p>
                                </div>
                                <form action="{{ route('vagas.show', $vaga->id) }}" method="get">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button class="btn btn-sm d-flex align-items-center login btn-ver-vaga">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-eye mx-2" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                            </svg>
                                            Ver vaga
                                        </button>
                                        @if(session()->get('user') != null)
                                        @foreach($candidaturas as $candidatura)
                                        @if($candidatura->vaga_id == $vaga->id)
                                        <p class="font mx-3 my-0">Candidatou-se</p>
                                        @endif
                                        @endforeach
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    @endisset
                    <!--- Fim Card --->
                    <div class="col-12 mt-2 mb-3 pb-3 pt-2">
                        <div class="d-flex justify-content-center text-success">
                            {{ $vagas->links() }}
                        </div>
                    </div>
                </ul>
            </div>
        </main>


@endsection