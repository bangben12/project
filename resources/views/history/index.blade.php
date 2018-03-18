@extends('layouts.app')
@section('content')
<div class="container-fluid">
	<div class="row">
	<div class="col-md-3">
		<!--nav-->
			<!--end nav-->
	</div>
	<div class="col-md-9">
	<div class="jumbotron">
		<div class="panel panel-primary">
			<div class="panel-heading">Data IN - OUT
			<div class="panel-title pull-right"><a href="{{url('/history/print')}}">print</a></div></div>
			<div class="panel-body">
				<table class="table">
					<thead>
						<tr>
							<th>Nama Barang</th>
							<th>Merek Barang</th>
							<th>Nama Barang</th>
							<th>Jumlah</th>
							<th>Nama Pembeli</th>
							<th>Keterangan</th>
							<th>Tanggal</th>
							<th>Harga</th>
							<th>Total</th>
							<th>Tanggal</th>
						</tr>
					</thead>
					<tbody>
						@foreach($history as $data)
						<tr>
						@php
						$barang= App\Barang::find($data->id_barangs);
						$transaksi= App\transaksi::find($data->transaksi_id);
						$konsumen = App\User::find($data->konsumen_id)
						@endphp
							<td>{{$barang->id}}</td>
							<td>{{$barang->jenis}}</td>
							<td>{{$barang->nama}}</td>
							<td>{{$data->jumlah}}</td>
							<td>{{$konsumen->nama}}</td>
							<td>{{$data->aksi}}</td>
							<td>{{$data->tanggal}}</td>
							<td>{{$transaksi->jual}}</td>
							<td>{{$transaksi->total}}</td>
							<td>{{$transaksi->kembali}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection