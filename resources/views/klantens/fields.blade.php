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
<!-- <div class="form-group col-sm-6">
    {!! Form::label('geslacht', 'Geslacht:') !!}
    {!! Form::text('geslacht', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> -->


<div class="form-group col-sm-6">
    {!! Form::label('geslacht', 'Geslacht:') !!}
    <select class="custom-select" name="geslacht" id="geslacht">
        <option value="option_select" disabled selected>Selecteer geslacht</option>
        @if(isset($klanten))
        <option value="man" {{ $klanten->geslacht == 'man' ? 'selected' : '' }}>Man</option>
        <option value="vrouw" {{ $klanten->geslacht == 'vrouw' ? 'selected' : '' }}>Vrouw</option>
        @else
        <option value="man" >Man</option>
        <option value="vrouw">Vrouw</option>
        @endif
    </select>
</div>
<!-- Adres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adres', 'Adres:') !!}
    {!! Form::text('adres', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- District Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    {!! Form::text('district', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> -->

<div class="form-group col-sm-6">
    {!! Form::label('district', 'District:') !!}
    <select class="custom-select" name="district" id="district">
        <option value="option_select" disabled selected>Selecteer district</option>
        @if(isset($klanten))
        <option value="Brokopondo" {{ $klanten->district == 'Brokopondo' ? 'selected' : '' }}>Brokopondo</option>
        <option value="Commewijne" {{ $klanten->district == 'Commewijne' ? 'selected' : '' }}>Commewijne</option>
        <option value="Coronie" {{ $klanten->district == 'Coronie' ? 'selected' : '' }}>Coronie</option>
        <option value="Marowijne" {{ $klanten->district == 'Marowijne' ? 'selected' : '' }}>Marowijne</option>
        <option value="Nickerie" {{ $klanten->district == 'Nickerie' ? 'selected' : '' }}>Nickerie</option>
        <option value="Para" {{ $klanten->district == 'Para' ? 'selected' : '' }}>Para</option>
        <option value="Paramaribo" {{ $klanten->district == 'Paramaribo' ? 'selected' : '' }}>Paramaribo</option>
        <option value="Saramacca" {{ $klanten->district == 'Saramacca' ? 'selected' : '' }}>Saramacca</option>
        <option value="Sipaliwini" {{ $klanten->district == 'Sipaliwini' ? 'selected' : '' }}>Sipaliwini</option>
        <option value="Wanica" {{ $klanten->district == 'Wanica' ? 'selected' : '' }}>Wanica</option>
        @else
        <option value="Brokopondo" >Brokopondo</option>
        <option value="Commewijne">Commewijne</option>
        <option value="Coronie">Coronie</option>
        <option value="Marowijne">Marowijne	</option>
        <option value="Nickerie">Nickerie</option>
        <option value="Para">Para</option>
        <option value="Paramaribo">Paramaribo</option>
        <option value="Saramacca">Saramacca</option>
        <option value="Sipaliwini">Sipaliwini</option>
        <option value="Wanica">Wanica</option>
        @endif
    </select>
</div>


<!-- Telefoonnummer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
    {!! Form::number('telefoonnummer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
