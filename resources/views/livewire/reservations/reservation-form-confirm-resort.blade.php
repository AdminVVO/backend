<div class="content_form_previews" style="margin: 0 auto;">
    @if ( $contentReserv['template'] == 'MS Code')
        @include('livewire.reservations.template.confirm.ms_code')
    @else
        @include('livewire.reservations.template.confirm.source')
    @endif
</div>
