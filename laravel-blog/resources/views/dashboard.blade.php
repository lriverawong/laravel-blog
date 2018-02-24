@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{--  You are logged in!  --}}
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3 class="py-4">Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>    
                                    <td>{{$post->title}}</td>
                                    <td class="text-center"><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td class="text-center">
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => '']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach                      
                        </table>
                    @else
                        <p>You have no posts ...</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
