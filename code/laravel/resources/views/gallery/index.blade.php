@extends('layouts.master')
@section('content')

<br>
<div class="row">
@foreach( $arrayGallery as $gallery )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center" style="margin: 15px;">
        <a href="{{ url('/gallery/' . $gallery->id ) }}">
            <h4> {{$gallery['title']}} </h4>
            <img src="{{$gallery['img']}}" style="height: 200px; width: 300px;">
        </a>
    </div>
@endforeach
</div>

@stop