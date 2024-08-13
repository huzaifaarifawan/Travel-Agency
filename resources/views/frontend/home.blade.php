@extends('frontend.layouts.main')
@section('main-container')

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://wallpapercave.com/wp/wp2122124.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1><b>UMRAH Packages</b></h1>
        <p>Find out all about upcoming Umrah Packages, Updates on Umrah Visa, Travel and Quarantine requirements for Saudia Arabia, and Requirements for Umrah E-Visa</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://wallpaperaccess.com/full/1093978.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-light"><b>Heaven on Earth.</b></h1>
        <p class="text-light">Switzerland is today all about once-in-a-lifetime excursions, heart-racing Alpine activities, and metropolitan culture, in addition to chocolate, cuckoo clocks, and yodelling.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://wallpaperaccess.com/full/3778.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-dark"><b>EGYPT Tour</b></h1>
        <p class="font-weight-dark">The Egyptian pyramids are ancient masonry structures located in Egypt.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- home section ends -->

<!-- book section starts  -->

<section class="book" id="book">

  <h1 class="heading">
    <span>b</span>
    <span>o</span>
    <span>o</span>
    <span>k</span>
    <span class="space"></span>
    <span>n</span>
    <span>o</span>
    <span>w</span>
  </h1>

  <div class="row">

    <div class="image">
      <img src="{{url('frontend/images/22948478.jpg')}}" alt="booking">
    </div>
    <form action="{{route('booking_submit')}}" method="post">
      @csrf
      <div class="inputBox">
        <h3>destination</h3>
        <input type="text" placeholder="place name" name='destination'>
      </div>
      <div class="inputBox">
        <h3>how many</h3>
        <input type="number" placeholder="number of guests" name='howMany'>
      </div>
      <div class="inputBox">
        <h3>arrival</h3>
        <input type="date" name='arrival'>
      </div>
      <div class="inputBox">
        <h3>leaving</h3>
        <input type="date" name='leaving'>
      </div>
      <div class="inputBox">
        <h3>Contact No.</h3>
        <input type="text" placeholder='contact' name='contact'>
      </div>
      <div class="inputBox">
        <h3>Email</h3>
        <input type="email" placeholder='abc@example.com' name='email'>
      </div>
      <input style="font-size: 20px;" type="submit" class="btn" value="Book now">
    </form>

    <form action="{{route('booking_customer')}}" method="POST">
      @csrf
      <div class='inputBox updateDelete'>
        <input type='number' placeholder="your id" name='id' />
        <button style="font-size: 15px;" class="update" type="submit" name="action" value="update">Update</button>
        <button style="font-size: 15px;" class="delete" type="submit" name="action" value="delete">Delete</button>
        <h4>{{session('msg')}}</h4>
      </div>
    </form>
  </div>
</section>

<!-- book section ends -->


<!-- brand section  -->
<section class="brand-container">

  <div class="swiper-container brand-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/1.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/2.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/3.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/4.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/5.jpg" alt=""></div>
      <div class="swiper-slide"><img src="images/6.jpg" alt=""></div>
    </div>
  </div>

</section>

<!-- footer section  -->

<section class="footer">

  <div class="box-container">

    <div class="box">
      <h3>about us</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est
        accusantium voluptas enim nemo facilis sit debitis.</p>
    </div>
    <div>

    </div>
    <div class="box">
      <h3>follow us</h3>
      <a href="#">facebook</a>
      <a href="#">instagram</a>
      <a href="#">twitter</a>
    </div>

  </div>

  <h1 class="credit">All Rights reserved by <span> mughal travels</span> </h1>

</section>
@endsection