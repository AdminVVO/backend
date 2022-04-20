<div class="content_form_previews" style="margin: 0 auto;">
    @if ( $contentReserv['template'] == 'MS Code')
        @include('livewire.reservations.template.preview.ms_code')
    @else
        @include('livewire.reservations.template.preview.source')
    @endif
</div>
