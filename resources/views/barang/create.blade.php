@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<center><h1>Barang</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Barang
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		
			<form action="{{route('barang.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label class="control-label">Nama </label>
				<input type="text" name="a" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jenis </label>
				<input type="text" name="b" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Merek </label>
				<input type="text" name="c" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Warna </label>
				<input type="text" name="d" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jumlah </label>
				<input type="number" name="e" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jual </label>
				<input type="number" name="f" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">beli </label>
				<input type="number" name="g" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover"  required="">
			</div>

			
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection