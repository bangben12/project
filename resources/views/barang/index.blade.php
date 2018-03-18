@extends('layouts.app')
@section('content')
<!DOCTYPE html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Membuat Pagination di Laravel 5</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
<div class="container">

<div class=-"row">
		<center><h1>Data barang</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data barang
		<div class="panel-title pull-right"><a href="/admin/barang/create"> Tambah Data </a></div></div>

		
		{!! Form::open(['url'=>url('barang'),'method'=>'post','class'=>'form-horizontal','id'=>'searchForm']) !!}
		<fieldset>
			{!! Form::text('nama',null,['class'=>'form-control','id'=>'s']) !!}

			{!! Form::submit('Search',['id'=>'submitButton']) !!}
		</fieldset>
		{!! Form::close() !!}
		<body>
		<div class="panel-body"></div>
		<table class="table table-hover table-bordered">
			
				<thead>
			<tr>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Merek</th>
				<th>Warna</th>
				<th>Stok Jumlah</th>
				<th>Harga Jual</th>
				<th>Harga Beli</th>
				<th>Gambar</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					<?php $no = $barang->firstItem() - 1 ; ?>
	@foreach ($barang as $data)
	<?php $no++ ;?>
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->jenis}}</td>
						<td>{{$data->merek}}</td>
						<td>{{$data->warna}}</td>
						<td>{{$data->jumlah}}</td>
						<td>{{$data->jual}}</td>
						<td>{{$data->beli}}</td>
						<td>
							<img src="{{asset('/img/'.$data->cover.'')}}" height="100px" width="100px">									
						</td>
						

						<td>
							<a class="btn btn-warning" href="/admin/barang/{{$data->id}}/edit">Edit</a>
						
			
					
						
						
						
						<form action="{{route('barang.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
					</table>
					<?php echo str_replace('/?', '?', $barang->render()); ?>

</div>
			</tbody>

		</body>

		

		
		</div>
</div>


@endsection
