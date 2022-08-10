@extends('layout.layout')


@section('content')

<main style="height: 100%;">

    <div class="row justify-content-center w-100">
        <div class="col-6 mt-4 ">
            <form action="{{ route('vagas.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control border-input mt-2" name="email" id="email" placeholder="Email do recrutador">
                </div>
                <div class="form-group">
                   <input type="text" class="form-control border-input mt-2" name="titulo" id="titulo" placeholder="Titulo da vaga">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-input mt-2" name="cargo" id="cargo" placeholder="Cargo">
                </div>
                <div class="form-group">
                    <select class="form-select form-select-sm border-input my-3 select-color" name="tipo_de_vaga" aria-label=".form-select-sm example">
                        <option selected>Tipo de vaga</option>
                        <option value="Profissional">Profissional</option>
                        <option value="Estágio">Estágio</option>
                        <option value="Jovem apendiz">Jovem Aprendiz</option>
                    </select>            
                </div>
                <div class="form-group">
                    <select class="form-select form-select-sm border-input my-3 select-color" name="forma_de_trabalho" aria-label=".form-select-sm example">
                        <option selected>Forma de trabalho</option>
                        <option value="Presencial">Presencial</option>
                        <option value="Remoto">Remoto</option>
                        <option value="Híbrido">Híbrido</option>
                    </select>            
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-input mt-2" name="estado" id="estado" placeholder="Estado">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-input mt-2" name="cidade" id="cidade" placeholder="Cidade">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border-input mt-2" name="salario" id="salario" placeholder="Salário">
                </div>
                <div class="form-group">
                    <label for="" class="select-color p-2 w-100">Beneficios</label>
                    <div class="row w-100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="vale-transporte" value="vale transporte" id="vale-transporte">
                                <label class="form-check-label" for="vale-transporte">Vale transporte</label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="vale-alimentacao" value="vale alimentacao" id="vale-alimentacao">
                                <label class="form-check-label" for="vale-alimentacao">Vale alimentação</label>
                            </div>
                        </div>
                    </div>
                    <div class="row w-100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="vale-refeicao" value="vale refeicao" id="vale-refeicao">
                                <label class="form-check-label" for="vale-refeicao">
                                    Vale refeição
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="refeicao-local" id="refeicao-local" value="refeicao no local">
                                <label class="form-check-label" for="refeicao-local">
                                    Refeição no local
                                </label>
                            </div>            
                        </div>
                    </div>
                    <div class="row w-100 m-0">
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="cesta-basica" id="cesta-basica" value="cesta basica">
                                <label class="form-check-label" for="cesta-basica">
                                        Cesta básica
                                </label>
                            </div>            
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 p-0">
                            <div class="form-check form-switch mx-2">
                                <input class="form-check-input" type="checkbox" name="convenio-medico" id="convenio-medico" value="convenio medico">
                                <label class="form-check-label" for="convenio-medico">
                                        Convênio médico
                                </label>
                            </div>  
                        </div>
                        <div class="row w-100 m-0 p-0">
                            <div class="col-12 col-md-12 col-lg-6 p-0">
                                <div class="form-check form-switch mx-2">
                                    <input class="form-check-input" type="checkbox" name="seguro-grupo" id="seguro-grupo" value="seguro de vida em grupo">
                                    <label class="form-check-label" for="seguro-grupo">
                                            Seguro de vida em grupo
                                    </label>
                                </div>            
                            </div>
                            <div class="col-12 col-md-12 col-lg-6 p-0">
                                <div class="form-check form-switch mx-2">
                                    <input class="form-check-input" type="checkbox" name="convenio-faculdade" id="convenio-faculdade" value="convenio faculdade">
                                    <label class="form-check-label" for="convenio-faculdade">
                                        Convênio faculdade
                                    </label>
                                </div>            
                            </div>                        

                        </div>
                        <div class="row w-100 m-0 p-0">
                            <div class="col-12 col-md-12 col-lg-6 p-0">
                                <div class="form-check form-switch mx-2">
                                    <input class="form-check-input" type="checkbox" name="auxilio-creche" id="auxilio-creche" value="auxilio creche">
                                    <label class="form-check-label" for="auxilio-creche">
                                            Auxílio creche
                                    </label>
                                </div> 
                            </div>                        
                            <div class="col-12 col-md-12 col-lg-6 p-0">
                                <div class="form-check form-switch mx-2">
                                    <input class="form-check-input" type="checkbox" name="outros" id="outros" value="outros">
                                    <label class="form-check-label" for="outros">
                                            Outros
                                    </label>
                                </div>                                        
                            </div>
                        </div>
                    </div>    
                </div>
                <div class="form-group mb-2">
                    <label for="descricao" class="p-2 select-color">Descrição</label>
                    <textarea class="form-control borda-nav" id="descricao" name="descricao" rows="3"></textarea>                
                </div>
                <div class="form-group mb-2">
                    <label for="requisitos" class="p-2 select-color">Requisitos</label>
                    <textarea class="form-control borda-nav" id="requisitos" name="requisitos" rows="3"></textarea>                
                </div>
                <div class="form-group my-5">
                    <button class="btn btn-sm btn-ver-vaga">Públicar vaga</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection