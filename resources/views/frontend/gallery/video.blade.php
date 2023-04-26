@extends('layouts.frontend')
@section('title', 'Video Gallery')

@section('breadcrumb')
    <div class="col-xl-9 col-lg-10 col-md-8">
        <h1>Video Gallery</h1>
        <p>Cooking delicious and tasty food since</p>
    </div>
@endsection

@section('content')
    <div class="container margin_60_40">
        <div class="grid">
            <ul class="magnific-gallery" data-cues="zoomIn">
                <div class="row">
            
                        <div class="col-xl-3">
                            <div class="item">
                                <div class="item-img" data-cue="slideInUp">
                                    <img src="" alt="" />
                                    <div class="content">
                                        <a href="" class="video"
                                            title="Video Youtube"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                </div>
            </ul>
        </div>
    </div>
@endsection
