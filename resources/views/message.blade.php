@extends('layouts.app')

@section('content')
    <h1>{{__('message.welcome',['name'=>'مسعود'])}}</h1>
    <h1>{{trans_choice('message.cars',22,['value'=>22])}}</h1>
@endsection