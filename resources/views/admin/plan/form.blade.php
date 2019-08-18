@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-md-6">
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="plan_name">نام فایل :</label>
                <input type="text" class="form-control" name="plan_name" id="plan_name"
                       value="{{old('plan_title',isset($plan_item)?$plan_item->plan_title:'')}}">
            </div>
            <div class="form-group">
                <label for="plan_limit_download_count">محدودیت دانلود روزانه :</label>
                <input type="text" class="form-control" name="plan_limit_download_count" id="plan_limit_download_count"
                       value="{{old('plan_limit_download_count',isset($plan_item)?$plan_item->plan_limit_download_count:'')}}">
            </div>
            <div class="form-group">
                <label for="plan_price">قیمت :</label>
                <input type="text" class="form-control" name="plan_price" id="plan_price"
                       value="{{old('plan_price',isset($plan_item)?$plan_item->plan_price:'')}}">
            </div>
            <div class="form-group">
                <label for="plan_days_count">تعداد روز دانلود :</label>
                <input type="text" class="form-control" name="plan_days_count" id="plan_days_count"
                       value="{{old('plan_days_count',isset($plan_item)?$plan_item->plan_days_count:'')}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit_save_user">ذخیره اطلاعات</button>
            </div>
        </form>

    </div>
</div>