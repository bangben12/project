@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
		<center><h1>Data Transaksi</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data Transaksi
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('transaksi.update',$tran->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
			</div>
			<div class="form-group">
			<label class="control-label">Konsumen</label>
				<select name="a" class="form-control" required="">
				<option value="0" selected="true" disabled="true">konsumen </option>
					@foreach($konsu as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
			<label class="control-label">Barang</label>
				<select name="b" class="form-control" required="">
				<option value="0" selected="true" disabled="true">barang </option>
					@foreach($barang as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label class="control-label">Jumlah</label>
				<input type="text" name="e" value="{{$tran->jumlah }}" class="form-control" required="">
			</div>

			<div class="form-group">
				<label class="control-label">Pembayaran</label>
				<input type="text" name="g" value="{{$tran->bayar }}" class="form-control" required="">
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