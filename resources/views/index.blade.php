@extends('layout.app')
@section('title', 'To do app')
@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('tasks.detail', ['id' => $task->id]) }}">Details</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="5">No tasks found</td>
            </tr>
        @endif
    </table>
@endsection
