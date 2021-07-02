@extends('pages.layouts.app')

@section('content')

    @include('pages.layouts.home_page.slider.index')

    @include('pages.layouts.home_page.speciality.index')

    @include('pages.layouts.home_page.welcome.index')

    @include('pages.layouts.home_page.department.index')

    @include('pages.layouts.home_page.comment.index')

    @include('pages.layouts.home_page.expert.index')


    <!-- Emergency_contact start -->
    <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                        <div class="info">
                            <h3>For Any Emergency Contact</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">+10 378 4673 467</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                        <div class="info">
                            <h3>Make an Online Appointment</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">Qəbula yazıl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Emergency_contact end -->
@endsection
