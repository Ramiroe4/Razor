
@include('security.header')
<div class="panel panel-success">
	<div class="panel-heading">
		<h4>Lista de usuarios</h4>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Sexo</th>
					<th>Fecha de nacimiento</th>
					<th>Tipo de usuario</th>
					<th>Correo</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->lastName }}</td>
					<td>{{ $user->sexo }}</td>
					<td>{{ $user->dateBorn }}</td>
					<td>{{ $user->typeUser }}</td>
					<td>{{ $user->email }}</td>
					<td>
						<a href="/users/show/{{ $user->id }}"><span class="label label-info">Ver</span></a>
						<a href="/users/edit/{{ $user->id }}"><span class="label label-success">Editar</span></a>
						<a href="{{ url('/users/destroy',$user->id) }}"><span class="label label-danger">Eliminar</span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@if(Session::has('message'))
<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
@endif
</body>
</html>
