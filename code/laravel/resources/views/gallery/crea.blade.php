@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Afegir Publicació
         </div>
         <div class="card-body" style="padding:30px">

            <form action="{{ url('/gallery/crea' ) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" required="1" id="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" required="1" id="status">
                        <option value="publicitat">publicitat</option>
                        <option value="no-publicitat">no publicitat</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="access">Accés</label>
                    <select name="access" required="1" id="access">
                        <option value="public">públic</option>
                        <option value="privat">privat</option>
                    </select>
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

                <div class="form-group">
                    <label for="autor">Autor</label>
                    <input type="text" name="autor" id="autor" class="form-control">
                </div>

                <div class="form-group">
                    <label for="autor">URL Foto</label>
                    <input type="text" name="img" id="img" class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input name="email" type="text" id="email" class="form-control"/>
                    <br>
                    <label for="emailConfirm">Confirmar e-mail</label>
                    <input name="emailConfirm" type="text" id="confemail" onblur="confirmEmail()" class="form-control"/>
                </div>

                <script type="text/javascript">
                    function confirmEmail() {
                        var email = document.getElementById("email").value
                        var confemail = document.getElementById("confemail").value
                        if(email != confemail) {
                            alert('El email no coincide!');
                        }
                    }
                </script>

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