@extends('pages.layouts.app')

@section('content')

    <!-- slider_area_start -->
    @forelse($sliders as $slider)
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> {{$slider->title}}</h3>
                                <p>{{$slider->subtitle}}</p>
                                <a href="#" class="boxed-btn3">Ətraflı</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
        <div class="slider_area">
            <div class="slider_active owl-carousel">
                <div class="single_slider  d-flex align-items-center slider_bg_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3> <span>Hər kəs üçün</span> <br> Sağlam bədən</h3>
                                    <p>In healthcare sector, service excellence is the facility of <br> the hospital as healthcare service provider to consistently.</p>
                                    <a href="#" class="boxed-btn3">Ətraflı</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
    <!-- slider_area_end -->


    <!-- service_area_start -->
    @forelse($speciality as $spec)
        <div class="service_area">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>{{$spec->title_1}}</h3>
                            <p>{{$spec->subtitle_1}}</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>{{$spec->title_2}}</h3>
                            <p>{{$spec->subtitle_2}}</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>{{$spec->title_3}}</h3>
                            <p>{{$spec->subtitle_3}}</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="service_area">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>Üz-çənə cərrahı</h3>
                            <p>Clinical excellence must be the priority for any health care service provider.</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>Plastik cərrah</h3>
                            <p>Clinical excellence must be the priority for any health care service provider.</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            <div class="icon">
                            </div>
                            <h3>İmplantoloq</h3>
                            <p>Clinical excellence must be the priority for any health care service provider.</p>
                            <a href="#" class="boxed-btn3-white">Ətraflı</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
    <!-- service_area_end -->


    <!-- welcome_docmed_area_start -->
    <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Dr Fariz Sizi salamlayır!</h2>
                        <h3>Sağlamlığınıza <br> diqqət edin</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.</p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Apartments frequently or motionless. </li>
                            <li> <i class="flaticon-right"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
                            <li> <i class="flaticon-right"></i> Voluptatem quia voluptas sit aspernatur. </li>
                        </ul>
                        <a href="about.html" class="boxed-btn3-white-2">Ətraflı</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_docmed_area_end -->


    <!-- offers_area_start -->
    <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Göstərilən Xidmətlər</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. <br> It esteems luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/1.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#"> Ağız və üz-çənə travması</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/2.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Blefaroplastika</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/3.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Cərrahi biopsiya</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/4.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Axınlar</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/5.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Dodaqlar</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="img/department/6.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Ortho-cərrahiyyə</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Ətraflı</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offers_area_end -->


    <!-- testmonial_area_start -->
    <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br> Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br> Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br> Fusce ac mattis nulla. Morbi eget ornare dui. </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial_area_end -->


    <!-- expert_doctors_area_start -->
    <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Expert Doctors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="expert_active owl-carousel">
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/1.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/2.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/3.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/4.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/1.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="img/experts/2.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- expert_doctors_area_end -->



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
