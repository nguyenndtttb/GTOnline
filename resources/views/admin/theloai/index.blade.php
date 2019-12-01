@extends('layouts.master')

@section('content')
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Thể loại</h3>
			</div>
			<div class="box-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm thể loại</button>
			</div>
			<div class="box-body table-responsive pt-2">
				<table class="table ">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên</th>
							<th>Tên không dấu</th>
							<th>Updated_at</th>
							<th>Modify</th>
						</tr>						
					</thead>
					<tbody>
						@foreach($theloai as $tl)
							<tr>
								<td>{{$tl->id}}</td>
								<td>{{$tl->Ten}}</td>
								<td>{{$tl->TenKhongDau}}</td>
								<td>{{$tl->updated_at}}</td>
								<td>
									<button class="btn btn-info" data-dten="{{$tl->Ten}}" data-dtenkhongdau="{{$tl->TenKhongDau}}" data-did="{{$tl->id}}" data-toggle="modal" data-target="#edit">Sửa</button>
									<button class="btn btn-danger" data-did="{{$tl->id}}" data-toggle="modal" data-target="#delete">Xóa</button>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $theloai->links() }}				
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Thêm user</h4>
	            </div>
	            <form action="{{route('theloai.store')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    @include('admin.theloai.form')
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
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Sửa thông tin user</h4>
	            </div>
	            <form action="{{route('theloai.update')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <input type="hidden" name="id" id="id" value=""> 
	                    @include('admin.theloai.form')
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
	                <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
	            </div>
	            <form action="{{route('theloai.destroy')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <p class="text-center">
	                        Bạn muốn xóa user này?
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
	<script src="{{ asset('js/theloai.js') }}"></script>
@endsection
	
