<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>To do app</h1>
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
    @isset($name)
        <h1>Hello, I'm {{ $name }}</h1>
    @endisset
</body>

</html>
