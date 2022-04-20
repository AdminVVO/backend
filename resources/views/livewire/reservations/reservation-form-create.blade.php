<div class="content_form_previews" style="margin: 0 auto;">
    @if ( $template == 'MS Code')
        @include('livewire.reservations.template.ms_code')
    @else
        @include('livewire.reservations.template.source')
    @endif
</div>