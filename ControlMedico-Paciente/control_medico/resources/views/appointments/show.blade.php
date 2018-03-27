@include('security.header')

<div class="panel panel-success">
  <div class="panel-heading">
   <h4>Información de la cita</h4>
 </div>

 <div class="panel-body">
  @if (!empty($appointment))
  <p>
    Creada: <strong>{{ $appointment->created_appoi}}</strong>
  </p>
  <p>
    Fecha de cita: <strong>{{ $appointment->date_apoint }}</strong>
  </p>
  <p>
    Doctor: <strong>{{ $appointment->id_doctor}}</strong>
  </p>
  <p>
    Paciente: <strong>{{ $appointment->id_patient}}</strong>
  </p>
  @else
  <p>
    No existe información para esta cita.
  </p>
  @endif
  <a href="/appointments" class="btn btn-default">Regresar</a>
</div>
</div>
</body>
</html>