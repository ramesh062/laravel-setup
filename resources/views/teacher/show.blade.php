@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row utf_sticky_main_wrapper">
        <div class="col-lg-8 col-md-8">
            <div id="titlebar" class="utf_listing_titlebar">
                <div class="utf_listing_titlebar_title">
                    <div class=""><img src="{{asset("images/user_avatar_01.jpg")}}" alt=""></div>
                    <h2>{{$teacher->name}} <span class="listing-tag">{{$teacher->teachers->subject}} teacher, {{$teacher->teachers->education}}</span></h2>
                    <span> <a href="#" class="listing-address"> <i class="sl sl-icon-location"></i>{{$teacher->teachers->address}}</a> </span>
                    <span class="call_now"><i class="sl sl-icon-phone"></i> {{$teacher->teachers->phone}}</span>
                    <div class="utf_star_rating_section" data-rating="4.5">
                        <div class="utf_counter_star_rating">(4.5) / (14 Reviews)</div>
                    </div>
                    <ul class="listing_item_social">
                        <li><a href="#"><i class="fa fa-envelope"></i> Message</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i> Phone</a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i> Pay</a></li>
                        <li><a href="#"><i class="fa fa-star"></i> Review</a></li>
                    </ul>

                </div>
            </div>
            <div id="utf_listing_overview" class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-30"><i class="fa fa-user"></i> Overview</h3>
                <p>{{$teacher->teachers->description}}</p>
            </div>

            <div class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40"><i class="fa fa-briefcase"></i> Subjects</h3>
                <p class="text-uppercase">{{$teacher->teachers->subject}} TEACHER (Beginner-Expert)</p>
                <p class="text-capitalize">{{$teacher->teachers->subject}} (Grade 1-Grade 8)</p>
            </div>

            <div class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40"><i class="fa fa-adn"></i> Experience</h3>
                <p>{{$teacher->teachers->experience}}</p>
            </div>

            <div class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40"><i class="fa fa-graduation-cap"></i> Education</h3>
                <p>{{$teacher->teachers->education}}</p>
            </div>

            <div class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-30 margin-bottom-40"><i class="fa fa-rupee"></i> Fee Details</h3>
                <p>₹{{$teacher->teachers->fee}}</p>
                <p>I prefer online classes and per subject i like to charge Rs.{{$teacher->teachers->fee}}</p>
            </div>
            <div id="utf_listing_reviews" class="utf_listing_section">
                <h3 class="utf_listing_headline_part margin-top-75 margin-bottom-20">Reviews <span>(08)</span></h3>
                <div class="clearfix"></div>
                <div class="comments utf_listing_reviews">
                    <ul>
                        <li>
                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="5"></div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2021 - 8:52 am</span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.
                                    Aliquam erat volutpat.</p>
                            </div>
                        </li>
                        <li>

                            <div class="utf_comment_content">
                                <div class="utf_arrow_comment"></div>
                                <div class="utf_star_rating_section" data-rating="4"></div>
                                <a href="#" class="rate-review">Helpful Review <i class="fa fa-thumbs-up"></i></a>
                                <div class="utf_by_comment">Francis Burton<span class="date"><i class="fa fa-clock-o"></i> Jan 05, 2021 - 8:52 am</span> </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt.
                                    Aliquam erat volutpat.</p>
                            </div>
                        </li>



                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_pagination_container_part margin-top-30">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div id="utf_add_review" class="utf_add_review-box">
                <h3 class="utf_listing_headline_part margin-bottom-20">Add Your Review</h3>
                <span class="utf_leave_rating_title">Your email address will not be published.</span>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="clearfix"></div>
                        <div class="utf_leave_rating margin-bottom-30">
                            <input type="radio" name="rating" id="rating-1" value="1">
                            <label for="rating-1" class="fa fa-star"></label>
                            <input type="radio" name="rating" id="rating-2" value="2">
                            <label for="rating-2" class="fa fa-star"></label>
                            <input type="radio" name="rating" id="rating-3" value="3">
                            <label for="rating-3" class="fa fa-star"></label>
                            <input type="radio" name="rating" id="rating-4" value="4">
                            <label for="rating-4" class="fa fa-star"></label>
                            <input type="radio" name="rating" id="rating-5" value="5">
                            <label for="rating-5" class="fa fa-star"></label>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
                <form id="utf_add_comment" class="utf_add_comment">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Name:</label>
                                <input type="text" placeholder="Name" value="">
                            </div>
                            <div class="col-md-4">
                                <label>Email:</label>
                                <input type="text" placeholder="Email" value="">
                            </div>
                            <div class="col-md-4">
                                <label>Subject:</label>
                                <input type="text" placeholder="Subject" value="">
                            </div>
                        </div>
                        <div>
                            <label>Review:</label>
                            <textarea cols="30" placeholder="Your Message..." rows="3"></textarea>
                        </div>
                    </fieldset>
                    <button class="button">Submit Review</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 col-md-4 margin-top-45 sidebar-search">



            <div class="utf_box_widget opening-hours">
                <h3><i class="sl sl-icon-info"></i> Additional Information</h3>
                <ul>
                    <li>Can travel: <span>{{$teacher->teachers->can_travel}}</span></li>
                    <li>Last login: <span>{{$teacher->created_at->diffForHumans()}}</span></li>
                    <li>Registered: <span>{{$teacher->created_at->diffForHumans()}}</span></li>
                    <li>Total Teaching exp: <span>3.0 yrs.</span></li>
                    <li>Teaches online: <span>{{$teacher->teachers->teaches_online}}</span></li>
                    <li>Online Teaching exp: <span>{{$teacher->teachers->online_teaching_exp}}</span></li>
                    <li>Teaches at students home: <span>{{$teacher->teachers->teaches_at_student_home}}</span></li>
                    <li>Homework Help: <span>{{$teacher->teachers->homework_help}}</span></li>
                    <li>Fee: <span>₹{{$teacher->teachers->fee}}/month</span></li>

                </ul>
            </div>

            <div class="utf_box_widget listing-share margin-top-35 margin-bottom-40 no-border">
                <h3><i class="sl sl-icon-pin"></i> Bookmark Listing</h3>
                <span>1275 People Bookmarked Listings</span>
                <button class="like-button"><span class="like-icon"></span> Login to Bookmark Listing</button>
                <ul class="utf_social_icon rounded margin-top-35">
                    <li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
                    <li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a class="instagram" href="#"><i class="icon-instagram"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
</div>
@endsection
