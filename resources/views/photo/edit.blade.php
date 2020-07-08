@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Photos</h3>
<form method="post" action="{{ url('/photo/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title" value="{{ $row->title }}"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="post_id">
					<option value="{{ $row->post->id }}" >{{ $row->post->title }}</option>
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
			<th>Tanggal</th>
			<td><input type="date" name="date" value="{{ $row->date }}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input id="btn" type="submit" value="UPDATE"></td>
		</tr> 
	</table>
</form>
</div>
@endsection