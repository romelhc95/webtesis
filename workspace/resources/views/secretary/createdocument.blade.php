@extends('layouts.template1')
@section('content')
   <h2 style="text-align:center;">Registro de Documento de Tesis</h2>
    {{Form::open(['route'=>'document.store','method'=>'POST'])}}
        @include('secretary.forms.document')
        {{Form::submit('Registrar', ['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection