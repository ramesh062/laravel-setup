@extends('layouts.app')

@section('content')
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Tutor Listing</h2>
                <nav id="breadcrumbs">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Tutor Listing</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8">
            <div class="row">
                @foreach($teachers as $teacher)
                    <div class="col-lg-12 col-md-12">
                        <div class="utf_listing_item-container list-layout">
                            <a href="{{url('teachers/'.$teacher->id)}}" class="utf_listing_item">
                                <div class="utf_listing_item-image">
                                    <img src="{{asset("images/user_avatar_01.jpg")}}" alt="">
                                </div>
                                <div class="utf_listing_item_content">
                                    <div class="utf_listing_item-inner">
                                        <h3>{{ucfirst($teacher->name)}}</h3>
                                        <div class="utf_listing_tag_block">
                                            <span class="text-capitalize">{{$teacher->teachers->subject}}</span>
                                            <span>{{$teacher->teachers->education}}</span>
                                        </div>
                                        <!-- <span>Yoga Teacher</span> <span>Hindi</span> -->
                                        <div class="utf_star_rating_section" data-rating="4.5">
                                            <div class="utf_counter_star_rating">(4.5)</div>
                                        </div>
                                        <p> {{str$teacher->teachers->description}}</p>
                                        <span><i class="fa fa-map-marker"></i> India</span>
                                        <span><i class="fa fa-rupee"></i> {{$teacher->teachers->fee}}/hours</span>
                                        <span><i class="fa fa-adn"></i> {{$teacher->teachers->experience}}</span>
                                        <span><i class="fa fa-simplybuilt"></i> {{$teacher->teachers->experience}}</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
                {{ $teachers->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
