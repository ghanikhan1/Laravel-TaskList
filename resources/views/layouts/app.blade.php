<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Task List App</title>
    @yield('styles')
</head>
<body>
    <h1>@yield('title')</h1>
    <div>
        @if(session()->has('success'))
        <div>{{session('success')}}</div>
    @endif
    @yield('content')
    </div>
</body>
</html>
