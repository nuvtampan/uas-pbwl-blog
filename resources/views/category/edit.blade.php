@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Category</h3>
<form method="post" action="{{ url('/category/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>Nama Category</th>
			<td><input type="text" name="name" value="{{ $row->name }}"></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text" value="{{ $row->text }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection