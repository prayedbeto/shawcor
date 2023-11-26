<?php

namespace App\Http\Controllers;

use App\Exports\GruasExport;
use App\Models\Grua;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class GruasController extends Controller
{
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('date', 'LIKE', "%{$value}%")->orWhere('vessel', 'LIKE', "%{$value}%");
            });
        });

        $gruas = QueryBuilder::for(Grua::class)
            ->defaultSort('id')
            ->allowedSorts(['date', 'vessel', 'code'])
            ->allowedFilters(['date', 'vessel', 'code', $globalSearch])
            ->paginate()
            ->withQueryString();

        return Inertia::render('Gruas/Index', [
            'gruas' => $gruas,
        ]);
    }

    public function export()
    {
        $now = new Carbon();

        return Excel::download(new GruasExport, 'gruas-' . $now->format('d-m-Y') . '.xlsx');
    }
}
