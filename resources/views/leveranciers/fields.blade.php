<!-- Bedrijfsnaam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedrijfsnaam', 'Bedrijfsnaam:') !!}
    {!! Form::text('bedrijfsnaam', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
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
        @if(isset($leveranciers))
        <option value="Brokopondo" {{ $leveranciers->district == 'Brokopondo' ? 'selected' : '' }}>Brokopondo</option>
        <option value="Commewijne" {{ $leveranciers->district == 'Commewijne' ? 'selected' : '' }}>Commewijne</option>
        <option value="Coronie" {{ $leveranciers->district == 'Coronie' ? 'selected' : '' }}>Coronie</option>
        <option value="Marowijne" {{ $leveranciers->district == 'Marowijne' ? 'selected' : '' }}>Marowijne</option>
        <option value="Nickerie" {{ $leveranciers->district == 'Nickerie' ? 'selected' : '' }}>Nickerie</option>
        <option value="Para" {{ $leveranciers->district == 'Para' ? 'selected' : '' }}>Para</option>
        <option value="Paramaribo" {{ $leveranciers->district == 'Paramaribo' ? 'selected' : '' }}>Paramaribo</option>
        <option value="Saramacca" {{ $leveranciers->district == 'Saramacca' ? 'selected' : '' }}>Saramacca</option>
        <option value="Sipaliwini" {{ $leveranciers->district == 'Sipaliwini' ? 'selected' : '' }}>Sipaliwini</option>
        <option value="Wanica" {{ $leveranciers->district == 'Wanica' ? 'selected' : '' }}>Wanica</option>
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

<!-- Directeur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('directeur', 'Directeur:') !!}
    {!! Form::text('directeur', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Telefoonnummer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefoonnummer', 'Telefoonnummer:') !!}
    {!! Form::number('telefoonnummer', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>


