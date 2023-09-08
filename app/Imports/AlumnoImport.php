<?php

namespace App\Imports;

use App\Models\Alumno;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class AlumnoImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Alumno|null
     */
    public function model(array $row)
    {


        // Verificar si la matrícula no está en blanco
        if (!empty($row[4])) {
            return new Alumno([
                'clacentro'     => $row[0],
                'nombreplan'    => $row[1],
                'clavemuni'     => $row[2],
                'clavelocal'    => $row[3],
                'matricula'     => $row[4],
                'nombres'       => $row[5],
                'papellido'     => $row[6],
                'sapellido'     => $row[7],
                'curp'          => $row[8],
                'telcasa'       => $row[9],
                'nacionalidad'  => $row[10],
                'foliosec'      => $row[11],
                'correo'        => $row[12],
                'celular'        => $row[13],
                'grado'         => $row[14],
                'grupo'         => $row[15],
                'estatus'       => $row[16],

            ]);
        }

        // Si la matrícula está en blanco, retornar null para omitir la fila
        return null;
    }

}
