@extends('frontend.layouts.main')
@section('main-container')
  
    <!-- contact section starts  -->

    <section class="contact all">

        <h1 class="heading">
            <span>c</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
            <span class="space"></span>
            <span>u</span>
            <span>s</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="https://www.customvideoanimation.com/assets/images/contact-banner.jpg" alt="ContactUs image">
            </div>

            <form action="{{route('contactus_submit')}}" method="post">
                @csrf
                <div class="inputBox">
                    <input type="text" name="name" placeholder="name">
                    <input type="email" name="email" placeholder="abc@example.com">
                </div>
                <div class="inputBox">
                    <input type="number" name="contactNo" placeholder="number">
                    <input type="text" name="subject" placeholder="subject">
                </div>
                <textarea placeholder="message" name="message" cols="30" rows="10"></textarea>
                <input style="font-size:18px;" type="submit" class="btn" value="send message">
                <a href="contactus_show" class="btn" style="font-size:18px;padding:0px 30px">View data</a>
                <h4>{{session('msg')}}</h4>
            </form>
        </div>

    </section>

    <!-- contact section ends -->
@endsection