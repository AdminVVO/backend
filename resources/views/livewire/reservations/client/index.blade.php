<div class="content_form_previews" style="margin: 0 auto;">
    @if ( $content['status'] === false )
        @if ( $content['template'] == 'MS Code')
            @include('livewire.reservations.client.template.ms_code')
        @else
            @include('livewire.reservations.client.template.source')
        @endif
    @endif

    @if ( $content['status'] === true )
        @if ( $content['template'] == 'MS Code')
            @include('livewire.reservations.client.preview.ms_code')
        @else
            @include('livewire.reservations.client.preview.source')
        @endif
    @endif

</div>