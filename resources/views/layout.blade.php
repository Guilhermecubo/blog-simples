<!DOCTYPE html>
<html>
<head>
    <title> Meu Blog</title>
</head>
<body>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @yield('content')
</body>
</html>
