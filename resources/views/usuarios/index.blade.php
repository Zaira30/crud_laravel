@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class=" col-md-3 pull-right" style="margin-bottom: 10px;">
                <a href="{{route('usuarios.create')}}" class="btn btn-primary"> Adicionar</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Usuários</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Data Nascimento</th>
                                        <th>CPF</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach( $usuarios as $usuario)
                                    <?php
                                          $dt = explode('-', $usuario->date_birth);
                                          $usuario->date_birth = $dt[2]."/".$dt[1]."/".$dt[0];
                                        ?>
                                        <tr>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->date_birth}} </td>
                                            <td>{{$usuario->cpf}}</td>
                                            <td><a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a></td>
                                            <td>{!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn']) !!}
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


