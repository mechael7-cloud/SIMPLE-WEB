<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     @vite(['resources/css/home.css' , 'resources/css/about.css', 'resources/css/blog.css'])
     @vite(['resources/css/app.css', 'resources/js/app.js'])
     <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <h2><a href="">MONOCHROME.</a></h2>
        <div class="navigision"><a href="/home">HOME</a>
        <a href="/about">ABOUT</a>
        <a href="/blog">BLOG</a>
        </div>
    </nav>

    {{$slot}}


    <div class="home4">
    <div class="top1">
        <h3>MONOCHOROME.</h3>
        <p>Minimalism in design and life.</p>
    </div>
    <div class="top2">
        <a href="">
            <i class="fab fa-github"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin"></i>
        </a>
        <p>© 2026 Monochrome Inc. All rights reserved.</p>
    </div>
    </div>
    
    
</body>
</html>
