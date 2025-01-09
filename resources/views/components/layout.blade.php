<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite(['resources/js/app.js'])  
</head>
<body>
    <div>
        <Nav>
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/image/logo.svg') }}" alt="">
                    <img src="{{ Vite::asset("resources/image/logo.svg") }}" alt="">
                </a>
            </div>
            <div>nav</div>
            <div>post</div>
        </Nav>
        <Main>
            {{ $slot }}
        </Main>
    </div>
</body>
</html>