@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<i class="fa fa-edit"></i> Editar Analisis
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{route('tipoAnalisis.update',$tipoAnalisis->id)}}">
                        <input name="_method" type="hidden" value="PATCH">
						{{ csrf_field() }}

						<div class="form-group{{ ($errors->has('nombre')) ? $errors->first('nombre') : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
    							<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ingresa el nombre aqui" value="{{$tipoAnalisis->nombre}}" autofocus>
    							{!! $errors->first('nombre','<p class="help-block">:message</p>') !!}
                            </div>
						</div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="col-md-6" align="left">
                                    <button type="submit" class="btn btn-block btn-warning">
                                        Editar
                                    </button>

                                </div>
                                <div class="col-md-6" align="right">
                                    <a class="btn btn-default btn-block" href="{{url()->previous()}}">
                                        Cancelar
                                    </a>
                                </div>
                            </div>
                        </div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection