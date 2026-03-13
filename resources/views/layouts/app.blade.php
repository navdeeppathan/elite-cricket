<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elite Cricket Academy</title>

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet"> 


    <style>
      

        .overlay {
            background: linear-gradient(
                to right,
                rgba(6, 23, 47, 0.95),
                rgba(6, 23, 47, 0.85),
                rgba(6, 23, 47, 0.8)
            );
        }
    </style>
    <style>
    .hero-gradient{
        background:
        linear-gradient(
            135deg,
            hsl(220 50% 12%) 0%,
            hsl(220 45% 18%) 50%,
            hsl(145 40% 20%) 100%
        );
    }
    </style>
</head>
<body class="w-full overflow-x-hidden">

@include('layouts.header')

    <!-- MAIN CONTENT -->
    <main class="flex-1   overflow-y-auto">
        @yield('content')
    </main>

@include('layouts.footer')



<!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1200,
        once: true
    });
    </script>

</body>
</html>