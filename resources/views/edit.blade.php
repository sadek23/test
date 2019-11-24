



@extends('front.about')

@section('content')

    <h1>
        Edit Posts
    </h1>

    <form action="{{route('posts.update',$post->post_id)}}" method="post">
        {{csrf_field()}}
{{--        <input name="_method" type="hidden" value="PUT"/>--}}
        {{method_field('PUT')}}

        Title:<br>
        <input type="text" name="title" value="{{$post->title}}">
        <br>
        Body:<br>
        <input type="text" name="body" value="{{$post->body}}">
        <br><br>
        <input type="submit" value="Update">
    </form>


@endsection
