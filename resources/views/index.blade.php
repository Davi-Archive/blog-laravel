@extends('layout.app')


@section('content')
<br />
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @foreach ( $posts as $post )
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="{{route('posts.show', $post->id)}} "><img class="card-img-top" height="220" src="{{$post->post_img}} " alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">{{$post->created_at}} </div>
                            <h2 class="card-title h4">{{$post->title}} </h2>
                            <p class="card-text">{{$post->post_text}} </p>
                            <p class="post-author">{{$post->post_author}} </p>
                            <a class="btn btn-primary" href="{{route('posts.show', $post->id)}}">Saiba Mais →</a>

                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-lg-6">
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">

            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categorias</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                @foreach ($categories as $category)
                                <li><a href="{{route('home')}}?category_id={{$category->id}}">{{$category->name}} </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
