@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Merk 
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobil->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Perseneling</label>
						<input type="text" name="perseneling" class="form-control" value="{{ $mobil->perseneling }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Plat No</label>
						<input type="text" name="plat_no" class="form-control" value="{{ $mobil->plat_no }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">warna</label>
						<input type="text" name="warna" class="form-control" value="{{ $mobil->warna }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Tahun Keluaran</label>
						<input type="text" name="tahun_keluaran" class="form-control" value="{{ $mobil->tahun_keluaran }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">harga</label>
						<input type="text" name="harga" class="form-control" value="{{ $mobil->harga }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">stock</label>
						<input type="text" name="stock" class="form-control" value="{{ $mobil->stock }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">jenis</label>
						<input type="text" name="jenis" class="form-control" value="{{ $mobil->jenis }}"  readonly>
			  		</div>
			  		<div class="form-group">
			  			<label class="control-label">Merk</label>
						<input type="text" name="merk_id" class="form-control" value="{{ $mobil->Merk->nama_merk }}"  readonly>
			  		</div>
			  		

			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection