<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/jquery-ui-git.js"></script> <!-- libreria js de un calendario date-piker -->
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script> <!-- libreria js de 2 calendarios date-range-piker -->
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="{{ URL::asset('js/app.js') }}" type="text/javascript"></script>

<script src="{{ URL::asset('js/application.js') }}"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>
<script src="{{ URL::asset('assets/js/modals.js') }}"></script>
<script src="{{ URL::asset('assets/js/modals-orig.js') }}"></script>
<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
<script src="{{ URL::asset('assets/js/select.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-piker.js') }}"></script>
<script src="{{ URL::asset('assets/js/date-range-piker.js') }}"></script>


{{-- <script src="{{ URL::asset('assets/js/card-location.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('assets/js/perfil-anfitrion.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('assets/js/modals-all_amenitles.js') }}"></script> --}}

@yield('script')
@stack('scripts')



