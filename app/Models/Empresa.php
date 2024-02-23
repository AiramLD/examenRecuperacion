<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';

    protected $fillable = ['name', 'country', 'region', 'city'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }
}
