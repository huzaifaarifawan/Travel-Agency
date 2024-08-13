<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mughal Travels</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="{{url('Frontend/style.css')}}"/>
    <!-- bootstrap link  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <!-- header section starts  -->

    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>M</span>travel</a>

        <nav class="navbar">
            <a href="{{route('home')}}">home</a>
            <a href="{{route('packages')}}">packages</a>
            <a href="{{url('services')}}">services</a>
            <a href="{{url('gallery')}}">gallery</a>
            <a href="{{url('contact')}}">contact</a>
        </nav>
        <div id="search">
            <input type="search" placeholder="Search"/>
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div>     

    </header>

    <!-- header section ends -->
</body>