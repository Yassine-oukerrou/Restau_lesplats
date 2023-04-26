@extends('layouts.frontend')
@section('title', 'Blog')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Blog</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection

@section('content')
<div class="container margin_60_40">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
              
                <div class="col-md-6" data-cue="slideInUp">
                    <article class="blog">
                        <figure>
                            <a href=""><img src="" alt="">
                                <div class="preview"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="post_info">
                            <small>titre - 2023</small>
                            <h2><a href="">title</a></h2>
                            <p>description</p>
                        </div>
                    </article>
                </div>
                
            </div>

        </div>
        <!-- /col -->

        @include('partials.frontend.blogSidebar')
    </div>
    <!-- /row -->
</div>
@endsection
