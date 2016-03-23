@extends('layouts.template1')
@section('content')
   <h2 style="text-align:center;">Registro de Tesista</h2>
    {{Form::open(['route'=>'student.store','method'=>'POST'])}}
        @include('secretary.forms.thesisstudent')
        {{Form::submit('Registrar', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection