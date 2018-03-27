@include('security.header')

	<div class="panel panel-success">
  		<div class="panel-heading">
  			<h4>Editar Cita</h4>
  		</div>

  		<div class="panel-body">
        @if (!empty($appointment))
    			<form method="post" action="/appointments/update/{{ $appointment->id }}">
          <p>
            <label>Fecha de creación</label>
            <input value="{{ $appointment->created_appoi }}" type="date" name="created" class="form-control" required>
          </p>
          <p>
            <label>Fecha de cita</label>
            <input value="{{ $appointment->date_apoint }}" type="date" name="date_appoi" class="form-control" required>
          </p>
          <p>
            <label>Doctor</label>
            <input value="{{ $appointment->id_doctor }}" type="numeric" name="id_doctor" class="form-control" required>
          </p>
          <p>
            <label>Paciente</label>
            <input value="{{ $appointment->id_patient }}" type="numeric" name="id_patient" class="form-control" required>
          </p>
          <input type="submit" value="Guardar" class="btn btn-success">
          @else
          <p>
            No existe información para éste para la cita.
          </p>
          @endif
        <a href="/appointments" class="btn btn-default">Regresar</a>
      </form>
		</div>
	</div>

  @if(Session::has('message'))
    <div class="alert alert-{{ Session::get('class') }}">{{ Session::get('message')}}</div>
  @endif
</body>
</html>