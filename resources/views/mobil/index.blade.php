@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Data Post
			  	<div class="panel-title pull-right"><a href="{{ route('mobil.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Nama Mobil</th>
					  <th>Perseneling</th>
					  <th>Plat No</th>
					  <th>Warna</th>
					  <th>Tahun Keluaran</th>
					  <th>Harga</th>
					  <th>Stock</th>
					  <th>Jenis</th>
					  <th>Merk</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($mobil as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->nama }}</td>
				    	<td><p>{{ $data->perseneling }}</p></td>
				    	<td><p>{{ $data->plat_no }}</p></td>
				    	<td><p>{{ $data->warna }}</p></td>
				    	<td><p>{{ $data->tahun_keluaran }}</p></td>
				    	<td><p>{{ $data->harga }}</p></td>
				    	<td><p>{{ $data->stock }}</p></td>
				    	<td><p>{{ $data->jenis }}</p></td>
				    	<td><p>{{ $data->Merk->nama_merk }}</p></td>
						<td>
							<a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Edit</a>
						</td>
						<td>
							<a href="{{ route('mobil.show',$data->id) }}" class="btn btn-success">Show</a>
						</td>
						<td>
							<form method="post" action="{{ route('mobil.destroy',$data->id) }}">
								<input name="_token" type="hidden" value="{{ csrf_token() }}">
								<input type="hidden" name="_method" value="DELETE">

								<button type="submit" class="btn btn-danger">Delete</button>
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
</div>
@endsection