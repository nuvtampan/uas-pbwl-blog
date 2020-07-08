@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/post') }}">
	@csrf
	<h3>Daftar Photos<a id="tbh" href="{{ url('photo/create') }}">+</a></h3>
	<table method="post">
		<tr>
			<th>ID</th>
			<th>POST</th>
			<th>JUDUL</th>
			<th>IMAGES</th>
			<th>KETERANGAN</th>
			<th>TANGGAL</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr><center>
			<td>{{ $row->id }}</td>
			<td>{{ $row->post->title }}</td>
			<td>{{ $row->title }}</td>
			<td><img src="img\{{ $row->file }}"></td>
			<td>{{ $row->text }}</td>
			<td>{{ $row->date }}</td>
			<td><a class="btn btn-secondary"  href="{{ url('photo/'.$row->id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/photo/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button class="btn btn-danger">Hapus</button>
			</form></td></center>
		</tr>
		@endforeach 
	</table>
</div>
@endsection