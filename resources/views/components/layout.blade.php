<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])  
</head>
<body class="bg-black text-white font-hanken-grotesk">
    <div class="px-10">
        <Nav class="flex justify-between items-center border-b border-white/10 py-4">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/image/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="flex justify-between space-x-6 font-bold text-white/80">
                <a href="#" class="hover:text-white">Jobs</a>
                <a href="#" class="hover:text-white">Careers</a>
                <a href="#" class="hover:text-white">Salaries</a>
                <a href="#" class="hover:text-white">Companies</a>
            </div>
            <div class="font-bold hover:text-white/70">
                <a href="#">Post a Job</a>
            </div>
        </Nav>
        <Main class="mt-8 max-w-[986px] mx-auto">
            {{ $slot }}
        </Main>
    </div>
</body>
</html>