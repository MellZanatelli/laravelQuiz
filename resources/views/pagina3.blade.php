@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="col-md-6 col-sm-6 text-center justify-content-center align-items-center">
                <p class="justify-content-center align-items-center texto">
                <h4 class="text-success">
                    <strong> Pergunta 3: </strong>
                </h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina3')}}" method="POST">
            @csrf
            <div class="form-group py-4 d-flex flex-column">
                <label for="pergunta">
                    <h3 class="text-center text-success">
                        <strong>  </strong>
                    </h3>
                </label>
                <div class="form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5> Vivem em locais áridos e, portanto, retém muitos fluidos. </h5>
                    </label>
                </div>
                <div class="form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5> Apresentam uma espessa camada de peptídeoglicano em sua parede celular. </h5>
                    </label>
                </div>
                <div class=" form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5> Apresentam naturalmente o pigmento violeta, o que os ajuda a produziir seu próprio alimento. </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5> Vivem em aglomerados, absorvendo e metabolizando em conjunto as substâncias a que são expostos. </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="E">
                    <label class="form-check-label" for="pergunta">
                        <h5> Por serem macrófagos, fagocitam os pigmentos de toda matéria orgânica ao seu redor. </h5>
                    </label>
                </div>
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center">
                <button type="submit" class="btn btn-primary btn-sm"> Próxima </button>
                <button onclick="window.location.href ='/';" type="button" class="btn btn-danger btn-sm"> Desistir </button>
            </div>
        </form>
    </div>
</div>
@endsection