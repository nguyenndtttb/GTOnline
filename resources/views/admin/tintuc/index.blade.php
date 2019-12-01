@extends('layouts.master')

@section('content')
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Cảnh báo</h3>
			</div>
			<div class="box-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm tin tức</button>
			</div>
			<div class="box-body table-responsive pt-2">
				<table class="table ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tiêu đề</th>
							<th>Tóm tắt</th>
							<th>Nổi bật</th>
							<th>Số lượt xem</th>
							<th>Updated_at</th>
							<th>Modify</th>
						</tr>						
					</thead>
					<tbody>
						@foreach($tintuc as $tt)
							<tr>
								<td>{{$tt->id}}</td>
								<td>{{Str::limit($tt->TieuDe,20)}}</td>
								<td>{{Str::limit($tt->TomTat,30)}}</td>
								<td>{{$tt->NoiBat}}</td>
								<td>{{$tt->SoLuotXem}}</td>
								<td>{{$tt->updated_at}}</td>
								<td>
									<button class="btn btn-info" data-dtieude="{{$tt->TieuDe}}" data-dtdkd="{{$tt->TieuDeKhongDau}}" data-did="{{$tt->id}}" data-dtomtat="{{$tt->TomTat}}" data-dnoidung="{{$tt->NoiDung}}" data-dhinh="{{$tt->Hinh}}" data-toggle="modal" data-target="#edit">Sửa</button>
									<button class="btn btn-danger" data-did="{{$tt->id}}" data-toggle="modal" data-target="#delete">Xóa</button>
									<a class="btn btn-warning" href="{{route('tintuc.chitiet', ['id' => $tt->id])}}">Xem</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $tintuc->links() }}				
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Thêm tin tức</h4>
	            </div>
	            <form action="{{route('tintuc.store')}}" method="post" enctype="multipart/form-data">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    @include('admin.tintuc.form')
	                    <label for="imageInput">Hình ảnh</label>
						<input data-preview="#preview" name="img" type="file" id="imageInput">
	                </div>
	                <div class="modal-footer">
	                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                    <button type="submit" class="btn btn-primary">Save</button>
	                </div>
	            </form>
	        </div>
	    </div>
	</div>
	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	<script src="{{ asset('js/tintuc.js') }}"></script>
@endsection
	
