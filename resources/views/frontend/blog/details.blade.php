@extends('layouts.frontend')
@section('title', 'Blog Details')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>titre</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection

@section('content')
<div class="container margin_60_40">
    <div class="row">
        <div class="col-lg-9">
            <div class="singlepost">
                <figure><img alt="" class="img-fluid w-100" src=""></figure>
                <h1>titre</h1>
                <div class="postmeta">
                    <ul>
                        <li><a href="#"><i class="fas fa-folder-open"></i></i> name </a></li>
                        <li><i class="fas fa-calendar-alt"></i> 2023</li>
                    </ul>
                </div>
                <div class="post-content">
                    <div class="dropcaps">
                        <p>description </p>
                    </div>
                </div>
            </div>
        </div>
        @include('partials.frontend.blogSidebar', [$categories, $latests])
    </div>
</div>
@endsection
