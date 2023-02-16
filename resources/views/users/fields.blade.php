<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Naam:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Role Field -->


<!-- Email Verified At Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    {!! Form::text('email_verified_at', null, ['class' => 'form-control','id'=>'email_verified_at']) !!}
</div> -->

<!-- @push('page_scripts')
  <script type="text/javascript">
        $('#email_verified_at').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush -->

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Wachtwoord:') !!}
    {!! Form::password('password', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('password-retype', 'Herhaal het wachtwoord:') !!}
    {!! Form::password('password-retype', ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- <div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div> -->
<!-- Remember Token Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div> -->


<div class="form-group col-sm-6">
    {!! Form::label('role', 'Role:') !!}
    <select class="custom-select" name="role" id="role">
        <option value="option_select" disabled selected>Select role</option>
        @if(isset($users))
        <option value="user" {{ $users->role == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ $users->role == 'admin' ? 'selected' : '' }}>Admin</option>
        @else
        <option value="user" >User</option>
        <option value="admin">Admin</option>
        @endif
    </select>
</div>
