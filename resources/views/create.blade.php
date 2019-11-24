



@extends('front.about')

@section('content')

    <h1>
        Create Posts
    </h1>

    @if(session('success'))
     <div>
         {{session('success')}}
     </div>

    @endif


    @if($errors->any())
      <div>
          <ul>
              @foreach($errors->all() as $error)
              <li>{{$error}}</li>
              @endforeach
          </ul>

      </div>


    @endif

    <form action="{{route('posts.store')}}" method="post">
{{--        {!!Form::open(['route' => 'posts.store' , 'method' => 'POST']) !!}--}}
        {{csrf_field()}}
        Title:<br>
        <input type="text" name="title">
{{--        {!!Form::text('title',null,['placeholder' => 'Enter title', 'class' => 'form-control'])  !!}--}}
        <br>
        Body:<br>
        <input type="text" name="body">
        <br><br>
        <input type="submit" value="Save">
{{--        {!!Form::close()  !!}--}}
    </form>


@endsection
