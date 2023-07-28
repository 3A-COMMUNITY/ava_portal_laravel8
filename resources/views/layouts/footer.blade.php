<footer class="footer footer-black  footer-white fixed-bottom ">
    <div class="container-fluid">
        <div class="row">
            <div class="credits ms-auto">
                <span class="copyright">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>{{ __(', feito com ') }}<i class="fa fa-heart heart"></i>{{ __(' por ') }}<a class="@if(Auth::guest()) text-white @endif" href="#" target="_blank">{{ __('3A - Community') }}</a>
                </span>
            </div>
        </div>
    </div>
</footer>