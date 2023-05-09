@extends('layout.web')

@section('og_tags')
    <meta property="og:url"             content="" />
    <meta property="og:type"            content="website" />
    <meta property="og:title"           content="{{ env('APP_NAME') }}" />
    <meta property="og:description"     content="" />
    <meta property="og:image"           content="" />
    <meta property="og:image:width"     content="800" />
    <meta property="og:image:height"    content="400" />
@endsection

@section('content')
    <section class="section-border-bottom hello" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-img-wrapper">
                        <img src="{{ asset('img/slack.jpg') }}" alt="Photo of me" class="img-fluid">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about">
                        <h1>
                            I am Miroslav Grofčík<span class="text-primary">.</span>
                        </h1>

                        <p class="text-grey">
                            I am a software developer with 8+ years of experience in web development and software
                            development. I like to code both backend and frontend. I am currently located in Europe
                            and working remotely.
                        </p>

                        <div class="about-info">
                            <div class="row">
                                <div class="col-2">
                                    <b>Phone</b>
                                </div>
                                <div class="col-10">
                                    +421 918 735 863
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <b>E-mail</b>
                                </div>
                                <div class="col-10">
                                    miroslav.grofcik@demi.sk
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <b>Location</b>
                                </div>
                                <div class="col-10">
                                    Europe
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-2">
                                    <b>Speaking</b>
                                </div>
                                <div class="col-10">
                                    English, Spanish, Slovak
                                </div>
                            </div>
                        </div>

                        <div class="about-buttons">
                            <a href="https://github.com/Mirec10m" target="_blank" class="btn btn-first">
                                <i class="fa-brands fa-github icon"></i>
                                Github
                            </a>
                            <a href="#" class="btn btn-second">
                                <i class="fa-solid fa-file-lines icon"></i>
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills section-border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h2>
                        Skills<span class="text-primary">.</span>
                    </h2>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="row upper-row">
                        <div class="col-12 col-lg-6">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Backend
                                </div>
                                <div class="item-content">
                                    Laravel, PHP, MySQL, MariaDB, SQL, Redis, REST API, PHPUnit
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Frontend
                                </div>
                                <div class="item-content">
                                    Vue 3 (composition API), HTML, CSS, JS, Sass/Less, Bootstrap
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="item">
                                <div class="item-title">
                                    Other
                                </div>
                                <div class="item-content">
                                    Docker, Git, Composer, Gitlab CI/CD, Github Actions, JSON, XML, Unix
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="item">
                                <div class="item-title">
                                    Familiar with
                                </div>
                                <div class="item-content">
                                    Postman, Gitlab, Gitlab CI/CD, Github, Github Actions, Asana, Trello, JetBrain IDEs, Slack
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="experience section-border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h2>
                        Experience<span class="text-primary">.</span>
                    </h2>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="row upper-row">
                        <div class="col-12">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Founder & Software developer
                                </div>
                                <div class="item-company">
                                    DeMi Studio, s. r. o.
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2017 - now
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Remote / Contract work
                                </div>
                                <div class="item-content">
                                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                    lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row upper-row">
                        <div class="col-12">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Software developer
                                </div>
                                <div class="item-company">
                                    SoftPoint, s. r. o.
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2016 - 2017
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Nitra, Slovakia
                                </div>
                                <div class="item-content">
                                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                    lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row upper-row">
                        <div class="col-12">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Web developer
                                </div>
                                <div class="item-company">
                                    GaRT, s. r. o.
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2015 - 2016
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Bratislava, Slovakia / Remote
                                </div>
                                <div class="item-content">
                                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                    lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="item">
                                <div class="item-title">
                                    Web developer
                                </div>
                                <div class="item-company">
                                    SmartEdge, s. r. o.
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2014 - 2015
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Bratislava, Slovakia / Remote
                                </div>
                                <div class="item-content">
                                    Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                    lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="education section-border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h2>
                        Education<span class="text-primary">.</span>
                    </h2>
                </div>

                <div class="col-12 col-lg-8">
                    <div class="row upper-row">
                        <div class="col-12 col-lg-6">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Constantine the Philosopher University
                                </div>
                                <div class="item-subtitle">
                                    University (Master)
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2015 - 2021
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Nitra, Slovakia
                                </div>
                                <div class="item-content">
                                    Master in Applied Informatics
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="item section-border-bottom">
                                <div class="item-title">
                                    Business Academy
                                </div>
                                <div class="item-subtitle">
                                    High School
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2011 - 2015
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Nitra, Slovakia
                                </div>
                                <div class="item-content">
                                    High school in Economics, Accounting & Business
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="item">
                                <div class="item-title">
                                    Adept
                                </div>
                                <div class="item-subtitle">
                                    Language School
                                </div>
                                <div class="item-time">
                                    <i class="fa-solid fa-calendar-days icon"></i>
                                    2002 - 2013
                                </div>
                                <div class="item-location">
                                    <i class="fa-solid fa-location-dot icon"></i>
                                    Nitra, Slovakia
                                </div>
                                <div class="item-content">
                                    Private lessons of English language
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <h2>
                        Contact<span class="text-primary">.</span>
                    </h2>
                </div>

                <div class="col-12 col-lg-8">
                    @if( isset($status) || $errors->any() )
                        <div id="scroll-to-form"></div>
                        @if( isset($status) && isset($message) )
                            <div class="{{ $status }}-message">{{ $message }}</div>
                        @endif
                    @endif

                    <form action="{{ route( 'web.send.' . app()->getLocale()) }}" method='POST' id="contact-form">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-30">
                                    <input placeholder="E-mail" name="email" type="email" class="form-control">
                                    @include('web._partials._error', ['column' => 'email'])
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Phone" name="phone" type="text" class="form-control">
                                    @include('web._partials._error', ['column' => 'phone'])
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-30">
                                    <textarea placeholder="Message" name="message" class="form-control" rows="5"></textarea>
                                    @include('web._partials._error', ['column' => 'message'])
                                </div>

                                <button type="submit" class="btn btn-submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
