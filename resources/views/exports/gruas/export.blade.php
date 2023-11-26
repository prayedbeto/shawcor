@php
    $now = new \Carbon\Carbon();
@endphp

<table>
    <thead>
        <tr>
            <th></th>
            <th>Reporte Gruas</th>
        </tr>
        <tr>
            <td>Fecha</td>
            <th>{{ $now->format('d/m/Y h:m A') }}</th>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <th>DATE</th>
            <th>VESSEL</th>
            <th>TOTAL TIME</th>
            <th>CODE</th>
            <th>OBSERVATIONS</th>
            <th>TIME</th>
            <th>MANIOBRAS</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($gruas as $grua)
            <tr>
                <td>
                    {{ $grua->date }}
                </td>
                <td>
                    {{ $grua->vessel }}
                </td>
                <td>
                    {{ $grua->totaltime }}
                </td>
                <td>
                    {{ $grua->code }}
                </td>
                <td>
                    {{ $grua->observations }}
                </td>
                <td>
                    {{ $grua->time }}
                </td>
                <td>
                    {{ $grua->maniobras }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
