@extends('layouts.frontmaster')

@section('content')
    <div class="container">
        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
            <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
                <span class="text-uppercase cl2 p-r-8">
                    TIN HÓT:
                </span>
                <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
                    @foreach( $tintuc as $news )
                    <span class="dis-inline-block slide100-txt-item animated visible-false">
                        {{ $news->TieuDe }}
                    </span>
                    @endforeach()
                </span>
            </div>
            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
                <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>
        </div>
    </div>    
    <section class="bg0">
        <div class="container">
            <div class="row m-rl--1">
                <div class="col-md-6 p-rl-1 p-b-2">
                    @foreach( $tintuc1->take(1) as $tintuc)
                    <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }});">
                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child1 trans-03"></a>
                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                            @foreach( $loaitin->where('id',$tintuc->idLoaiTin)->sortByDesc('updated_at') as $select )
                            <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">  
                                    {{ $select->Ten }}   
                            </a>
                            @endforeach()
                            <h3 class="how1-child2 m-t-14 m-b-10">
                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                    {{ $tintuc->TieuDe }}
                                </a>
                            </h3>
                            <span class="how1-child2">
                                <span class="f1-s-3 cl11">
                                    {{ $tintuc->updated_at }}
                                </span>
                            </span>
                        </div>
                    </div>
                    @endforeach()
                </div>

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        <div class="col-12 p-rl-1 p-b-2">
                            @foreach( $tintuc2->take(1) as $tintuc)
                            <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }});">
                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child1 trans-03"></a>
                                <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                    @foreach( $loaitin->where('id',$tintuc->idLoaiTin)->sortByDesc('updated_at') as $select )
                                    <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        {{ $select->Ten }}   
                                    </a>
                                    @endforeach()
                                    <h3 class="how1-child2 m-t-14">
                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                            {{ $tintuc->TieuDe }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                            @endforeach()
                        </div>

                        @foreach( $tintuc3->take(2) as $tintuc)
                        <div class="col-sm-6 p-rl-1 p-b-2">
                            <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }});">
                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child1 trans-03"></a>
                                <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                    @foreach( $loaitin->where('id',$tintuc->idLoaiTin)->sortByDesc('updated_at') as $select )
                                    <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                        {{ $select->Ten }} 
                                    </a>
                                    @endforeach()
                                    <h3 class="how1-child2 m-t-14">
                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                            {{ $tintuc->TieuDe }}
                                        </a>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach()     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg0 p-t-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="p-b-20">
                        @foreach( $data['theloai'] as $theloai )
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <h3 class="f1-m-2 cl12 tab01-title">
                                    {{ $theloai->Ten }}
                                </h3>
                                <ul class="nav nav-tabs" role="tablist">  
                                </ul>
                                <a href="category-01.html" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
                                    View all
                                    <i class="fs-12 m-l-5 fa fa-caret-right"></i>
                                </a>
                            </div>
                            <div class="tab-content p-t-35">
                                <div class="tab-pane fade show active" id="{{ $loop->index }}" role="tabpanel">
                                    <div class="row">
                                        @foreach($theloai->TinTuc->where('NoiBat',4)->sortByDesc('created_at')->take(1) as $tintuc)
                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                            <div class="m-b-30">
                                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="wrap-pic-w hov1 trans-03">
                                                    <img src="{{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }}" alt="IMG">
                                                </a>
                                                <div class="p-t-20">
                                                    <h5 class="p-b-5">
                                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                            {{ $tintuc->TieuDe }}
                                                        </a>
                                                    </h5>
                                                    <p class="p-b-5">
                                                        {{ $tintuc->TomTat }}
                                                    </p>
                                                    <span class="cl8">
                                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                            {{ $theloai->Ten }}
                                                        </a>
                                                        <span class="f1-s-3 m-rl-3">
                                                            -
                                                        </span>
                                                        <span class="f1-s-3">
                                                            {{ $theloai->updated_at }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach()

                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                            @foreach($theloai->TinTuc->where('NoiBat',5)->sortByDesc('created_at')->take(3) as $tintuc)
                                            <div class="flex-wr-sb-s m-b-30">
                                                <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                    <img src="{{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }}" alt="IMG">
                                                </a>
                                                <div class="size-w-2">
                                                    <h5 class="p-b-5">
                                                        <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                            {{ $tintuc->TieuDe }}
                                                        </a>
                                                    </h5>
                                                    <span class="cl8">
                                                        <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                            {{ $theloai->Ten }}
                                                        </a>
                                                        <span class="f1-s-3 m-rl-3">
                                                            -
                                                        </span>
                                                        <span class="f1-s-3">
                                                            {{ $theloai->updated_at }}
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                            @endforeach()
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach()
                    </div>
                </div>

                <div class="col-md-10 col-lg-4">
                    <div class="p-l-10 p-rl-0-sr991 p-b-20">
                        <div>
                            <div class="how2 how2-cl4 flex-s-c">
                                <h3 class="f1-m-2 cl3 tab01-title">
                                    Tin tức phổ biến
                                </h3>
                            </div>

                            <ul class="p-t-35">
                                @foreach( $tintuc4->take(10) as $tintuc)
                                <li class="flex-wr-sb-s p-b-22">
                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                        {{ $loop->index }}
                                    </div>

                                    <a href="{{route('chitiet',['id'=>$tintuc->id])}}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                        {{ $tintuc->TieuDe }}
                                    </a>
                                </li>
                                @endforeach()
                            </ul>
                        </div>
                        <div class="p-l-10 p-rl-0-sr991 p-b-20">
                            <div>
                                <div class="how2 how2-cl4 flex-s-c">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Map
                                    </h3>
                                </div>
                                <div>
                                    <iframe src="https://embed.waze.com/iframe?zoom=12&lat=45.6906304&lon=-120.810983"
                                        width="100%" height="400"></iframe>
                                </div>
                            </div>
                            <div class="p-b-55">
                                <div class="how2 how2-cl4 flex-s-c m-b-30">
                                    <h3 class="f1-m-2 cl3 tab01-title">
                                        Tags
                                    </h3>
                                </div>

                                <div class="flex-wr-s-s m-rl--5">
                                    @foreach( $data['theloai'] as $theloai )
                                    <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                        {{ $theloai->Ten }}
                                    </a>
                                    @endforeach()
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection