@extends('layouts.master')
@section('content')

<h1>Bloc creat amb Laravel</h1>
<br>
<p>Benvingut al bloc de Ruben Aguilera</p>
<div class="row">
    <div class="col-md-4">
        <button onclick="window.location='/gallery/crea'" class="btn btn-primary"> Afegeix una publicació </button>
    </div>
    <div class="col-md-4">
        <button onclick="window.location='/gallery'" class="btn btn-warning"> Veure totes les publicacions</button>
    </div>  

@stop