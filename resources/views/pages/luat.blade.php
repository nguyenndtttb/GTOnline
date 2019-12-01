@extends('layouts.frontmaster')

@section('content')
<div class="container">
	<div class="headline bg0 flex-wr-sb-c p-rl-20 p-tb-8">
		<div class="f2-s-1 p-r-30 m-tb-6">
			<a href="" class="breadcrumb-item f1-s-3 cl9">
					Home 
			</a>
			<a href="" class="breadcrumb-item f1-s-3 cl9">
					Tra cứu luật
			</a>
			<span class="breadcrumb-item f1-s-3 cl9">
					
			</span>
		</div>
	</div>	
	<div class="card">
	  		<div class="card-body">
	  			<div class="card-body">
	  				<form action="{{route('luatgiaothong')}}" method="post" enctype="multipart/form-data" class="form-inline">
		                {{csrf_field()}}
		                <div class="row">
		                	<div class="col">
		                		<input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm thông tin bạn cần...">
		                	</div>
		                </div>
		                <div class="col">
		                	<button type="submit" class="btn btn-primary">Tìm kiếm</button>
		                </div>     
	            	</form>
	  			</div>
	  		</div>
  			<div class="card">
		  		<div class="card-body">
		  			<div class="card-body">
		  				<h5 class="card-title">Thông tin tìm kiếm:{{ count($luat) }}</h5>
				    	<table class="table table-hover">
						    <thead>
						        <tr>
						        	<th>id</th>
						            <th scope="col">TieuDe</th>
						        </tr>
						    </thead>
						    <tbody>
						    	@foreach($luat as $l)
							        <tr>
							            <th scope="row">{!! $l->id !!}</th>
							            <th><a href="" class="dis-block text-dark">{!! $l->TieuDe !!}</a></th>
							        </tr>
						        @endforeach()
						    </tbody>
						</table>
					</div>
				</div>
			</div>
  		</div>
	</div>
</div>
@endsection