@extends('layout.app')


@section('content')
<h1>Contact</h1>
{!! Form::open(['https://mail.google.com/mail/u/1' => 'contact/send']) !!}
<div class="form-group">
  {{Form::label('name', 'Name', ['class' => 'form-control'])}}
  {{Form::text('name', 'enter your name', ['class' => 'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('email', 'E-Mail')}}
  {{Form::text('example@mail.com', 'enter your E-mail', ['class' => 'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('email', 'Message', ['class' => 'form-control'])}}
  {{Form::textarea('text', 'your msg here!', ['class' => 'form-control'])}}
</div>
{!! Form::close() !!}
@endsection
