@extends('layout.app')
@section('style'){
    .alert.danger {
    color: red;
    }
    }
@section('title', 'Create task')
@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input for="text" name="title" id="title" value="{{ old('title') }}">
        @error('title')
            <div class='alert alert-danger'>{{ '$message' }}</div>
        @enderror

        <label for="description">Description</label>
        <input type="text" name="description" id="description"
            value="{{ old('description') }}>
        @error('description')
<div class='alert alert-danger'>{{ '$message' }}</div>
@enderror

        <label for="long_description">Long
        description</label>
        <input type="text" name="long_description" id="long_description" value="{{ old('long_description') }}">
        @error('long_description')
            <div class='alert alert-danger'>{{ '$message' }}</div>
        @enderror
        <button type="submit">Create</button>
    </form>
@endsection
