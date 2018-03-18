@extends('layouts.app')
@section('content')
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<div class="container">

<div class=-"row">
		<center><h1>Data Transaksi</h1></center>
		<div class="panel panel-primary">
		<div class="panel-title pull-right"><a href="{{url('/history')}}" class="btn btn-info">Data History</a></div>
		<div class="panel-title pull-right"><a href="/admin/transaksi/create"> Tambah Data </a></div></div>

		
			{!! Form::open(['url'=>url('tran'),'method'=>'post','class'=>'form-horizontal','id'=>'searchForm']) !!}
		<fieldset>
			{!! Form::text('konsumen_id',null,['class'=>'form-control','id'=>'s']) !!}

			{!! Form::submit('Search',['id'=>'submitButton']) !!}
		</fieldset>
		{!! Form::close() !!}
		<body>
		<div class="panel-body"></div>
		<table class="table table-hover table-bordered">
			
				<thead>
			<tr>
				<th>Nama Konsumen</th>
				<th>Jenis Barang</th>
				<th>Barang</th>
				<th>Merek</th>
				<th>Tanggal </th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Pembayaran</th>
				<th>Total</th>
				<th>Kembalian</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					<?php $no = $tran->firstItem() - 1 ; ?>
	@foreach ($tran as $data)
	<?php $no++ ;?>
					<tr>
						<td>{{$data->konsumen->nama}}</td>
						<td>{{$data->barang->jenis}}</td>
						<td> <img src="{{asset('/img/'.$data->barang->cover.'')}}" height="100px" width="100px"></td>
						<td>{{$data->barang->merek}}</td>
						<td>{{$data->created_at}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->barang->jual}}</td>
						<td>{{$data->bayar}}</td>
						<td>{{$data->total}}</td>
						<td>{{$data->kembali}}</td>
				
						

						<td>
							<a class="btn btn-warning" href="/admin/transaksi/{{$data->id}}/edit">Edit</a>
						
						<form action="{{route('transaksi.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
					</table>
					<?php echo str_replace('/?', '?', $tran->render()); ?>

</div>
			</tbody>

		</body>

		

		
		</div>
</div>


@endsection
