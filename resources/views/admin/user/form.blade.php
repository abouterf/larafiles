@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-md-6">
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="name">نام کامل :</label>
                <input type="text" class="form-control" name="name" id="name"
                       value="{{old('name',isset($user_item)?$user_item->name:'')}}">
            </div>
            <div class="form-group">
                <label for="email">ایمیل :</label>
                <input type="email" class="form-control" name="email" id="email"
                       value="{{old('email',isset($user_item)?$user_item->email:'')}}">
            </div>
            <div class="form-group">
                <label for="password">پسورد :</label>
                <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="form-group">
                <label for="role">نقش کاربری :</label>
                <select class="form-control" name="role" id="role">
                    <option value="1"{{isset($user_item) && $user_item->role == 1 ? 'selected':''}}>کاربر عادی</option>
                    <option value="2"{{isset($user_item) && $user_item->role == 2 ? 'selected':''}}>اپراتور</option>
                    <option value="3"{{isset($user_item) && $user_item->role == 3 ? 'selected':''}}>مدیریت</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wallet">موجودی کیف پول</label>
                <input type="text" class="form-control" name="wallet" id="wallet"
                       value="{{old('wallet',isset($user_item)?$user_item->wallet:0)}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success" name="submit_save_user">ذخیره اطلاعات</button>
            </div>
        </form>

    </div>
</div>