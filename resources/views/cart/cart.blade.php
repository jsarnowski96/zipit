@include('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Twój koszyk') }}</div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@yield('content')
@include('footer')