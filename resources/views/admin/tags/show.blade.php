@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$tag->name}}</h1>

        @if (count($tag->posts))
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Slug</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tag->posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <a href="{{route('admin.tags.index')}}" class="btn btn-primary mt-5">Back Tags</a>
    </div>
@endsection