@extends('admin.layout')

@section('content')
<h1>{{$category->name}}</h1>
{{Form::open(array('method' => 'post'))}}
İsim : {{Form::text('name', $category->name)}}<br>
Açıklama : {{Form::text('description', $category->description)}}<br>
{{Form::submit('HEMEN GÜNCELLE!')}}
{{Form::close()}}
@stop