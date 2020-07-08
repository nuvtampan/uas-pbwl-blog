@extends('layouts.app')
@section('content')
<div class="container">
<h3>Edit Data Post</h3>
<form method="post" action="{{ url('/post/'.$row->id) }}">
	<input type="hidden" name="_method" value="PATCH">
	@csrf
	<table>
		<tr>
			<th>Judul</th>
			<td><input type="text" name="title" value="{{ $row->title }}"></td>
		</tr>
		<th>Category</th>
			<td>
				<select name="cat_id">
					<option value="{{ $row->category->id }}" >{{ $row->category->name }}</option>
					@foreach($lst as $rows)
					<option value="{{ $rows->id }}" >{{ $rows->name }}</option>
					@endforeach 
				</select>
			</td>
		<tr>
			<th>Slug</th>
			<td><input type="text" name="slug" value="{{ $row->slug }}"></td>
		</tr>
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