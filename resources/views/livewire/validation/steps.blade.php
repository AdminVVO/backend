<div>
    {{-- Steps Init --}}
    @if ( $step == 'init' )
            @livewire('validation.steps.init', ['user_id' => $user_id])
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
        @livewire('validation.steps.upload-file-browser', ['content' => $content, 'user_id' => $user_id ?? null])
    @endif

    {{-- Steps Upload File --}}
    @if ( $step == 'uploadFileDevice' )
        @livewire('validation.steps.upload-file-device')
    @endif

    {{-- Steps Finish Upload File --}}
    @if ( $step == 'finishUploadFile' )
        @livewire('validation.steps.finish-upload', ['reference' => $content['codeReference']])
    @endif

    {{-- Steps Finish Validation --}}
    @if ( $step == 'finishValidation' )
        @livewire('validation.steps.finish-validation', ['phone' => $content['phone'], 'user_id' => $content['user_id']])
    @endif
    
</div>