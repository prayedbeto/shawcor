@php
    $now = new \Carbon\Carbon();
@endphp

<table>
    <thead>
        <tr>
            <th></th>
            <th>REPORTE BUQUES</th>
        </tr>
        <tr>
            <td>Fecha</td>
            <th>{{ $now->format('d/m/Y h:m A') }}</th>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <th>
                Fecha
            </th>
            <th>
                Documento
            </th>
            <th>
                Vessel
            </th>
            <th>
                Hora Atraque
            </th>
            <th>
                Hora preparacion
            </th>
            <th>
                Hora inicio maniobra
            </th>
            <th>
                Final de maniobra
            </th>
            <th>
                Total de maniobras
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($buques as $buque)
            <tr>
                <td>
                    {{ $buque->Fechab }}
                </td>
                <td>
                    {{ $buque->Nodoc }}
                </td>
                <td>
                    {{ $buque->Barco }}
                </td>
                <td>
                    {{ $buque->Hatraque }}
                </td>
                <td>
                    {{ $buque->Havisopre }}
                </td>
                <td>
                    {{ $buque->Iniman }}
                </td>
                <td>
                    {{ $buque->Fultman }}
                </td>
                <td>
                    {{ $buque->Titotmanio }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
