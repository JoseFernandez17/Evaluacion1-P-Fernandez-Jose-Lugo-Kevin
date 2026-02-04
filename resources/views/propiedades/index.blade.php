<h1>Lista de Propiedades</h1>

<table border="1">
    <thead>
        <tr>
            <th>Direccion</th>
            <th>Metros Cuadrados</th>
            <th>Habitaciones</th>
            <th>Disponible</th>
        </tr>
    </thead>
    <tbody>

    @forelse($propiedades as $p)
    <tr>
        <td>{{$p->Direccion}}</td>

<td>{{$p->MetrosCuadrados}} m*2</td>

        <td>{{$p->Habitaciones}}</td>

        <td>{{$p->Disponible ? 'Disponible': 'Vendido'}}</td>
    </tr>
    @empty

    <tr>
        <td colspan="4">No se encontraron registros en el sistema.</td>
    </tr>
    @endforelse
    </tbody>
</table>
