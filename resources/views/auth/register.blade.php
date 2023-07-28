@extends('layouts.app', [
'class' => 'register-page',
'backgroundImagePath' => 'img/bg/atividade2.jpg'
])

@section('content')
@include('sweetalert::alert')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 ml-auto">
                <div class="info-area info-horizontal mt-5">
                    <div class="icon icon-primary">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">{{ __('Seja membro') }}</h5>
                        <p class="description">
                            {{ __('Se é um vitilindo, saiba que não estás sozinho, junta-se a família') }}
                        </p>
                    </div>
                </div>
                <div class="info-area info-horizontal">
                    <div class="icon icon-primary">
                        <i class="fa fa-handshake-o"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">{{ __('Sinta-se seguro') }}</h5>
                        <p class="description">
                            {{ __('O preconceito é real, mas juntos somos mais fortes.') }}
                        </p>
                    </div>
                </div>
                <div class="info-area info-horizontal">
                    <div class="icon icon-info">
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">{{ __('Cresça connosco') }}</h5>
                        <p class="description">
                            {{ __('Você nasceu para vencer') }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6  mr-auto">
                <div class="card card-signup text-center">
                    <div class="card-header ">
                    <a href="{{ route('site') }}"><img class="header" src="{{ asset('paper') }}/img/logo.png"></a>
                        <!-- <h4 class="card-title">{{ __('Torne-se membro') }}</h4> -->
                    </div>
                    <div class="card-body ">
                        <form class="form" method="POST" action="{{ route('associate.salvar') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input name="name" type="text" class="form-control" placeholder="Nome" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-email-85"></i>
                                            </span>
                                        </div>
                                        <input name="email" type="email" class="form-control" placeholder="Email" required value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('n_bi') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input name="n_bi" type="text" class="form-control" placeholder="Bilhete N.º" maxlength="14" required>
                                        @if ($errors->has('n_bi'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('n_bi') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('adress') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-pin-3"></i>
                                            </span>
                                        </div>
                                        <input name="adress" type="text" class="form-control" placeholder="Morada" value="{{ old('adress') }}" required autofocus>
                                        @if ($errors->has('adress'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('adress') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-mobile"></i>
                                            </span>
                                        </div>
                                        
                                        <input  type="text" class="form-control " value="+244" size="4" disabled>
                                        <input name="phone" type="tel" class="w-50 form-control" placeholder="9xxxxxxxx" pattern="9[0-9]{8}" required value="{{ old('phone') }}">

                                        <!-- <input type="tel" pattern="244-[0-9]{9}" placeholder="244-xxxxxxxxx"> -->
                                        @if ($errors->has('phone'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input name="areas_afectadas" type="text" class="form-control" placeholder="Areas afectadas pelo vitíligo" required>
                                        @if ($errors->has('areas_afectadas'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('areas_afectadas') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 text-start">
                                    <label for="data_nascimento">Data de nascimento</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input id="data_nascimento" name="date_birth" type="date" class="form-control" placeholder="Data de nascimento" required>
                                        @if ($errors->has('date_birth'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('date_birth') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 text-start">
                                    <label for="img_afect">Imagem de área afectada</label>
                                    <div class="input-group{{ $errors->has('img_afect') ? ' has-danger' : '' }}">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="nc-icon nc-single-02"></i>
                                            </span>
                                        </div>
                                        <input id="img_afect" name="image" type="file" class="form-control" placeholder="Imagens das áreas afectaa" required>
                                        @if ($errors->has('img_afect'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('img_afect') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-check text-left">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="agree_terms_and_conditions" type="checkbox">
                                    <span class="form-check-sign"></span>
                                    {{ __('Eu concordo com os') }}
                                    <a href="#something">{{ __('termos e condições') }}</a>.
                                </label>
                                @if ($errors->has('agree_terms_and_conditions'))
                                <span class="invalid-feedback" style="display: block;" role="alert">
                                    <strong>{{ $errors->first('agree_terms_and_conditions') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="card-footer ">
                                <button type="submit" class="btn btn-primary btn-round">{{ __('Enviar') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush