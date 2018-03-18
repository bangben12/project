<table class="table" border="1">
					<thead>
						<tr>
							<th>Kode Barang</th>
							<th>Merek Barang</th>
							<th>Nama Barang</th>
							<th>Jumlah</th>
							<th>Nama Pembeli</th>
							<th>Keterangan</th>
							<th>Tanggal</th>
							<th>Harga</th>
							<th>Total</th>
							<th>Kembalian</th>
						</tr>
					</thead>
					<tbody>
						@foreach($history as $data)
						<tr>
						@php
						$barang= App\barang::find($data->barang_id);
						$transaksi= App\transaksi::find($data->transaksi_id);
						$konsumen = App\konsumen::find($data->konsumen_id)
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