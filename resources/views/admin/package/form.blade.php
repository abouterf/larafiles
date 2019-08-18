@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-md-6">
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="package_name">عنوان پکیج :</label>
                <input type="text" class="form-control" name="package_name" id="package_name"
                       value="{{old('package_title',isset($package_item)?$package_item->package_title:'')}}">
            </div>
            <div class="form-group">
                <label for="package_price">قیمت پکیج :</label>
                <input type="text" class="form-control" name="package_price" id="package_price"
                       value="{{old('package_price',isset($package_item)?$package_item->package_price:'')}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit_save_user">ذخیره اطلاعات</button>
            </div>
        </form>

    </div>
</div>