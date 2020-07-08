@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Post</h3>
<form method="post" action="{{ url('/post') }}">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="cat_id">
					@foreach($lst as $row)
					<option value="{{ $row->id }}">{{ $row->name }}</option>
					@endforeach 
				</select>
			</td>
		<tr>
			<th>Slug</th>
			<td><input type="text" name="slug"></td>
		</tr>
		<tr>
			<th>Keterangan</th>
			<td><input type="text" name="text"></td>
		</tr>
		<tr>
			<th>Date</th>
			<td><input type="date" name="date"></td>
		</tr>
		<tr>
			<th></th>
			<td><input id="btn" type="submit" value="SIMPAN"></td>
		</tr> 
	</table>
</form>
</div>
@endsection