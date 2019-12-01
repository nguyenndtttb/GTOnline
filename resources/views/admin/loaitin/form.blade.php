<div class="form-group">
    <label for="theloai">Thể loại</label>
    <select name="idtheloai" id="idtheloai" class="form-control">
    	@foreach($theloai as $tl)
    		<option value="{{$tl->id}}"> 
    			{{$tl->Ten}}
    		</option>
    	@endforeach()
    </select>
</div>
<div class="form-group">
    <label for="ten">Tên</label>
    <input type="text" class="form-control" name="ten" id="ten">
</div>
<div class="form-group">
    <label for="tenkhongdau">Tên Không dấu</label>
    <input type="text" class="form-control" name="tenkhongdau" id="tenkhongdau">
</div>		        	