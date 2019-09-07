@extends('front')
@section('content')
    <div class="container">
        <div class="panel panel-default ">
            <div class="panel-heading">
                Survey Results
            </div>
            <div class="panel-body">
                <p class="text-muted">
                   <h3 class="text-dark">Thank You</h3>
                    User opinion is very important for us we seek to satisfy our clients need and we care about what they
                    love what they hat as a step to change the website performance and view according to our user recommendation
                </p>

                <hr>
                <div class="col-lg-8">

                    @if($rates->percentage == 0)
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                    @elseif($rates->percentage <= 25.0)
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                    @elseif($rates->percentage >= 25.0 && $rates->percentage < 50.0)
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                    @elseif($rates->percentage >= 50.0 && $rates->percentage < 75)
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                    @elseif($rates->percentage >= 70.0 && $rates->percentage < 100)
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star-o fa-5x" style="color: #ffa800"></span>
                    @else
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                        <span class="fa fa-star fa-5x" style="color: #ffa800"></span>
                    @endif

                    <p class="text-muted">Thank You <strong class="text-uppercase"> {{$rates->user->name}} </strong> for rating our product and the performance
                        of our site {{$rates->percentage}}% <strong>Notification will be send to admin.</strong>
                        we promises to take user opinion as possible in action soon
                    </p>
                </div>


                <div id="feeling" class="col-lg-4" style="border-left: 2px solid #ddd">
                    @if($rates->percentage == 0 || $rates->percentage <= 33.33)
                        <img src="{{asset('images/angry.png')}}" alt="" width="150">
                    @elseif($rates->percentage >= 33.33 && $rates->percentage <= 66.66)
                        <img src="{{asset('images/regular.png')}}" alt="" width="150">
                    @elseif($rates->percentage >= 66.66 && $rates->percentage <= 100)
                        <img src="{{asset('images/happy.png')}}" alt="" width="150">
                    @endif
                </div>

                <a href="/" class="btn btn-dark">Back To home</a>
            </div>
            </div>
        </div>

@endsection