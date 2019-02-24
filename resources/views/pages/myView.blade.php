@extends('layouts.app')
@section('content')
    <h1>به صفحه ویو خوش آمدید</h1>
    <h3>آی دی  : {{$id}}</h3>
    <h3>نام  : {{$name}}</h3>
    <h3>پسورد  : {{$password}}</h3>
@endsection

@section('footer')
    <p>در این قسمت بعدا فوتر قرار میگیرد</p>
@endsection