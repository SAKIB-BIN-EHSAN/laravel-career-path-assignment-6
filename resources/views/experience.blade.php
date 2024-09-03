<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiences</title>
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

    <!-- Experience Section -->
    <section id="about" class="about">
        <div class="about-text">
            <h1 class="my-heading">About Me</h1>
            <p class="lead-para">
                GeeksforGeeks is a leading platform 
                  that provides computer science
                resources and coding challenges for 
                  programmers and technology
                enthusiasts, along with interview 
                  and exam preparations for upcoming
                aspirants. With a strong emphasis on 
                  enhancing coding skills and knowledge,
                it has become a trusted destination 
                  for over 12 million plus registered
                users worldwide. The platform offers 
                  a vast collection of tutorials, practice
                problems, interview tutorials, articles, 
                  and courses, covering various domains
                of computer science.
            </p>
            <p>
                Our exceptional mentors hailing from top 
                  colleges & organizations have the
                ability to guide you on a journey from 
                  the humble beginnings of coding to
                the pinnacle of expertise. Under their 
                  guidance watch your skills flourish
                as we lay the foundation and help you 
                  conquer the world of coding.
            </p>
        </div>
        <div class="about-image">
            <img src="{{ asset('images/avataaars.svg') }}" alt="About Image">
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