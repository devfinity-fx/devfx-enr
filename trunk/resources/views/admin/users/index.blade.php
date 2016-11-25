@extends('app')
@section('content')
    users index
    {{ Html::link('/admin/users/create','new user') }}
@endsection