@extends('layouts.master')

@section('content')
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Cảnh báo</h3>
			</div>
			<div class="box-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm cảnh báo</button>
			</div>
			<div class="box-body table-responsive pt-2">
				<table class="table ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Hình ảnh</th>
							<th>Phương tiện</th>
							<th>Tiêu đề</th>
							<th>Nội dung</th>
							<th>Mức Phạt</th>
							<th>Nghị định</th>
							<th>Updated_at</th>
							<th>Modify</th>
						</tr>						
					</thead>
					<tbody>
						@foreach($luat as $l)
							<tr>
								<td>{{ $l->id }}</td>
								<td><img style="height: 50px; width: 50px;" src="{{ URL::to('/') }}/storage/photos/luat/{{ $l->HinhAnh }}" alt="..." class="img-fluid" /></td>
								<td>{{ $l->PhuongTien }}</td>
								<td>{{ Str::limit($l->TieuDe,100) }}</td>
								<td>{{ Str::limit($l->NoiDung,100) }}</td>
								<td>{{ $l->MucPhat }}</td>
								<td>{{ $l->NghiDinh }}</td>
								<td>{{ $l->updated_at }}</td>
								<td>
									
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $luat->links() }}				
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog modal-lg" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Thêm luật</h4>
	            </div>
	            <form action="{{route('luat.store')}}" method="post" enctype="multipart/form-data">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    @include('admin.luat.form')
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
	            <form action="{{route('luat.update')}}" method="post" enctype="multipart/form-data">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <input type="hidden" name="id" id="id" value=""> 
	                    @include('admin.luat.form')
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
	                <h4 class="modal-title text-center" id="myModalLabel">Xóa luật?</h4>
	            </div>
	            <form action="{{route('luat.destroy')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <p class="text-center">
	                        Bạn muốn xóa luật này?
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
	<script src="{{ asset('js/luat.js') }}"></script>
@endsection
	
