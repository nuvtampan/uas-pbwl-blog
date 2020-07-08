@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Album</h3>
<form method="post" action="{{ url('/album/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="name" value="{{ $row->name }}"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="photos_id">
					<option value="{{ $row->photo->id }}" >{{ $row->photo->title }}</option>
					@foreach($lst as $rows)
					<option value="{{ $rows->id }}" >{{ $rows->title }}</option>
					@endforeach 
				</select>
			</td>
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