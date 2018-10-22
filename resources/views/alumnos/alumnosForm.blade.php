
<!--
 * Created by PhpStorm.
 * User: AlexisCruz
 * Date: 16/10/2018
 * Time: 18:11
 -->

@extends('layouts.tema')

@section('contenido')
<form>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" placeholder="Nombre">
        <!--small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</smal-->
      </div>
      <div class="form-group">
        <label for="codigo">Codigo</label>
        <input type="number" class="form-control" id="codigo" placeholder="Codigo">
      </div>
      <div class="form-group form-check">
          <label class="form-check-label" for="carrera">Carrera</label>
        <input type="text" class="form-control" id="carrera" placeholder="Carrera">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

