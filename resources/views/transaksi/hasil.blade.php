@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<div class=-"row">
		<div class="panel panel-primary">
		<div class ="panel-heading">Data transaksi
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
		<form id="searchForm">
			<center>
				<h2>Pencarian Atas Nama Id {{$query}}</h2>
			</center>

		</form>
		
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
				<th>Nama Konsumen</th>
				<th>Merek Barang</th>
				<th>Barang</th>
				<th>tanggal</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Total</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tran as $data)
					<tr>
					<td>{{$data->konsumen->nama}}</td>
						<td>{{$data->barang->merek}} </td>
						<td>
							<img src="{{asset('/img/'.$data->barang->cover.'')}}" height="100px" width="100px"></td>
						<td>{{$data->created_at}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->harga}}</td>
						<td>{{$data->total}}</td>
						<td>
							<a class="btn btn-warning" href="/admin/transaksi/{{$data->id}}/edit">Edit</a>
						</td>

					
						<td>
						<form action="{{route('transaksi.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		
			</table>
		</div>

		</div>
	</div>
</div>
</div>
@endsection