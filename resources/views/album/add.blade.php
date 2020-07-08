@extends('layouts.app')
@section('content')
<div class="container">
<h3>Tambah Data Album</h3>
<form method="post" action="{{ url('/album') }}">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="name"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="photos_id">
					@foreach($lst as $row)
					<option value="{{ $row->id }}">{{ $row->title }}</option>
					@endforeach 
				</select>
			</td>
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