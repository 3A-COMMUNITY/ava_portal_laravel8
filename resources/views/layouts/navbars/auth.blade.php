<div class="sidebar" data-color="white" data-active-color="primary">
    <div class="logo">
        <a href="{{route('site')}}" class="d-flex justify-content-center">
            <div class="">
                <img src="{{ asset('paper') }}/img/logo.png">
            </div>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ $elementActive == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>{{ __('Início') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'profile' ? 'active' : '' }}">
                <a href="{{ route('profile.edit') }}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>{{ __('Perfil de Usuário') }}</p>
                </a>
            </li>
            <li class="{{ $elementActive == 'associates' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples">
                    <i class="fa fa-users"></i>
                    <p>
                            {{ __('Associados') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples">
                    <ul class="nav">
                        
                        <li class="{{ $elementActive == 'associates' ? 'active' : '' }}">
                            <a href="{{ route('associates.index') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' Listar associados ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="{{ $elementActive == 'news_create' || $elementActive == 'news_index' ? 'active' : '' }}">
                <a data-toggle="collapse" aria-expanded="true" href="#laravelExamples2">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>
                            {{ __('Posts') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExamples2">
                    <ul class="nav">
                        
                        <li class="{{ $elementActive == 'news_create' ? 'active' : '' }}">
                            <a href="{{ route('posts.create') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' Criar post') }}</span>
                            </a>
                        </li>
                        <li class="{{ $elementActive == 'news_index' ? 'active' : '' }}">
                            <a href="{{ route('posts.index') }}">
                                <span class="sidebar-mini-icon">{{ __('U') }}</span>
                                <span class="sidebar-normal">{{ __(' Listar posts ') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
          
        </ul>
    </div>
</div>
