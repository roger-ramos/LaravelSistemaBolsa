@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Seja Bem-Vindo</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <br>
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">

                                </div>
                                <div class="col-sm">
                                    <!--Mostrar dados -->
                                    <div class="card">
                                        <h5 class="card-header">Visualizar Departamentos</h5>
                                        <div class="card-body">
                                            <a href="teste" class="btn btn-primary"> Mostrar Departamentos</a>
                                            <br>
                                            <br>
                                           <!--<form method="POST" action="/departamento">
                                                {!! csrf_field() !!}
                                               <input type="hidden" name="operacao" value="mostrar"/>
                                                <input class="btn btn-primary" type="submit" value="Mostrar Departamentos"/>
                                            </form>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
