<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable=['created_appoit', 'date_apoint', 'id_doctor', 'id_patient',];
}
