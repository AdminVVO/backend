<script src="{{ URL::asset('assets/js/jquery-3.6.0.min.js') }}"></script> 
<script src="{{ URL::asset('assets/js/jquery.mask.js') }}"></script>  <!-- libreria js de mascara - patrones de los inputs -->
<script src="{{ URL::asset('assets/js/jquery-ui-git.js') }}"></script> <!-- libreria js de un calendario date-piker -->
<script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
<script src="{{ URL::asset('assets/js/moment-min.js') }}"></script> <!-- libreria js calendario lightpick -->
<script src="{{ URL::asset('assets/js/lightpick.js') }}"></script> <!-- libreria js calendario lightpick -->
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>  <!--Activador slider pano -->
<script src="{{ URL::asset('assets/js/modals.js') }}"></script> <!-- Activador modal Lenguague -->
<script src="{{ URL::asset('assets/js/modals-min.js') }}"></script> <!-- Activador todo los modals -->
<script src="{{ URL::asset('assets/js/script.js') }}"></script> <!-- Script general - Fixed menu -->
<script src="{{ URL::asset('assets/js/enter-otp.js') }}"></script> <!-- Funciones de los Modals -->
<script src="{{ URL::asset('assets/js/click-min.js') }}"></script> <!-- funcion click -->
<script src="{{ URL::asset('assets/js/vvo-focus-blur.js') }}"></script> <!-- funcion click focus y blur -->
<script src="{{ URL::asset('assets/js/vvo-keyup.js') }}"></script> <!-- funcion escribir input -->
<script src="{{ URL::asset('assets/js/vvo-mask.js') }}"></script> <!-- funcion escribir automatico cualquier signo -->
<script src="{{ URL::asset('assets/js/vvo-carousel.js') }}"></script> <!-- archivo para slider, carouseles -->
<script src="{{ URL::asset('assets/js/vvo-skeleton.js') }}"></script> <!-- ANTONY - Loading skeleton -->

<!-- libreria js de un calendario Easepick -->
<script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/datetime@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/core@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/base-plugin@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/range-plugin@1.2.0/dist/index.umd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@easepick/lock-plugin@1.2.0/dist/index.umd.min.js"></script>

<script src="{{ URL::asset('js/application.js') }}"></script>

@yield('script')
@stack('scripts')