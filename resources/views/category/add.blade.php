@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Category</h3>
<form method="post" action="{{ url('/category') }}">
	@csrf
	<table>
		<tr>
			<th>Nama Category</th>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection