<div class="form-group">
    <label for="name">Name:</label>
    {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => 'autofocus', 'placeholder' => 'Enter your full name']) !!}
</div>
<div class="form-group">
    <label for="email">Email:</label>
    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Your E-Mail address']) !!}
</div>
<div class="form-group">
    <label for="password">Password:</label>
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'password']) !!}
</div>
<div class="form-group">
    <label for="password_confirmation">Confirm Password:</label>
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Retype the password']) !!}
</div>

{!! Form::button('<i class="fas fa-save"></i> Submit', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
{!! Form::button('<i class="fas fa-redo-alt"></i> Reset', ['type' => 'reset', 'class' => 'btn btn-secondary']) !!}
<a href="{{ route('admin.users.index') }}" class="btn btn-secondary" role="button"><i class="fas fa-times"></i>
    Cancel</a>
