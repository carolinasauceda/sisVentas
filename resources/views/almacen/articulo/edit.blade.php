@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Articulo: {{ $articulo->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::model($articulo,['method'=>'PATCH','route'=>['almacen.articulo.update',$articulo->idarticulo],'file'=>'true'])!!}
            {{Form::token()}}
			<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{$articulo->nombre}}" required >
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
			<label for="">Categoria</label>
			<select class="form-control" name="idcategoria">
				@foreach ($categorias as $cat)
					@if ($cat->idcategoria==$articulo->idcategoria)
					<option value="{{$cat->idcategoria}}" selected>{{$cat->nombre}}</option>
					@else
					<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
					@endif
				@endforeach
			</select>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="codigo">Codigo</label>
            	<input type="text" name="codigo" class="form-control" value="{{$articulo->codigo}}" required>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="stock">Stock</label>
            	<input type="text" name="stock" class="form-control" value="{{$articulo->stock}}" required>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" class="form-control" value="{{$articulo->descripcion}}">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="imagen">imagen</label>
            	<input type="file" name="imagen" class="form-control" >
				@if (($articulo->imagen)!="")
					<img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" height="300" width="300">
				@endif
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	</div>

			{!!Form::close()!!}		
            
@endsection