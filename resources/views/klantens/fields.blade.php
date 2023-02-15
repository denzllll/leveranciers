<!-- Voornaam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voornaam', 'Voornaam:') !!}
    {!! Form::text('voornaam', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Achternaam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('achternaam', 'Achternaam:') !!}
    {!! Form::text('achternaam', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Geslacht Field -->
<div class="form-group col-sm-6">
    {!! Form::label('geslacht', 'Geslacht:') !!}
    {!! Form::text('geslacht', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Adres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adres', 'Adres:') !!}
    {!! Form::text('adres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- District Field -->
<div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    {!! Form::text('district', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telefoonnummer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
    {!! Form::text('telefoonnummer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>