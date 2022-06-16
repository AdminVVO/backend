<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> <!-- libreria js de mascara - patrones de los inputs -->
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

<!-- libreria js de mascara - patrones de los inputs -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

<script src="{{ URL::asset('assets/js/click-min.js') }}"></script>
<script src="{{ URL::asset('assets/js/vvo-focus-blur.js') }}"></script>
<script src="{{ URL::asset('assets/js/vvo-keyup.js') }}"></script>
<script src="{{ URL::asset('assets/js/vvo-mask.js') }}"></script>
<script src="{{ URL::asset('assets/js/vvo-carousel.js') }}"></script>

<!-- libreria js de un calendario date-piker -->
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script> 
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ URL::asset('assets/js/date-piker.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-range-piker.js') }}"></script>

<!-- libreria js de un calendario Easepick -->
<script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/base-plugin@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.umd.min.js"></script>

<script src="{{ URL::asset('js/application.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>

		
<script src="{{ URL::asset('assets/js/enter-otp.js') }}"></script>
<script src="{{ URL::asset('assets/js/modals-orig.js') }}"></script>
<script src="{{ URL::asset('assets/js/lightpick.js') }}"></script>


@yield('script')
@stack('scripts')

