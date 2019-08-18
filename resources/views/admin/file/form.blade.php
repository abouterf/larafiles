@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-md-6">
        <form action="" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="file_name">نام فایل :</label>
                <input type="text" class="form-control" name="file_name" id="file_name"
                       value="{{old('file_name',isset($file_item)?$file_item->file_name:'')}}">
            </div>
            <div class="form-group">
                <label for="file_description">توضیحات فایل :</label>
                <textarea name="file_description" class="form-control" id="file_description" cols="30"
                          rows="20">{{old('file_description',isset($file_item)?$file_item->file_description:'')}}</textarea>
            </div>
            <div class="form-group">
                <label for="file_item">نام فایل :</label>
                <input type="file"name="file_item" id="file_item"
                       value="{{old('file_name',isset($file_item)?$file_item->file_name:'')}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit_save_user">ذخیره اطلاعات</button>
            </div>
        </form>

    </div>
</div>