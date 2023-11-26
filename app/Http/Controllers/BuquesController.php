<?php

namespace App\Http\Controllers;

use App\Models\Buque;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class BuquesController extends Controller
{
    public function index()
    {
        $globalSearch = AllowedFilter::callback('global', function ($query, $value) {
            $query->where(function ($query) use ($value) {
                $query->where('Fechab', 'LIKE', "%{$value}%")->orWhere('Nodoc', 'LIKE', "%{$value}%");
            });
        });

        $buques = QueryBuilder::for(Buque::class)
            ->defaultSort('id')
            ->allowedSorts(['Fechab', 'Nodoc', 'Barco'])
            ->allowedFilters(['Fechab', 'Nodoc', 'Barco', $globalSearch])
            ->paginate()
            ->withQueryString();

        return Inertia::render('Buques/Index', [
            'buques' => $buques,
        ]);
    }

    public function records(Request $request)
    {
        $perPage = $request->length;

        $buques = Buque::paginate($perPage);

        return $buques;
    }
}
