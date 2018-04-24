@extends('layouts.admin');




@section('content')


    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Author</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>

            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>

        @if($posts)


            @foreach($posts as $post)

                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="150" src="{{$post->photo ? $post->photo->file : 'http://via.placeholder.com/140x100'}}"></td>
                    <td>{{$post->user->name}}</td>
                    <td>{{$post->category ? $post->category->name : 'Different Category'}}</td>
                    {{--<td><img height="50" src="{{$user->photo ? $user->photo->file : 'http://via.placeholder.com/140x100'}}"></td>--}}
                    {{--<td><a href='{{route('users.edit', $user->id)}}'> {{$user->name}}</a></td>--}}
                    <td>{{$post->title}}</td>
                    <td style="max-width: 300px">{{$post->body}}</td>

                    {{--<td>{{$post->user->name}}</td>--}}



                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>

            @endforeach

        @endif
        </tbody>
    </table>


@stop