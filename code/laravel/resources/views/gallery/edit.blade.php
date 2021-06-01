@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Edita Publicació
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/gallery/edit/' . $datosGallery->id ) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" required="1" id="title" class="form-control">
                </div>

                <div class="form-group">
                        <label for="ticket1">Etiqueta 1</label>
                        <input type="text" name="ticket1" id="ticket1" class="form-control">
                </div>

                <div class="form-group">
                        <label for="ticket2">Etiqueta 2</label>
                        <input type="text" name="ticket2" id="ticket2" class="form-control">
                </div>

                <div class="form-group">
                        <label for="ticket3">Etiqueta 3</label>
                        <input type="text" name="ticket3" id="ticket3" class="form-control">
                </div>

                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                        Envia
                    </button>
                </div>
            </form>
         </div>
      </div>
   </div>
</div>
@stop