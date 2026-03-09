<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    
    <nav>
        <h2><a href="">MONOCHROME.</a></h2>
        <div class="navigision">
            <a href="/" class="home" id="home">HOME</a>
            <a href="/about" class="about" id="about">ABOUT</a>
            <a href="/blog" class="blogx" id="blog">BLOG</a>
            </div>
            <div class="tom" >
                <i class="fas fa-bars" id="tombol-nav"></i>
            </div>
    </nav>
    <div class="control" id="menu-nav"> 
        <a href="/" class="home">HOME</a>
        <a href="/about" class="about">ABOUT</a>
        <a href="/blog" class="blogx">BLOG</a>
    </div>

    <div class="seluruh" id="isi-element">

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
            <p>© 2026 Monochrome Inc. <span class="home4s"> All rights reserved.</span></p>
        </div>
    </div>
    </div>
</body>
</html>
