@extends('client.master_layout')
@section('content')
    <div class="container-fluid border-bottom p-5">
        <!-- User Identety Brief-->
        <div class="profile-identity row"> 
            <div class="profile-card--avatar shadow-sm rounded-circle">
                <img src="../../assets/client/images/user-profile-2.png" class="rounded-circle profile-avatar">
                <div class="is_active-dot rounded-circle"></div>
            </div>

            <div class="user-info color-black mt-5 py-0 col-md-8">
                <div class="username color-black">
                    <!-- <h5>اسم المستخدم</h5> -->
                    <h5>ضحى الخراساني</h5>
                </div>

                <div class="user-brief text-muted">
                    <p class="d-inline-block ms-3">
                        <!-- <i class="fas fa-briefcase"></i> <span class="me-1">التخصص</span> -->
                        <i class="fas fa-briefcase"></i> <span class="me-1">متخصصة في برمجة مواقع الويب Full Stack Developer</span>
                    </p>
                    <p class="d-inline-block">
                        <!-- <i class="fa-solid fa-location-dot"></i> <span class="me-1">البلد</span> -->
                        <i class="fa-solid fa-location-dot"></i> <span class="me-1">اليمن</span>
                    </p>
                </div>
            </div>
        </div>
        <!-- /User Identety Brief-->

        <!-- Profile Taps -->
        <div class="user-profile-tabs row d-flex justify-content-between align-items-center">
            <nav class="nav fw-bold col-auto">
                <a class="nav-link activated color-black" aria-current="page" href="">حول</a>
                <a class="nav-link color-black" href="#">الأعمال</a>
                <a class="nav-link color-black" href="#">التقييمات</a>
            </nav>

            <div class="wakelny-btn-div">
                <button type="button" class="btn-wakelny text-light fw-bold" >
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>وكلني</span>
                </button>
            </div>
        </div>
        <!-- /Profile Taps -->
    </div>
@endsection
