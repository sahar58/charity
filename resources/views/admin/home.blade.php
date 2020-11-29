


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hello in Admin Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button class="mb-1 btn btn-info "><a class ="text-white" href="{{route('createCharity')}}">إضافة جمعية</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
