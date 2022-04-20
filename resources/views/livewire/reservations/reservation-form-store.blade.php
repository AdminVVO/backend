<div class="content_form_previews" style="margin: 0 auto;">
    @if ( $content['template'] == 'MS Code')
        @include('livewire.reservations.template.store.ms_code')
    @else
        @include('livewire.reservations.template.store.source')
    @endif
</div>