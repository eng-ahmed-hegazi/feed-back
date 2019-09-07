@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="page-header">
            Users Feedback
        </h3>
        <div>
            <table class="table table-striped table-hover" style="padding: 0;margin: 0">
                    <tr>
                        <th>User Email</th>
                        <th>Feedback Percentage</th>
                        <th>User Feeling</th>
                        <th>User Rate</th>
                    </tr>
                    @foreach($rates as $rate)
                    <tr>
                        <td>{{$rate->user->email}}</td>
                        <td>{{$rate->percentage}}</td>
                        <td>
                            @if($rate->percentage == 0 || $rate->percentage <= 33.33)
                                <img src="{{asset('images/angry.png')}}" alt="" width="30">
                            @elseif($rate->percentage >= 33.33 && $rate->percentage <= 66.66)
                                <img src="{{asset('images/regular.png')}}" alt="" width="30">
                            @elseif($rate->percentage >= 66.66 && $rate->percentage <= 100)
                                <img src="{{asset('images/happy.png')}}" alt="" width="30">
                            @endif
                        </td>
                        <td>
                            @if($rate->percentage == 0)
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            @elseif($rate->percentage <= 25.0)
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            @elseif($rate->percentage >= 25.0 && $rate->percentage < 50.0)
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            @elseif($rate->percentage >= 50.0 && $rate->percentage < 75)
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            @elseif($rate->percentage >= 70.0 && $rate->percentage < 100)
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            @else
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                                <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
            </table>
            <hr>
            <h3 class="page-header">
                Total Feedback
            </h3>
            <table class="table table-striped table-hover" style="padding: 0;margin: 0">
                <tr>
                    <th>Total Percentage </th>
                    <th>Total Feeling</th>
                    <th>Total Rate</th>
                </tr>
                <tr>
                    <td class="">{{$total}} %</td>
                    <td class="">
                        @if($total == 0 || $total <= 33.33)
                            <img src="{{asset('images/angry.png')}}" alt="" width="30">
                        @elseif($total >= 33.33 && $total <= 66.66)
                            <img src="{{asset('images/regular.png')}}" alt="" width="30">
                        @elseif($total >= 66.66 && $total <= 100)
                            <img src="{{asset('images/happy.png')}}" alt="" width="30">
                        @endif
                    </td>
                    <td class="">
                        @if($total == 0)
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                        @elseif($total <= 25.0)
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                        @elseif($total >= 25.0 && $total < 50.0)
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                        @elseif($total >= 50.0 && $total < 75)
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                        @elseif($total >= 70.0 && $total < 100)
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star-o fa-2x" style="color: #ffa800"></span>
                        @else
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                            <span class="fa fa-star fa-2x" style="color: #ffa800"></span>
                        @endif
                    </td>
                </tr>
                </table>
        </div>
    </div>
@endsection
