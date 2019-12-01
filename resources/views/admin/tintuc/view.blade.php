@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="card">
		    <div class="card-body">
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-12 font-weight-bold">
		    			<p>ID</p>
		    		</div>
		    		<div class="col-md-2 col-sm-2 col-xs-2">
		    			<p class="card-text">{{$tintuc->id}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-12 font-weight-bold">
		    			<p>Tiêu đề</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->TieuDe}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Tóm tắt</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->TomTat}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Nội dung</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->NoiDung}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Hình ảnh</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<img src="{{ URL::to('/') }}/storage/photos/tintuc/{{$tintuc->Hinh}}" alt="..." class="img-fluid" />
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Nổi bật</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->NoiBat}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Số lượt xem</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->SoLuotXem}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>ID Loại tin</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->idLoaiTin}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    			<p>Updated_at</p>
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<p class="card-text">{{$tintuc->updated_at}}</p>
		    		</div>		
		    	</div>
		    	<hr>
		    	<div class="row">
		    		<div class="col-md-2 col-sm-2 col-xs-2 font-weight-bold">
		    		</div>
		    		<div class="col-md-10 col-sm-10 col-xs-10">
		    			<div class="container">
					    	<div class="row">
					    		<div class="col-md-5 col-sm-5 col-xs-5">
					    			<button class="btn btn-info btn-block" data-dtenduong="{{$tintuc->tenduong}}" data-dkinhdo="{{$tintuc->kinhdo}}" data-did="{{$tintuc->id}}" data-dvido="{{$tintuc->vido}}" data-dtieude="{{$tintuc->tieude}}" data-dtinhtrang="{{$tintuc->tinhtrang}}" data-dnguontin="{{$tintuc->nguontin}}" data-ddiadiem="{{$tintuc->diadiem}}" data-toggle="modal" data-target="#edit">Sửa</button>
					    		</div>
					    		<div class="col-md-5 col-sm-5 col-xs-5">
					    			<button class="btn btn-danger btn-block" data-did="{{$tintuc->id}}" data-toggle="modal" data-target="#delete">Xóa</button>	
					    		</div>
					    	</div>
					    </div>
		    		</div>		
		    	</div>
		    	<hr>
		    </div>		    			       		        
		</div>		
	</div>
	<!-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Sửa thông tin cảnh báo</h4>
	            </div>
	            <form action="{{route('tintuc.update')}}" method="post" enctype="multipart/form-data">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <input type="hidden" name="id" id="id" value=""> 
	                    @include('admin.tintuc.form')
	                    <label for="imageInput">Hình ảnh</label>
						<input data-preview="#preview" name="img" type="file" id="imageInput">
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	                    <button type="submit" class="btn btn-primary">Lưu</button>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
	<div class="modal modal-danger fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title text-center" id="myModalLabel">Xóa cảnh báo giao thông</h4>
	            </div>
	            <form action="{{route('tintuc.destroy')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <p class="text-center">
	                        Bạn muốn xóa cảnh báo này?
	                    </p>
	                    <input type="hidden" name="id" id="id" value="">

	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-success" data-dismiss="modal">Thoát</button>
	                    <button type="submit" class="btn btn-warning">Xóa</button>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
	<script src="{{ asset('js/tintuc/script.js') }}"></script> -->
@endsection