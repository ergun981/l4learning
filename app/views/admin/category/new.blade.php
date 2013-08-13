@extends('admin.layout')

@section('content')
{{Form::open(array('url' => 'admin/categories', 'method' => 'post'))}}
İsim : {{Form::text('name')}}<br>
Açıklama : {{Form::text('description')}}<br>
{{Form::submit('HEMEN EKLE!')}}
{{Form::close()}}
@stop