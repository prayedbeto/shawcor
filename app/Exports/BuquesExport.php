<?php

namespace App\Exports;

use App\Models\Buque;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class BuquesExport implements FromView
{
    public function view(): View
    {
        return view('exports.buques.export', [
            'buques' => Buque::all()
        ]);
    }
}
