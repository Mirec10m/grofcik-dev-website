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

@section('captcha')
    <script src="https://www.google.com/recaptcha/api.js?render=6Leii_klAAAAALA4ux1HsB6SOUJm2ETT00XbMH8R"></script>
@endsection

@section('js')
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6Leii_klAAAAALA4ux1HsB6SOUJm2ETT00XbMH8R', {action: 'email'}).then(function(token) {
                $('#contact-form').prepend('<input type="hidden" name="captcha" value="' + token + '">');
            });
        });
    </script>
@endsection

@section('content')
    <section class="section-border-bottom hello" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-img-wrapper">
                        <img src="{{ asset('img/slack.jpg') }}" alt="Photo of Miroslav Grofcik" class="img-fluid">
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about">
                        <h1>
                            I am Miroslav Grofčík<span class="text-primary">.</span>
                        </h1>

                        <p class="text-grey">
                            I am a software developer with
                            {{ \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse('2014-01-01')) }}+
                            years of experience in software development and web
                            development. I like to code both backend and frontend.
                            I have experience with leading the development team on projects.
                            I am currently located in Europe
                            and working remotely.
                        </p>

                        <div class="about-info">
                            <div class="row">
                                <div class="col-3 col-sm-2">
                                    <b>Phone</b>
                                </div>
                                <div class="col-9 col-sm-10">
                                    +421 918 735 863
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 col-sm-2">
                                    <b>E-mail</b>
                                </div>
                                <div class="col-9 col-sm-10">
                                    miroslav.grofcik@demi.sk
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 col-sm-2">
                                    <b>Location</b>
                                </div>
                                <div class="col-9 col-sm-10">
                                    Europe
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-3 col-sm-2">
                                    <b>Speaking</b>
                                </div>
                                <div class="col-9 col-sm-10">
                                    English, Spanish, Slovak, Czech
                                </div>
                            </div>
                        </div>

                        <div class="about-buttons">
                            <a href="https://github.com/Mirec10m" target="_blank" class="btn btn-first">
                                <i class="fa-brands fa-github icon"></i>
                                Github
                            </a>
                            <a href="{{ asset('pdf/Personal-CV.pdf') }}" download="CV - Miroslav Grofcik" class="btn btn-second">
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
                                    Vue 3 (composition API), React, NextJS, TypeScript, Tailwind, Bootstrap, Sass/Less,
                                    HTML, CSS, JS
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="item upper-item">
                                <div class="item-title">
                                    Other
                                </div>
                                <div class="item-content">
                                    Docker, Git, Composer, Gitlab CI/CD, Github Actions, JSX, JSON, XML, Unix
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
                                    In 2017, I founded my own company. Since then I have worked on projects
                                    such as websites, eCommerce, CRM systems, ERP systems, TMS systems,
                                    custom CMS systems, APIs, and SaaS platforms.
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
                                    In SoftPoint I was developing small / medium size projects. I was working on
                                    developing websites, eCommerce projects, and smaller CRM/ERP systems integrated
                                    into these projects.
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
                                    Bratislava, Slovakia
                                </div>
                                <div class="item-content">
                                    In GaRT I was developing websites and eCommerce projects. I also participated
                                    in the development of a private CMS system and its modules, written in pure PHP.
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
                                    In SmartEdge I started as an intern to improve my Laravel skills in real projects.
                                    I was working on small projects - developing websites or website adjustments.
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
                    @if($errors->any())
                        <div id="scroll-to-form"></div>
                    @elseif(session()->has('message'))
                        <div id="successModal" class="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">
                                            <i class="fa-solid fa-check-circle success-color"></i>
                                            E-mail sent
                                        </h5>
                                        <button type="button" class="btn-close mr-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ session('message') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <form action="{{ route( 'web.send.' . app()->getLocale()) }}" method='POST' id="contact-form">
                        @csrf

                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-30">
                                    <input placeholder="E-mail*" name="email" value="{{ old('email') }}" type="email" class="form-control">
                                    @include('web._partials._error', ['column' => 'email'])
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-30">
                                    <input placeholder="Phone*" name="phone" value="{{ old('phone') }}" type="text" class="form-control">
                                    @include('web._partials._error', ['column' => 'phone'])
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mb-30">
                                    <textarea placeholder="Message*" name="message" class="form-control" rows="5">{{ old('message') }}</textarea>
                                    @include('web._partials._error', ['column' => 'message'])
                                </div>

                                <div class="form-group mb-10 clearfix">
                                    <input name="gdpr" id="gdpr" type="hidden" value="0">
                                    <span class="custom-checkbox" data-target="#gdpr"><i class="fa fa-check"></i></span>
                                    <label class="checkbox-label font-12">
                                        I consent to the processing of my personal data<span class="error-color">*</span>
                                    </label>
                                    @include('web._partials._error', ['column' => "gdpr"])
                                </div>

                                <div class="form-group mb-30">
                                    <label class="checkbox-label line-height-small font-12">
                                        This site is protected by reCAPTCHA and the Google
                                        <a class="color-primary color-primary-hover" href="https://policies.google.com/privacy" target="_blank">
                                            Privacy Policy
                                        </a>
                                        and
                                        <a class="color-primary color-primary-hover" href="https://policies.google.com/terms" target="_blank">
                                            Terms of Service
                                        </a>
                                        apply.
                                    </label>
                                </div>

                                <button type="submit" id="contact-form-submit" class="btn btn-submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
