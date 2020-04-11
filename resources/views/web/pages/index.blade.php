@extends('layout.web')

@section('og_tags')
    <meta property="og:url"             content="" />
    <meta property="og:type"            content="article" />
    <meta property="og:title"           content="{{ env('APP_NAME') }}" />
    <meta property="og:description"     content="" />
    <meta property="og:image"           content="" />
    <meta property="og:image:width"     content="800" />
    <meta property="og:image:height"    content="400" />
@endsection

@section('content')
    index
@endsection
