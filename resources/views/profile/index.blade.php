@extends('layouts.App')

@section('title') Profile @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/perfil-anfitrion.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderHome')

@endsection

@section('content')

    <section class="section__perfil_interno entero">
        <div class="medio">
            <div class="content_intpublish">
                <div class="bcpstmzi showblock743">
                    <div class="bwfxaihplprprzi">
                        <a href="{{ route('account') }}" class="circle__btn-cerrar">
                            <span class="pr">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false">
                                    <g fill="none">
                                        <path d="m20 28-11.29289322-11.2928932c-.39052429-.3905243-.39052429-1.0236893 0-1.4142136l11.29289322-11.2928932"></path>
                                    </g>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                
                <div class="content-info-intpublish">

                    @livewire('profile.profile', ['idUser' => $idUser])

                    @livewire('profile.content-profile', ['idUser' => $idUser])

                </div>
            </div>
        </div>
    </section>

    @section('modals')

        {{-- Modal languages --}}
        @if ( $idUser === Auth::id() )
            @include('profile.modals.languages')
        @endif

        {{-- Modal Reviews --}}
            @include('profile.modals.reviews')
    @endsection

@endsection

@section('script')

    <script src="{{ URL::asset('assets/js/perfil-anfitrion.js') }}"></script>
    

    <script>
        window.addEventListener('closedSectionEditProfile', event => {
            $(".p_interna_none").show();
            $("._fr-block").hide();
        })
    </script>

@endsection
