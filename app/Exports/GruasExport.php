<?php

namespace App\Exports;

use App\Models\Grua;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GruasExport implements FromView
{

    public function view(): View
    {
        return view('exports.gruas.export', [
            'gruas' => Grua::all()
        ]);
    }
}
