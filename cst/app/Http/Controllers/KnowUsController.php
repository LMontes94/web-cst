<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Staff;
use App\Models\StaffPosition;
use Illuminate\Http\Request;

class KnowUsController extends Controller
{
    public function staff()
    {
        // Definir el orden deseado para los cargos
        $desiredPositions = ['Representante Legal', 'Directora General', 'Director', 'Directora', 'Vicedirectora'];

        // Obtener los IDs de los cargos en el orden deseado
        $positionIds = StaffPosition::whereIn('name', $desiredPositions)
            ->orderByRaw("FIELD(name, '" . implode("','", $desiredPositions) . "')")
            ->pluck('id')
            ->toArray();

        // Obtener el personal con los cargos deseados en el orden especificado
        $staff = Staff::with(['department.section', 'staffPositions' => function ($query) use ($positionIds) {
            $query->whereIn('staff_positions.id', $positionIds)
                ->orderByRaw("FIELD(staff_positions.id, " . implode(',', $positionIds) . ")");
        }])->get()->sortBy(function ($staff) use ($positionIds) {
            return array_search($staff->staffPositions->pluck('id')->first(), $positionIds);
        });
        return view('knowUs.staff', compact('staff'));
    }
    public function generalLetter()
    {
        // Obtener la Directora General usando el nombre de la posición o ID de la posición
        $directorGeneral = Staff::whereHas('staffPositions', function ($query) {
            $query->where('name', 'Directora General'); // Ajusta el nombre según tu base de datos
        })->with(['department.section', 'staffPositions'])->first();
        return view('knowUs.general-letter', compact('directorGeneral'));
    }
    public function definition()
    {
        return view('knowUs.definition');
    }
    public function history()
    {
        return view('knowUs.historia');
    }
    public function commitment()
    {
        return view('knowUs.commitment');
    }
}
