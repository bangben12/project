@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
	<center><h1>Transaksi</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading"> Transaksi
		<div class="panel-title pull-right"><a href="{{URL::previous()}}">kembali</a>
		</div>
		</div>
		<div class="panel-body">
		@include('layouts._flash')
		@if ($errors->any())
			<div class="flash alert-danger">
				@foreach($erros->all() as $err)
				<li><span>{{$err}}</span></li>
				@endforeach
			</div>
			@endif

			<form action="{{route('transaksi.store')}}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
			<label class="control-label">Konsumen</label>
				<select name="a" class="form-control">
				<option value="0" selected="true" disabled="true">konsumen </option>
					@foreach($konsu as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
			<label class="control-label">Barang</label>
				<select name="b" class="form-control">
				<option value="0" selected="true" disabled="true">barang </option>
					@foreach($barang as $data)
					<option value="{{$data->id}}">{{$data->nama}} </option>
					@endforeach
				</select>
			</div>


			<div class="form-group">
				<label class="control-label">Jumlah </label>
				<input type="number" name="e" class="form-control" required="">
			</div>

				<div class="form-group">
				<label class="control-label">Pembayaran </label>
				<input type="number" name="g" class="form-control" required="">
			</div>

				
			<!-- <div class="form-group">
				<label class="control-label">cover</label>
				<input type="file" name="cover"  required="">
 			</div>
 -->
			<div class="form-group">
				<button type="submit" class="btn btn-success">simpan</button>
				<button type="reset" class="btn btn-danger">reset</button>
			</div>
			</form>
		</div>
		</div>
		</div>
		@endsection
		<!-- <script>
			function addrow(){
				var no = $('#item_table tr').length;
				var html = '';
				html +='<tr id="row_'+no+'">';
				html +='<td><select name="barang_id[]" class="form-control">@foreach($barang as $data)<option value="{{$data->id}}">{{$data->merek}}</option@endforeach</select></td>';
				html +='<td><input type="text" name="jumlah[]" class="form-control jumlah"/></td>';
				html +='<td><select name="konsumen_id []" class="form-control"> @foreach($konsumen as $data)<option value="{{$data->id}}">{{$data->nama}}</option></select></td>';
				html +='<td><button type="button" class="btn btn-danger btn-sm" onclick="remove('+no+')">Hapus</button></td></tr>';
				$('#last').after(html);
			}
			function remove(no){
				$('row_'+no).remove();
			}
		</script> -->