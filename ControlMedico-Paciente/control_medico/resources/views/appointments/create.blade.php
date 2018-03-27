@include('security.header')

<div class="panel panel-success">
	<div class="panel-heading">
		<h4>Nueva cita</h4>
	</div>

	<div class="panel-body">
		<form method="post" action="store">
			<p>
				<label>Fecha de creación</label> <br>
				<input id="dateBorn" type="date" name="created" min="now" required autofocus>
			</p>
			<p>
				<label>Fecha de cita</label> <br>
				<input id="dateBorn" type="date" name="date_appoi" min="now" required autofocus>
			</p>
			<p>
				<label>Médico</label> <br>
				<input type="numeric" placeholder="Paciente" name="id_doctor" required autofocus>
			</p>
			<p>
				<label>Paciente</label> <br>
				<input type="numeric" placeholder="Paciente" name="id_patient" required autofocus>
			</p>
			<p>
				<input type="submit" value="Guardar" class="btn btn-success">
			</p>
		</form>
	</div>
</div>

@if(Session::has('message'))
<div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
@endif
</body>
</html>