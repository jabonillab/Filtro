@extends('unal')

@section('content')

<form method="post" action="{{ env('APP_URL') }}welcome" class="form-horizontal" style="margin:20px 0"
{!! csrf_field() !!}
<div class="panel-body">
            <div class="form-group">
                <label for="apellido" class="col-sm-2 control-label">Apellidos completos</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="" required/>
                </div>
            </div>


            <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <button type="submit" class="btn btn-success form-control">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Buscar Cedula
                                </button>
                            </div>
                        </div>

</div>

</form>

@stop