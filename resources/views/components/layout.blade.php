<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Builder layout</title>
</head>
<body>

    <header> <nav><ul class="nav-list">
        <li class="nav-item"><a href="<?= route('builder.index') ?>" class="nav-link">builder</a></li>
        <li class="nav-item"><a href="<?= route('builder.register') ?>" class="nav-link">register</a></li>
    </ul></nav> </header>

    <h1>h1 fom layuout</h1>

    {{ $slot }}
    
</body>
</html>