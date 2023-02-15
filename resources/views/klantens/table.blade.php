<div class="table-responsive">
    <table class="table" id="klantens-table">
        <thead>
            <tr>
                <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Geslacht</th>
        <th>Adres</th>
        <th>District</th>
        <th>Telefoonnummer</th>
        <th>Email</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($klantens as $klanten)
            <tr>
                <td>{{ $klanten->voornaam }}</td>
            <td>{{ $klanten->achternaam }}</td>
            <td>{{ $klanten->geslacht }}</td>
            <td>{{ $klanten->adres }}</td>
            <td>{{ $klanten->district }}</td>
            <td>{{ $klanten->telefoonnummer }}</td>
            <td>{{ $klanten->email }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['klantens.destroy', $klanten->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('klantens.show', [$klanten->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('klantens.edit', [$klanten->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
