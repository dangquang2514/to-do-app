<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>
    @yield('style')

    .alert.success {
        color: green;
    }
</style>

<body>
    <h1>@yield('title')</h1>

    @if (session()->has('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif
    @yield('content')

</body>

</html>
