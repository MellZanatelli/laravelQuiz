@extends('layout')
@section('content')
<div class="card border">
    <div class="card-body">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <div class="col-md-6 col-sm-6 text-center justify-content-center align-items-center">
                <p class="justify-content-center align-items-center texto">
                <h4 class="text-success">
                    <strong> Pergunta 2: </strong>
                </h4>
                </p>
            </div>
        </div>
        <form action="{{route('dadosPagina2')}}" method="POST">
            @csrf
            <div class="form-group py-4 d-flex flex-column">
                <label for="pergunta">
                    <h3 class="text-center text-success">
                        <strong> A qual domínio os actinomicetos pertencem? </strong>
                    </h3>
                </label>
                <div class="form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                    <label class="form-check-label" for="pergunta">
                        <h5> Bactéria. </h5>
                    </label>
                </div>
                <div class="form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                    <label class="form-check-label" for="pergunta">
                        <h5> Fungi. </h5>
                    </label>
                </div>
                <div class=" form-check py-4 ">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                    <label class="form-check-label" for="pergunta">
                        <h5> Archea. </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                    <label class="form-check-label" for="pergunta">
                        <h5> Protista. </h5>
                    </label>
                </div>
                <div class="form-check py-4">
                    <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="E">
                    <label class="form-check-label" for="pergunta">
                        <h5> Eukarya. </h5>
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