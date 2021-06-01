@extends('layouts.master')
@section('content')

<div class="row mt-5">
    <div class="col-sm-8">
        <h1>{{$datosGallery['title']}}</h1>
        <div>
            <h4> Etiquetas </h4>
            <ul>
                <li style="display: inline; color: slateblue;">#{{$datosGallery['ticket1']}}</li>
                <li style="display: inline; color: slateblue;">#{{$datosGallery['ticket2']}}</li>
                <li style="display: inline; color: slateblue;">#{{$datosGallery['ticket3']}}</li>
            </ul>

            <img src="{{$datosGallery['img']}}" style="height: 200px; width: 300px;">
        </div>

        <p><strong>Autor: </strong>{{$datosGallery['autor']}}</p>
        <!-- <p><strong>ID: </strong>{{$id}}</p> -->
        <p style="font-family: 'Comic Sans'; font-weight: bold; color: grey;">Subida: {{$datosGallery['updated_at']}}</p>

    <div class="row">
        <div class="col-md-4">
            <button onclick="window.location='/gallery/edit/{{$id}}'" class="btn btn-primary"> Edita Publicació </button>
        </div>
        <div class="col-sm-4">
            <button onclick="window.location='/gallery'" class="btn btn-default"><strong>< </strong>Volver al listado</button>
        </div>
    </div>
</div>

@stop