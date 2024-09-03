<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Details</title>
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

    <!-- Project Detail Section -->
    <section class="services" id="services">
        <div class="services-heading">
        </div>
        <div class="services-content">
            <div class="my-row">
                <div class="my-card">
                    <div class="icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h2 class="greet-heading blue-text">{{ $projectDetail['name'] }}</h2>
                    <p class="small-para">
                    {{ $projectDetail['description'] }}
                    </p>
                </div>
            </div>
        </div>
    </section>

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