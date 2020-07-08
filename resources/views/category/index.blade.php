@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{ url('/category') }}">
	@csrf
	<h3>Daftar Category<a id="tbh" href="{{ url('category/create') }}">+</a></h3>
	<table>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>EDIT</th>
			<th>HAPUS</th>
		</tr>
		@foreach($rows as $row)
		<tr>
			<td>{{ $row->id }}</td>
			<td>{{ $row->name }}</td>
			<td>{{ $row->text }}</td>
			<td><a id="btn"  href="{{ url('category/'.$row->id.'/edit') }}">Edit</a></td>
			<td><form action="{{ url('/category/'.$row->id) }}" method="post">
				<input  type="hidden" name="_method" value="DELETE">
				@csrf
				<button id="btn">Hapus</button>
			</form></td>
		</tr>
		@endforeach 
	</table>
</div>
@endsection