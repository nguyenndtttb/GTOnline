@extends('layouts.master')

@section('content')
	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">loaitin</h3>
			</div>
			<div class="box-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Thêm loaitin</button>
			</div>
			<div class="box-body table-responsive pt-2">
				<table class="table ">
					<thead>
						<tr>
							<th>ID</th>
							<th>ID Thể Loại</th>
							<th>Tên</th>
							<th>Tên Không Dấu</th>
							<th>Updated_at</th>
							<th>Modify</th>
						</tr>						
					</thead>
					<tbody>
						@foreach($loaitin as $lt)
							<tr>
								<td>{{$lt->id}}</td>
								<td>{{$lt->idTheLoai}}</td>
								<td>{{$lt->Ten}}</td>
								<td>{{$lt->TenKhongDau}}</td>
								<td>{{$lt->updated_at}}</td>
								<td>
									<button class="btn btn-info" data-dten="{{$lt->Ten}}" data-dtenkhongdau="{{$lt->TenKhongDau}}" data-did="{{$lt->id}}" data-toggle="modal" data-target="#edit">Sửa</button>
									<button class="btn btn-danger" data-did="{{$lt->id}}" data-toggle="modal" data-target="#delete">Xóa</button>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{{ $loaitin->links() }}				
			</div>
		</div>
	</div>
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	    <div class="modal-dialog" role="document">
	        <div class="modal-content">
	            <div class="modal-header">
	                <h4 class="modal-title" id="myModalLabel">Thêm loại</h4>
	            </div>
	            <form action="{{route('loaitin.store')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    @include('admin.loaitin.form')
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
	                <h4 class="modal-title" id="myModalLabel">Sửa thông tin loại tin này?</h4>
	            </div>
	            <form action="{{route('loaitin.update')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <input type="hidden" name="id" id="id" value=""> 
	                    @include('admin.loaitin.form')
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
	            <form action="{{route('loaitin.destroy')}}" method="post">
	                {{csrf_field()}}
	                <div class="modal-body">
	                    <p class="text-center">
	                        Bạn muốn xóa loại tin này?
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
	<script src="{{ asset('js/loaitin.js') }}"></script>
@endsection
	
