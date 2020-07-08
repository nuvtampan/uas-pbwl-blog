@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Photos</h3>
<form method="post" enctype="multipart/form-data" action="{{ url('/photo') }}">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="post_id">
					@foreach($lst as $row)
					<option value="{{ $row->id }}">{{ $row->title }}</option>
					@endforeach 
				</select>
			</td>
		<tr>
			<th>Foto</th>
			<td><input type="file" name="file"></td>
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