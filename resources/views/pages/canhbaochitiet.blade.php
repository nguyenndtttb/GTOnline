@extends('layouts.frontmaster')

@section('content')
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="{{ route('canhbao') }}" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>
				<a href="{{route('chitietcanhbao',['id'=>$canhbao->id])}}" class="breadcrumb-item f1-s-3 cl9">
					Chi tiết cảnh báo
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $canhbao->tenduong }}
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
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<div class="p-b-70">
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								{{ $canhbao->tenduong }}
							</a>
							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								{{ $canhbao->tieude }}
							</h3>
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">by Admin</a>
									<span class="m-rl-3">-</span>
									<span>{{ $canhbao->updated_at }}</span>
								</span>
								<p class="font-weight-bold pt-3">
								{{ $canhbao->diadiem }}
								</p>
							</div>
							<div class="wrap-pic-max-w p-b-30">
								<img src="{{ URL::to('/') }}/storage/photos/canhbao/{{ $canhbao->hinhanh }}" alt="IMG">
							</div>
							<p class="f1-s-11 cl6 p-b-25">
								{{ $canhbao->tinhtrang }}
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Cảnh báo mới
								</h3>
							</div>
							<ul class="p-t-35">
								@foreach( $canhbaomoi as $cbm )
								<li class="flex-wr-sb-s p-b-30">
									<a href="{{route('chitietcanhbao',['id'=>$cbm->id])}}" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{ URL::to('/') }}/storage/photos/canhbao/{{ $cbm->hinhanh }}" alt="IMG">
									</a>
									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="{{route('chitietcanhbao',['id'=>$cbm->id])}}" class="f1-s-5 cl3 hov-cl10 trans-03">
												{{ $cbm->tieude }}
											</a>
										</h6>
										<span class="cl8 txt-center p-b-24">
											<span class="f1-s-3">
												{{ $cbm->updated_at }}
											</span>
										</span>
									</div>
								</li>
								@endforeach()
							</ul>
						</div>
						<div>
							<div class="how2 how2-cl4 flex-s-c m-b-30">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tags
								</h3>
							</div>
							<div class="flex-wr-s-s m-rl--5">
								@foreach( $canhbaomoi as $cbm1 )
								<a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
									{{ $cbm1->tenduong }}
								</a>
								@endforeach()
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection()
	