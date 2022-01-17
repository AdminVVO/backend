<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>

<script>
	function clickEvent(first, last) {
	    if (first.value.length) {
	        document.getElementById(last).focus();
	    }
	}
</script>

{{-- HOME --}}
<script src="{{ URL::asset('assets/js/modals.js') }}"></script>
<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
<script src="{{ URL::asset('assets/js/places.js') }}"></script>
<script src="{{ URL::asset('assets/js/signup.js') }}"></script>

@yield('script')

@yield('script-bottom')

