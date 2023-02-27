@extends('layout.web')

@section('page-title')
    Článok
@endsection

@section('content')

    <hr>
    <b>Názov</b>: {{ $post->name }}
    <br>
    <b>Publikované</b>: {{ $post->published }}
    <br>
    <b>Slug</b>: {{ $post->slug }}
    <br>
    <b>Popis</b>: {{ $post->short }}
    <br>
    <b>Profilový obrázok</b>:
    <br>
    <img src="{{ asset( $post->profile_image->get_type('image') ) }}" width="200">
    @if( config('demibox.blog.categories') )
        <br>
        <b>Kategória</b>: {{ $post->category->name }}
    @endif
    @if( config('demibox.blog.tags') )
        <br>
        <b>Tagy</b>:
        @foreach($post->tags as $tag)
            {{ $tag->name }},
        @endforeach
    @endif
    <br>
    <br>
    <div style="margin-left: 50px;">
        @foreach($post->items->sortBy('order') as $post_item)
            <b>Blok {{ $post_item->order }}</b>
            <br>
            @if( $post_item->type == 'paragraph' )
                {!! $post_item->paragraph_text !!}
            @elseif( $post_item->type == 'image' )
                {{ $post_item->image_name }}, {{ $post_item->image_alt }},{{ $post_item->image_description }}
                <br>
                <img src="{{ asset( $post_item->image->get_type('image') ) }}" width="200">
            @endif
            <br>
            <br>
        @endforeach
    </div>
    <hr>

@endsection
