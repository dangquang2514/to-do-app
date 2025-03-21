@extends('layout.app')
@section('title', $task->title)
@section('content')
    <p>{{ $task->description }}</p>
    <p>{{ $task->long_description }}</p>
    <p>{{ $task->completed ? 'Da hoan thang' : 'Chua hoan thanh' }}</p>
    <a href="/">Quay lai</a>
@endsection
