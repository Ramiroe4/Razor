
@include('security.header')
<div class="panel panel-success">
	<div class="panel-heading">
		<h4>Lista de citas</h4>
	</div>

	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Fecha de creación</th>
					<th>Fecha de cita</th>
					<th>Médico</th>
					<th>Paciente</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($appointments as $appointment)
				<tr>
					<td>{{ $appointment->id }}</td>
					<td>{{ $appointment->created_appoi }}</td>
					<td>{{ $appointment->date_apoint }}</td>
					<td>{{ $appointment->id_doctor }}</td>
					<td>{{ $appointment->id_patient }}</td>
					<td>
						<a href="/appointments/show/{{ $appointment->id }}"><span class="label label-info">Ver</span></a>
						<a href="/appointments/edit/{{ $appointment->id }}"><span class="label label-success">Editar</span></a>
						<a href="{{ url('/appointments/destroy',$appointment->id) }}"><span class="label label-danger">Eliminar</span></a>
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
