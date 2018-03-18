@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                       {!! Form::open(['url'=>'/register','class'=>'form-horizontal']) !!}

                    <div class="form-group {{ $errors->has('name') ? 'has-errors' : ''}}">
                        {!! Form::label('name', 'Nama', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     <div class="form-group {{ $errors->has('email') ? 'has-errors' : ''}}">
                        {!! Form::label('email', 'Alamat email', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!! Form::email('email', null, ['class'=>'form-control']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     <div class="form-group {{ $errors->has('password') ? 'has-errors' : ''}}">
                        {!! Form::label('password', 'Password', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!! Form::password('password',  ['class'=>'form-control']) !!}
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>

                     <div class="form-group {{ $errors->has('password_confirmation') ? 'has-errors' : ''}}">
                        {!! Form::label('password_confirmation', 'konfirmasi password', ['class'=>'col-md-4 control-label']) !!}
                        <div class="col-md-6">
                        {!! Form::password('password_confirmation',  ['class'=>'form-control']) !!}
                        {!! $errors->first('passwsord_confirmation', '<p class="help-block">:message</p>') !!}
                        </div>
                    </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i> Daftar
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
