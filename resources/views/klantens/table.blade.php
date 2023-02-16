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
            @if (request()->path() !== 'restore-klanten')

                <td width="120">
                    {!! Form::open(['route' => ['klantens.destroy', $klanten->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('klantens.show', [$klanten->id]) }}" class='btn btn-default btn-s'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('klantens.edit', [$klanten->id]) }}" class='btn btn-default btn-s'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-s', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            @else
            <td width="120">
                    {!! Form::open(['route' => ['klanten.restoreBack', $klanten->id], 'method' => 'post']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('klanten.restoreShow', [$klanten->id]) }}" class='btn btn-default btn-s'>
                            <i class="far fa-eye"></i>
                        </a>
                        {!! Form::button('<i class="fas fa-trash-restore"></i>', ['type' => 'submit', 'class' => 'btn btn-warning btn-s', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
