@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="pt-4 bg"> </div>
		<div class="container-login100" style="padding-bottom: 20px">
			<div class="wrap-login100" style="padding-bottom: 0px">
				<div class="login100-form-title" style="background-image: url('images/img1.png')">
					<span class="login100-form-title-1">
					Inscription
					</span>
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" >
                        @csrf



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter the name" required autofocus>

                              @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Laste Name') }}</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Enter the Last name" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Enter password again" required>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="date_nai" class="col-md-4 col-form-label text-md-right">{{ __('Laste Name') }}</label>

                                <div class="col-md-6">
                                    <input id="date_nai" type="date" class="form-control{{ $errors->has('date_nai') ? ' is-invalid' : '' }}" name="date_nai" value="{{ old('date_nai') }}"required autofocus>

                                    @if ($errors->has('date_nai'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('date_nai') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group row">
                                    <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Numéro de téléphone') }}</label>

                                    <div class="col-md-6">
                                        <input id="numero" type="tel" class="form-control{{ $errors->has('numero') ? ' is-invalid' : '' }}" name="numero" value="{{ old('numero') }}" placeholder="Enter the number" required autocus>

                                        @if ($errors->has('numero'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('numero') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                        </div>
                        <div class="form-group row">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                                <div class="col-md-6">
                            <select id="sexe"  class="form-control{{ $errors->has('sexe') ? ' is-invalid' : '' }}" name="sexe" value="{{ old('sexe') }}"  required autofocus >

                                    <option>Homme</option>
                                    <option>Femme</option>

                             </select>
                             @if ($errors->has('edudetails'))
                             <span class="help-block">
                             <strong>{{ $errors->first('edudetails') }}</strong>
                             </span>
                             @endif
                     </div>
                    </div>


                    <div class="form-group row">
                                <label for="piece_id" class="col-md-4 col-form-label text-md-right">{{ __('Piece D\'itentié') }}</label>

                                <div class="col-md-6">
                                    <input id="piece_id" type="text" class="form-control{{ $errors->has('piece_id') ? ' is-invalid' : '' }}" name="piece_id" value="{{ old('piece_id') }}" placeholder="Enter the card nbr" required autofocus>

                                    @if ($errors->has('piece_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('piece_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                    </div>
                    <div class="form-group row">
                            <label for="numero" class="col-md-4 col-form-label text-md-right">{{ __('Type de utilisateur') }}</label>

                            <div class="col-md-6">
                        <select id="type"  class="form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}"  required autofocus >

                                <option>Normale</option>
                                <option>Premium</option>

                         </select>
                         @if ($errors->has('edudetails'))
                         <span class="help-block">
                         <strong>{{ $errors->first('edudetails') }}</strong>
                         </span>
                         @endif
                 </div>
                </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
