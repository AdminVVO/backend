<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> <!-- toggle -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script> <!-- libreria js de mascara - patrones de los inputs -->
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script> <!-- libreria js de un calendario date-piker -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> <!-- libreria js de 2 calendarios date-range-piker -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

{{-- <script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script> --}}

<script src="{{ URL::asset('js/application.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>

	{{-- Desactivado ese scripts para el correcto funcionamiento de la vista chat.. Falta migrar los css restantes de las demas vistas... --}}
		{{-- <script src="{{ URL::asset('assets/js/modals.js') }}"></script> --}}
		
<script src="{{ URL::asset('assets/js/enter-otp.js') }}"></script>
{{-- @if (!Auth::check())<script src="{{ URL::asset('assets/js/modals-session.js') }}"></script>@endif --}}
<script src="{{ URL::asset('assets/js/modals-orig.js') }}"></script>
<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
<script src="{{ URL::asset('assets/js/select.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-piker.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-range-piker.js') }}"></script>

@yield('script')
@stack('scripts')
