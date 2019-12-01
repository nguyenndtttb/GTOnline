@extends('layouts.frontmaster')

@section('content')
	<div class="container">
		<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.html" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>
				<a href="blog-list-01.html" class="breadcrumb-item f1-s-3 cl9">
					Chi tiết 
				</a>
				<span class="breadcrumb-item f1-s-3 cl9">
					{{ $tintuc->TieuDe }}
				</span>
			</div>
			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>->
	<section class="bg0 p-b-140 p-t-10">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-30">
					<div class="p-r-10 p-r-0-sr991">
						<div class="p-b-70">
							@foreach( $loaitin->where('id',$tintuc->idLoaiTin)->sortByDesc('updated_at') as $select )
							<a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
								{{ $select->Ten }}
							</a>
							@endforeach()
							<h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
								{{ $tintuc->TieuDe }}
							</h3>
							<div class="flex-wr-s-s p-b-40">
								<span class="f1-s-3 cl8 m-r-15">
									<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">by Nguyen Duc Nguyen</a>
									<span class="m-rl-3">-</span>
									<span>{{ $data['dt']->toDayDateTimeString() }}</span>
								</span>
								<p class="font-weight-bold pt-3">
								{{ $tintuc->TomTat }}
							</p>
							</div>
							<div class="wrap-pic-max-w p-b-30">
								<img src="{{ URL::to('/') }}/storage/photos/tintuc/{{ $tintuc->Hinh }}" alt="IMG">
							</div>
							<p class="f1-s-11 cl6 p-b-25">
								{{ $tintuc->NoiDung }}
							</p>
						</div>
						<div>
							<h4 class="f1-l-4 cl3 p-b-12">
								Bình luận
							</h4>

							<p class="f1-s-13 cl8 p-b-40">
								Đăng nhập để bình luận *
							</p>
							@if(Auth::user())
								<div class="well">
									<h4>Viết bình luận ...<span class="glyphicon glyphicon-pencil"></span></h4>
									@if(count($errors) > 0)
										@foreach($errors->all() as $err)
										<div class="alert alert-danger" style="margin-top: 1em;">
											<strong>{{ $err }}</strong><br/>
										</div>
										@endforeach
									@endif									
									@if(session('message'))
									<div class="alert alert-success">
										<strong>{{ session('message') }}</strong>
									</div>
									@endif
									<form role="form" method="POST" action="{{route('binhluan',['id'=>$tintuc->id])}}">
										{{ csrf_field() }}
										<div class="form-group">
											<textarea name="content" class="form-control" rows="3"></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Gửi</button>
									</form>
								</div>
							@endif
							<hr>
							@foreach($tintuc->Comment as $binhluan)
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="http://placehold.it/50x50" alt="">
									</a>
									<div class="media-body pl-2">
										<h4 class="media-heading">
											{{ $binhluan->User->name }}&nbsp 
											<small>{{ $binhluan->created_at }}</small>
										</h4>
										{{ $binhluan->NoiDung }}
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-10 col-lg-4 p-b-30">
					<div class="p-l-10 p-rl-0-sr991 p-t-70">						
						<div class="p-b-30">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Tin tức liên quan
								</h3>
							</div>
							<ul class="p-t-35">
								@foreach($tinlienquan as $tlq)
								<li class="flex-wr-sb-s p-b-30">
									<a href="{{route('chitiet',['id'=>$tlq->id])}}" class="size-w-10 wrap-pic-w hov1 trans-03">
										<img src="{{ URL::to('/') }}/storage/photos/tintuc/{{ $tlq->Hinh }}" alt="IMG">
									</a>
									<div class="size-w-11">
										<h6 class="p-b-4">
											<a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">
												{{ $tlq->TieuDe }}
											</a>
										</h6>
										<span class="cl8 txt-center p-b-24">
											<span class="f1-s-3">
												{{ $tlq->updated_at }}
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
	</section>
@endsection()
	