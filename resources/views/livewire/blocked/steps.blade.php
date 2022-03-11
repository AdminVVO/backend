<div>
    {{-- Steps Init --}}
    @if ( $step == 'init' )
        @livewire('blocked.steps.init')
    @endif

    {{-- Steps Type Upload --}}
    @if ( $step == 'typeUpload' )
        @livewire('blocked.steps.type-upload')
    @endif

    {{-- Steps Type Document --}}
    @if ( $step == 'typeDocument' )
        @livewire('blocked.steps.type-document')
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'uploadFileBrowser' )
        @livewire('blocked.steps.upload-file-browser', ['content' => $content])
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'uploadFileDevice' )
        @livewire('blocked.steps.upload-file-device')
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'finishUploadFile' )
        @livewire('blocked.steps.finish-upload', ['reference' => $content['codeReference']])
    @endif
</div>