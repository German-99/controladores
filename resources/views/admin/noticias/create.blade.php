@extends('layouts.admin')
@section("contenido_principal")
    <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
    <h1></h1>
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Noticias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Noticia</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Crear noticia</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route("admin.noticias.store") }}">
                @csrf
                <div class="form-group">
                    <label>Titulo:</label>
                     <input name="titulo" type="text">
                 </div>
                 <div class="form-group">
                    <label>Fecha:</label>
                    <input name="fecha" type="date">
                 </div>
                 <div class="form-group">
                    <label>Autor:</label>
                    <input name="autor" type="text">
                 </div>
                 <div  class="form-group">
                 <label>Cuerpo:</label>
                 <textarea rows="5" name="cuerpo"></textarea>
                 </div>
                 <div class="form-group">
                    <label>Foto</label>
                    <input name="foto" type="text">
                 </div>
                 <button type="submit">Agregar nueva noticia</button>
             </form>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Pie de pagina
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
 <!-- /.content -->
@endsection