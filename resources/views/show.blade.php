@extends('layouts.app')

@section('title', $task -> title)

@section('content')

    <p>{{ $task -> description }}</p>

    @if ($task -> long_description)
        <p>{{ $task -> long_description }}</p>
    @endif

    <p>{{ $task -> created_at }}</p>
    <p>{{ $task -> updated_at }}</p>

    <div>
        <form action="{{route('task.destroy', ['task' => $task->id])}}" method="post">
        @csrf 
        @method('DELETE')
        <button type="submit">Click to Delete</button>
        </form>
    </div>
@endsection
