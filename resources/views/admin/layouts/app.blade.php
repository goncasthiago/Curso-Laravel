<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Goncas Page</title>
    @stack('styles')
</head>
<body>

    @yield('content')
    @stack('scripts')
    
</body>
</html>