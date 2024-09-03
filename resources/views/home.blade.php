<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>Sakib's Portfolio</title>
    <link rel="stylesheet" 
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous" 
            referrerpolicy="no-referrer" 
    />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>
    <!-- Navbar header section -->
    @include("layouts.header")

    <!-- Main hero banner -->
    <section id="home" class="hero">
        <div class="intro">
            <div class="headings">
                <h3 class="greet-heading">Hello, I'm</h3>
                <h1 class="my-heading">Sakib Bin Ehsan</h1>
                <h4 class="sub-heading">
                    A Software Engineer with multiple years of Experience.
                </h4>
            </div>
            <div class="intro-buttons">
                <button class="btn common-btn">Hire Me</button>
                <button class="btn ghost-btn">Get Resume</button>
            </div>
        </div>
    </section>

    <!-- Footer section -->
    @include("layouts.footer")

    <script src=
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"
                integrity=
        "sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer">
      </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
