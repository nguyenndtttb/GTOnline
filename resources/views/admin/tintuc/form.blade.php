<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="form-group">
            <label for="idloaitin">Loại tin</label>
            <select name="idloaitin" id="idloaitin" class="form-control">
                @foreach($loaitin as $lt)
                    <option value="{{$lt->id}}"> 
                        {{$lt->Ten}}
                    </option>
                @endforeach()
            </select>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <div class="form-group">
            <label for="noibat">Nổi bật</label>
            <select name="noibat" id="noibat" class="form-control">
                <option value="0">
                    <p>0</p>
                </option>
                <option value="1">
                    <p>1</p>
                </option>
                <option value="2">
                    <p>2</p>
                </option>
                <option value="3">
                    <p>3</p>
                </option>
                <option value="4">
                    <p>4</p>
                </option>
                <option value="5">
                    <p>5</p>
                </option>
            </select>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="tieude">Tiêu đề</label>
    <textarea name="tieude" id="tieude" cols="20" rows="2" class="form-control"></textarea>
</div>   
<div class="form-group">
    <label for="tieudekhongdau">Tiêu đề không dấu</label>
    <textarea name="tieudekhongdau" id="tieudekhongdau" cols="20" rows="2" class="form-control"></textarea>
</div>     
<div class="form-group">
    <label for="tomtat">Tóm tắt</label>
    <textarea name="tomtat" id="tomtat" cols="20" rows="5" class="form-control"></textarea>
</div>
<div class="form-group">
    <label for="noidung">Nội dung</label>
    <textarea name="noidung" id="noidung" cols="20" rows="20" class="form-control"></textarea>
</div>

        	