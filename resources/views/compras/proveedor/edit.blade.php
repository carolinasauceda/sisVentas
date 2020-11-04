@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Proveedor: {{ $persona->nombre}}</h3>
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

			{!!Form::model($persona,['method'=>'PATCH','route'=>['compras.proveedor.update',$persona->idpersona]])!!}
            {{Form::token()}}
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{$persona->nombre}}" required>
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="direccion">Direccion</label>
            	<input type="text" name="direccion" class="form-control" value="{{$persona->direccion}}">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
			<label for="tipo_documento">Documento</label>
			<select class="form-control" name="tipo_documento">
				@if ($persona->tipo_documento=='DNI')
					<option value="PASS" selected>PASS</option>
					<option value="CURP">CURP</option>
					<option value="RFC">RFC</option>
				@elseif($persona->tipo_documento=='CURP')
					<option value="PASS">PASS</option>
					<option value="CURP" selected>CURP</option>
					<option value="RFC">RFC</option>
				@else
					<option value="PASS">PASS</option>
					<option value="CURP">CURP</option>
					<option value="RFC" selected>RFC</option>
				@endif
			</select>
			</div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="num_documento">Numero de Documento</label>
            	<input type="text" name="num_documento" class="form-control" value="{{$persona->num_documento}}">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="telefono">Telefono</label>
            	<input type="phone" name="telefono" class="form-control" value="{{$persona->telefono}}" placeholder="Telefono..">
            </div>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
            	<label for="email">Email</label>
            	<input type="email" name="email" class="form-control" value="{{$persona->email}}" placeholder="Email...">
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