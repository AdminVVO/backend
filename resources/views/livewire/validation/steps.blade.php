<div>
    {{-- Steps Init --}}
    @if ( $step == 'init' )
        @livewire('validation.steps.init')
    @endif


    {{-- Steps Type Document --}}
    @if ( $step == 'typeDocument' )
        @livewire('validation.steps.type-document')
    @endif

    {{-- Steps Type Upload --}}
    @if ( $step == 'typeUpload' )
        @livewire('validation.steps.type-upload')
    @endif
    
    {{-- Steps Upload File --}}
    @if ( $step == 'uploadFileBrowser' )
        @livewire('validation.steps.upload-file-browser', ['content' => $content])
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'uploadFileDevice' )
        @livewire('validation.steps.upload-file-device')
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'finishUploadFile' )
        @livewire('validation.steps.finish-upload', ['reference' => $content['codeReference']])
    @endif
    
</div>