<div class="table-responsive">
    <table class="table" id="leveranciers-table">
        <thead>
            <tr>
                <th>Bedrijfsnaam</th>
        <th>Adres</th>
        <th>District</th>
        <th>Directeur</th>
        <th>Telefoonnummer</th>
        <th>Website</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($leveranciers as $leveranciers)
            <tr>
                <td>{{ $leveranciers->bedrijfsnaam }}</td>
            <td>{{ $leveranciers->adres }}</td>
            <td>{{ $leveranciers->district }}</td>
            <td>{{ $leveranciers->directeur }}</td>
            <td>{{ $leveranciers->telefoonnummer }}</td>
            <td>{{ $leveranciers->website }}</td>
            @if (request()->path() !== 'restore-leveranciers')

                <td width="120">
                    {!! Form::open(['route' => ['leveranciers.destroy', $leveranciers->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leveranciers.show', [$leveranciers->id]) }}" class='btn btn-default btn-s'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('leveranciers.edit', [$leveranciers->id]) }}" class='btn btn-default btn-s'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-s', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>

                @else
                <td width="120">
                    {!! Form::open(['route' => ['leveranciers.restoreBack', $leveranciers->id], 'method' => 'post']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('leveranciers.restoreShow', [$leveranciers->id]) }}" class='btn btn-default btn-s'>
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
