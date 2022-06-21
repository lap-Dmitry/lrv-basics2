@extends('home')

@section('title')
    Search ToDo
@endsection

@section('main_content')
    @if($todo_search)
        <h2>{{$todo_search->title}}</h2>
        <p>{{ $todo_search->description }}</p>
    @else
    <p>Такой задачи нет</p>
    @endif

@endsection
