<!DOCTYPE html>
<html class="h-full" lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title>Plataforma</title>
    @vite(['resources/js/app.js', 'resources/css/app.css','resources/css/resources.scss'])
    @routes
    @inertiaHead
</head>

<body>
    @inertia
</body>

</html>