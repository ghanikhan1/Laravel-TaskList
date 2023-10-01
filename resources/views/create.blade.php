@extends('layouts.app')

@section('title', 'Add Tasks')

@section('styles')

    <style>
        .error-message{
            color: red;
        }
    </style>

@endsection

@section('content')

    <form method="post" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" type="text" name="title" value="{{ old('title')}}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="5" >{{ old('description')}}</textarea>
            @error('title')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Description</label>
            <textarea id="long_description" name="long_description" rows="10" >{{ old('long_description')}}</textarea>
            @error('title')
            <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Click</button>
    </form>

@endsection
