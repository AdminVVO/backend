<script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/application.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery-ui-git.js') }}"></script>
<script src="{{ URL::asset('assets/js/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/daterangepicker.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>
<script src="{{ URL::asset('assets/js/modals.js') }}"></script>
<script src="{{ URL::asset('assets/js/modals-orig.js') }}"></script>
<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
<script src="{{ URL::asset('assets/js/select.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-piker.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-range-piker.js') }}"></script>


{{-- <script src="{{ URL::asset('assets/js/modals-session.js') }}"></script> --}}

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] )
    {{-- HOME --}}
	<script src="{{ URL::asset('assets/js/places.js') }}"></script>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"]  . 'search')
	{{-- SEARCH --}}
	<script src="{{ URL::asset('assets/js/card-location.js') }}"></script>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . 'interna' )
	{{-- INTERNA --}}
	<script src="{{ URL::asset('assets/js/modals-interna.js') }}"></script>
	<script src="{{ URL::asset('assets/js/modals-gallerys.js') }}"></script>
	<script src="{{ URL::asset('assets/js/modals-reserve.js') }}"></script>
	<script src="{{ URL::asset('assets/js/modals-all_amenitles.js') }}"></script>
@endif

@if ( $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] == $_SERVER["HTTP_HOST"] . 'perfil-anfitrion')
	{{-- PERFIL ALFITRION --}}
	<script src="{{ URL::asset('assets/js/perfil-anfitrion.js') }}"></script>
	<script src="{{ URL::asset('assets/js/modals-all_amenitles.js') }}"></script>
@endif





@yield('script')



