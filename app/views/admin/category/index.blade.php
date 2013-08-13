@extends('admin.layout')

@section('content')

<a href="{{URL::to('admin/categories/new')}}">Yeni Kategori</a>
@if(count($categories)>0)
<table>
<thead>
	<tr>
		<th>id</th>
		<th>İsim</th>
		<th>Açıklama</th>
		<th></th>
	</tr>
</thead>
<tbody>
	@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td>{{$category->description}}</td>
			<td><a href="{{URL::to('admin/categories/'.$category->id)}}">Detay</a></td>
		</tr>
	@endforeach
</tbody>
</table>
@else
Hiç kategori yok.
@endif

@stop