@extends('home')

@section('title')
    ToDo List
@endsection

@section('main_content')
    <h1>ToDo List</h1>

    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    @foreach($todo as $el)
        <div class="d-flex justify-content-center py-3">
        <div style="width: 350px; height: min-content; background-color: #f5f5f5; border-radius: 10px; margin-bottom: 20px; padding: 15px">
            <p><strong>ID:</strong> {{ $el->id }}</p>
            <p><strong>Title:</strong> {{ $el->title }}</p>
            <p><strong>Description:</strong> {{ $el->description }}</p>
            <p><strong>Created_at:</strong> {{ $el->created_at }}</p>
            <p><strong>Updated_at:</strong> {{ $el->updated_at }}</p>
        </div>
        </div>
    @endforeach
    <h2>Добавить задачу</h2>
    <form method="post" action="/todo/create">
        @csrf
        <input type="text" name="title" id="title" placeholder="Введите название задачи" class="form-control me-2">
        <input style="margin: 20px auto;" type="text" name="description" id="description" placeholder="Введите описание задачи" class="form-control">
        <button type="submit" class="btn btn-lg btn-primary">Добавить задачу</button>
    </form>

@endsection
