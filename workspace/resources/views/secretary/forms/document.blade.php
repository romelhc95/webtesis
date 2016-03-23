<div class="form-group">
{{Form::label('Titulo: ')}}
{{Form::text('title',null,['class'=>'form-control','placeholder'=>'Ingrese Titulo de Tesis', 'autofocus'])}}
</div>
<div class="form-group">
{{Form::label('Fecha de Registro: ')}}
{{Form::date('datereg',null,['class'=>'form-control','placeholder'=>'Ingrese Fecha'])}}
</div>
<div class="form-group">
{{Form::label('Codigo Estudiante: ')}}
{{Form::text('codest',null,['class'=>'form-control','placeholder'=>'Ingrese Codigo de Estudiante'])}}
</div>
<div class="form-group">
{{Form::label('Nombres: ')}}
{{Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese Nombres'])}}
</div>
<div class="form-group">
{{Form::label('Apellidos: ')}}
{{Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Ingrese Apellidos'])}}
</div>
<div class="form-group">
{{Form::label('Jefe area: ')}}
{{Form::select('chief',$areachief,null,['placeholder'=>'Seleccione Jefe de Area','class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Esquema: ')}}
{{Form::select('scheme',$scheme,null,['placeholder'=>'Seleccione Esquema','class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Facultad: ')}}
{{Form::select('faculty',$faculty,null,['id'=>'faculty','placeholder'=>'Seleccione Facultad','class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Carrera: ')}}
{{Form::select('career',['placeholder'=>'Seleccione Carrera'],null,['id'=>'career', 'class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Area: ')}}
{{Form::select('area',['placeholder'=>'Seleccione Area'],null,['id'=>'area','class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Linea de Investigación: ')}}
{{Form::select('line',['placeholder'=>'Seleccione Linea de Investigación'],null,['id'=>'line','class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('Agrege Archivo: ')}}
{{Form::file('file',['class'=>'file'])}}
</div>
<div class="form-group">
{{Form::label('Estado: ')}}
{{Form::select('state',$state,null,['placeholder'=>'Seleccione Estado','class'=>'form-control'])}}
</div>