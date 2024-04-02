@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h1 text-center text-success py-4 "> QUIZ - Teste de conhecimentos gerais e específicos sobre os microrganismos Actinomicetos</p>
</div>
<div class="column princi">
    <div class="col-md-6 col-sm-6 text-center bg-success imagem ">
        <a href="#" class=" logo ">
            <img class="img-fluid" src="{{asset('storage/image/placaPetri.jpg')}}" />
        </a>
    </div>
    <div class="col-md-6 col-sm-6 text- enter py-4 ">
        <p class="texto">
        <h4 class="text-success text-center"> O quanto você sabe sobre os Actinomicetos? <br>
            <strong> Venha descobrir! </strong>
        </h4>
        </p>
        <div class="card-footer py-4 text-center ">

            <a href="/iniciar" class=" btn btn-primary" role="button">Começar </a>

        </div>
    </div>
</div>
@endsection