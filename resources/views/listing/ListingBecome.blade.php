@extends('layouts.Listing')

@section('title') Become-Host Listing @endsection

@section('css')

@endsection

@section('content')

    {{-- Become Listings --}}
    @livewire('listing.become-host.index')

@endsection

@section('script')

   <script src="{{ URL::asset('assets/js/vvo-create-listing-slider.js') }}"></script>
 
@endsection