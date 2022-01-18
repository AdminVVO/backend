<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>

<script>
	function clickEvent(first, last) {
	    if (first.value.length) {
	        document.getElementById(last).focus();
	    }
	}
	
	function solonumeros(e) {
    key = e.keyCode || e.which;
    teclado = String.fromCharCode(key);
    numeros = "0123456789";
    especiales = "8-37-38-46"; // array
    teclado_especial = false;

    for(let i in especiales) {
        if(key == especiales[i]) {
            $(".box_enter").removeClass("error_code");
            teclado_especial = true;
        }
    }

    if(numeros.indexOf(teclado) == -1 && !teclado_especial) {
        $(".box_enter").removeClass("error_code");
        return false;
    }

    $(".box_enter").removeClass("error_code");
}
</script>


{{-- HOME --}}
{{-- <script src="{{ URL::asset('assets/js/modals.js') }}"></script> --}}
<script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
<script src="{{ URL::asset('assets/js/places.js') }}"></script>
{{-- <script src="{{ URL::asset('assets/js/modals-orig.js') }}"></script> --}}
{{-- <script src="{{ URL::asset('assets/js/validation.js') }}"></script> --}}

@yield('script')

@yield('script-bottom')

