<div
    wire:ignore
    x-data
    x-init="() => {
        const post = FilePond.create($refs.input);
        post.setOptions({
            allowReorder: 'true', 
            allowMultiple: {{ $attributes->has('multiple') ? 'true' : 'false' }}, 
            allowImagePreview: {{ $attributes->has('allowImagePreview') ? 'true' : 'false' }},
            imagePreviewMaxHeight: {{ $attributes->has('imagePreviewMaxHeight') ? $attributes->get('imagePreviewMaxHeight') : '256' }},
            allowFileTypeValidation: {{ $attributes->has('allowFileTypeValidation') ? 'true' : 'false' }},
            acceptedFileTypes: {!! $attributes->get('acceptedFileTypes') ?? 'null' !!},
            allowFileSizeValidation: {{ $attributes->has('allowFileSizeValidation') ? 'true' : 'false' }},
            maxFileSize: {!! $attributes->has('maxFileSize') ? "'".$attributes->get('maxFileSize')."'" : 'null' !!},
            maxFiles: {!! $attributes->has('maxFiles') ? "'".$attributes->get('maxFiles')."'" : 'null' !!},
            server: {
                process:(fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                    @this.upload('{{ $attributes->whereStartsWith('wire:model')->first() }}', file, load, error, progress)
                },
                revert: (filename, load) => {
                    @this.removeUpload('{{ $attributes->whereStartsWith('wire:model')->first() }}', filename, load)
                },
            },
            labelIdle: `<div><h3 class='h2-guests filepond--label-action' style='margin-bottom: 4px;'>Drag your photos here</h3><p class='_txtec'>Add at least 5 photos.</p></div>`,
        });
    }"
>
    <input type="file" x-ref="input" multiple />
</div>