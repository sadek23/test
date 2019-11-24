@extends('front.about')

@section('content')

    <h1>
        All Posts
    </h1>

 <a href="{{route('posts.create')}}">create new post</a>
    @if(isset($posts))
        <table>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Body</td>
            </tr>


            @foreach($posts as $post)
                <tr>
                    <td>{{$post->post_id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="{{route('posts.edit',$post->post_id)}}">Edit</a> </td>
                    <td><a href="{{route('posts.destroy',$post->post_id)}}">Delete</a> </td>

                </tr>
            @endforeach
        </table>
    @endif




@endsection
