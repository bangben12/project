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
		<div class="panel body">
		<form action="{{route('barang.update',$barang->id)}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			</div>
			<div class="form-group">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$barang->nama}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jenis</label>
				<input type="text" name="b" value="{{$barang->jenis}}" class="form-control" required="">
			</div>
		
			<div class="form-group">
				<label class="control-label">Merek</label>
				<input type="text" name="c" value="{{$barang->merek}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Warna</label>
				<input type="text" name="d" value="{{$barang->warna}}" class="form-control" required="">
			</div>
			
			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="number" name="e" value="{{$barang->jumlah}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Jual</label>
				<input type="number" name="f" value="{{$barang->jual}}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Beli</label>
				<input type="number" name="g" value="{{$barang->beli}}" class="form-control" required="">
			</div>

					<div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover" class="form-control" value="{{$barang->cover}}" required=""></input>
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