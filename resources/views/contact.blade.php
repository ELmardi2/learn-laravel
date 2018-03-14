@extends('layout.app')


@section('content')
<h1>Contact</h1>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
  {{Form::label('name', 'Name')}}
  {{Form::text('name', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('email', 'E-Mail')}}
  {{Form::email('email', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
  {{Form::label('msg', 'Message' )}}
  {{Form::textarea('msg', '', ['class' => 'form-control'])}}
</div>
<div >
  {{form::submit('submit', ['class' =>'btn btn-primary'])}}
</div>
{!! Form::close() !!}
@endsection
