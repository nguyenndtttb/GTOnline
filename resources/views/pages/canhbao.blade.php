@extends('layouts.frontmaster')

@section('content')
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="{{ route('index') }}" class="breadcrumb-item f1-s-3 cl9">Home</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					Cảnh báo
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
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			Cảnh báo giao thông
		</h2>
	</div>
	<section class="bg0 p-b-55">
		<div class="container">
			<div class="row justify-content-center">		
				<div class="col-md-10 col-lg-8 p-b-80">
					@foreach($canhbao as $cb)
					<div class="p-r-10 p-r-0-sr991">
						<div class="m-t--40 p-b-40">
							<div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">
								<a href="{{route('chitietcanhbao',['id'=>$cb->id])}}" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">
									<img src="{{ URL::to('/') }}/storage/photos/canhbao/{{ $cb->hinhanh }}" alt="IMG">
								</a>
								<div class="size-w-9 w-full-sr575 m-b-25">
									<h5 class="p-b-12">
										<a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">
											{{ $cb->tenduong }}
										</a>
									</h5>
									<div class="cl8 p-b-18">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											by Admin
										</a>
										<span class="f1-s-3 m-rl-3">
											-
										</span>
										<span class="f1-s-3">
											{{ $cb->updated_at }}
										</span>
									</div>
									<p class="f1-s-1 cl6 p-b-24">
										{{ $cb->tieude }}
									</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach()
				</div>
				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Map
								</h3>
							</div>
							<div class="pt-4">
                                <iframe src="https://embed.waze.com/iframe?zoom=12&lat=45.6906304&lon=-120.810983"
                                        width="100%" height="400"></iframe>
                            </div>
						</div>
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tin mới
								</h3>
							</div>
							<ul class="p-t-35">
								@foreach( $canhbaomoi as $cbm )
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										{{ $loop->index }}
									</div>
									<a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										{{ $cbm->tenduong}}
									</a>
								</li>
								@endforeach()
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection()