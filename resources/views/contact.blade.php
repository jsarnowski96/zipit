@include('layouts.app')
@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formularz kontaktowy') }} </div>

                <div class="card-body">
                    <form method="POST" id="contact_form" action=""{{ route('contact_form_messages')}}>
                        @csrf
                        <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Imię</label>
                            <input type="name" class="form-control" id="name" required>
                            @if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
				            @endif
                        </div>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Adres e-mail</label>
                            <input type="email" class="form-control" id="email" required>
                            @if ($errors->has('email'))
								<span class="help-block">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							 @endif
                          </div>
                        <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                          <label for="subject">Temat zgłoszenia</label>
                          <select class="form-control" id="subject" required>
                            <option>Problem techniczny</option>
                            <option>Pytanie dotyczące oferty</option>
                            <option>Płatności i rozliczenia</option>
                            <option>Reklamacja</option>
                          </select>
                            @if ($errors->has('subject'))
								<span class="help-block">
									<strong>{{ $errors->first('subject') }}</strong>
								</span>
						    @endif
                        </div>
                        <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                          <label for="message">Treść zgłoszenia</label>
                          <textarea class="form-control" id="message" rows="3"></textarea>
                            @if ($errors->has('message'))
								<span class="help-block">
									<strong>{{ $errors->first('message') }}</strong>
								</span>
							@endif
                        </div>
                        <button type="submit" class="btn btn-primary">Wyślij zgłoszenie</button>
                        <button type="button" class="btn btn-success" onclick="$('#contact_form')[0].reset();">Wyczyść</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@yield('content')
@include('footer')