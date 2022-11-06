@extends("layouts.plantilla8")

@section("cabecera")

<h1>Registrar Libro</h1>

@endsection

@section("infoGeneral")
@if($errors->any())
        @foreach($errors->all() as $error)
        <!--AQUÍ PONER EL ALERT DE BOOTSTRAP-->
    <!--Debajo del div de apertura del alert colocamos <strong>{{$error}}</strong>-->
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{$error}}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" onclick="location='reg'"></button>
    </div>
        @endforeach
         
        @endif
        <!--FORMULARIO-->
        <form method="post" action="enviarDatos">
            @csrf
            
            <div class="mb-6">
            <label for="exampleFormControlInput1" class="form-label" style="width: 50%" required>ISBN</label>
            <input type="number" class="form-control" name="isbn" style="width: 50%" pattern="^[0-9]+([,]?[0-9]+)*$">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 50%">Título</label>
            <input type="text" class="form-control" name="titulo" style="width: 50%">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 50%">Autor</label>
            <input type="text" class="form-control" style="width: 50%">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 50%">Páginas</label>
            <input type="text" class="form-control" name="pag" style="width: 50%">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 50%">Editorial</label>
            <input type="text" class="form-control" style="width: 50%">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label" style="width: 50%">Email de Editorial</label>
            <input type="text" class="form-control" style="width: 50%">
        </br>
            <button class="btn btn-success me-2" type="submit" name="email">Registrar</button>
            </div>
        </form>
@endsection

@section("pie")

@endsection