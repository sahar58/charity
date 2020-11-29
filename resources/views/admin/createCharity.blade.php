
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello in Admin Page</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <ul class="mt-5 pt-1">
                    @foreach($errors->all() as $err)
                        <li>{{$err}}</li>
                    @endforeach
                    </ul>
                    <form class="form mt-5 pt-1" action="{{route('storeCharity')}}" method="post">
                    @csrf <!--responsible of security -->
                    <div class="form-group">
                        <label for="my-input">رقم الجمعية</label>
                        <input id="my-input" class="form-control" name="charity_number">
                    </div
                    <div class="form-group">
                        <label for="my-input">اسم الجمعية</label>
                        <input id="my-input" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="my-input">الايميل</label>
                        <input id="my-input" class="form-control" type="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="my-input">الرقم السري</label>
                        <input id="my-input" class="form-control" type="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="my-input">العنوان</label>
                        <input id="my-input" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="my-input">رقم التليفون</label>
                        <input id="my-input" class="form-control" name="phone">
                    </div>
                    <input type="submit" name="submit"><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
