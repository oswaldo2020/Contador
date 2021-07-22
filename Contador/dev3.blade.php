@extends('layout')

@section('title', 'Prueba3')

@section('content')
<div class="container">
        <div class="row">
                <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                        <form class="bg-white shadow rounded py-3 px-4">
                                <h1 class="display-6">Cuenta los números repetidos y los multiplica por el número de veces que está repetido</h1>
                                <hr>
                                <div class="form-group">
                                        <label for="numbers5">Ingresa una cadena de números separados por comas. Ejem. 6,89,11,4</label>
                                                <input class="form-control bg-light shadow-sm"
                                                type="text"
                                                id="numbers5"
                                                name="numbers5">
                                </div>

                                        <button class="btn btn-primary btn-lg btn-block"
                                        type="submit"
                                        name="procesar"
                                        value="procesar"
                                        id="enviar" >Numeros repetidos
                                        </button><br><br>

                                        @isset($desa)
                                        <ul class="list-group">
                                                @foreach($desa as $desaItem => $vecesRep)
                                                <li class="list-group-item border-0 mb-3 shadow-sm">
                                                        <span class="font-weight-bold">
                                                        {{$desaItem .'('. $vecesRep . ')'. ' = ' . $desaItem * $vecesRep }}
                                                        </span>
                                                </li>
                                                @endforeach
                                        </ul>
                                        @endisset
                        </form>

                </div>
        </div>
</div>
@endsection