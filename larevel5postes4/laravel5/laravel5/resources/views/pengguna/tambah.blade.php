@extends('master')
@section('container')
<div class="panel panel-primary">
	<div class="panel-heading">
		<strong><a href="{{url('pengguna')}}">
		<i style="color: white;" class="fa text-default fa-chevron-left"></i>
		</a>Tambah data pengguna</strong>
	</div>

		<div style="width: 100%;text-align: right;">
			<button class="btn btn-primary">
				<i class="fa fa-save"></i>Simpan
			</button>
			<button class="btn btn-danger">
				<i class="fa fa-undo"></i>ulangi
			</button>
		</div>
		{!! Form::model(new App\pengguna, ['class' => 'form-horizontal','route' => ['pengguna.tambah']]) !!}
        		@include('pengguna/form/form', ['submit_text' => 'Tambah Data'])
		{!! Form::close() !!}
		</div>
@stop