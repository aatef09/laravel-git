@extends('layouts.app');

@section('content')
<h3>ویرایش فرم</h3>

    @can('update',$post)
        {!! Form::model($post,['method'=>'PATCH', 'action'=>['postsController@update', $post->id]]) !!}

        <div class="form-group">
            {!! Form::label('title','عنوان:') !!}
            {!! Form::text('title',$post->title,['class' =>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','توضیحات:') !!}
            {!! Form::textarea('description',$post->content,['class' =>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('بروزرسانی',['class' =>'btn btn-warning']) !!}
        </div>

        {!! Form::close() !!}


        {!! Form::model($post,['method'=>'DELETE','action'=>['postsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف',['class' =>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}

    @endcan


{{--<form method="post" action="/posts/{{$post->id}}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->title}}">
    <br/>
    <textarea type="text" name="description" placeholder="توضیح مطلب">{{$post->content}}</textarea>
    <br/>
    <button type="submit" name="submit">بروزرسانی</button>
</form>--}}

{{--<form method="post" action="/posts/{{$post->id}}">
@csrf
<input type="hidden" name="_method" value="DELETE">

<button type="submit" name="submit">حذف</button>
</form>--}}

@endsection