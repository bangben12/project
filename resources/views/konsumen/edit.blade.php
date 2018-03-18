@extends('layouts.app')
@section('content')
<div class="container">
<div class=-"row">
		<center><h1>Data Konsumen</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Konsumen
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('konsumen.update',$konsu->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			</div>
			<div class="form-group">
				<label class="control-label">Nama </label>
				<input type="text" name="a" value="{{$konsu->nama }}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Email</label>
				<input type="text" name="c" value="{{$konsu->email }}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">No Telpon</label>
				<input type="text" name="d" value="{{$konsu->no_hp }}" class="form-control" required="">
			</div>
			<div class="form-group">
				<label class="control-label">Alamat</label>
				<input type="text" name="e" value="{{$konsu->alamat }}" class="form-control" required="">
			</div>
			
			
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection