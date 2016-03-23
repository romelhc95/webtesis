@extends('layouts.template1')
    @section('content')
    <br>
         <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 style="text-align:center;">Listado de Tesistas</h3>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <div class="dataTable_wrapper">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Codigo Estudiante</th>
                                        <th>E-mail</th>
                                    </tr>
                                </thead>
                                @foreach($students as $student)
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->last_name}}</td>
                                        <td>{{$student->name}}</td>
                                        <td class="center">{{$student->code}}</td>
                                        <td class="center">{{$student->email}}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        
        <!-- jQuery -->
        <script type="text/javascript" src="{{ URL::secure('bower_components/jquery/dist/jquery.min.js') }}"></script>
        
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                    responsive: true
            });
        });
        </script>
    
    @endsection