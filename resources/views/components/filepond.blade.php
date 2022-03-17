<div
    wire:ignore
    x-data
    x-init="() => {
        const post = FilePond.create($refs.input);
        post.setOptions({
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
            }
        });
        this.addEventListener('pondReset', e => {
            post.removeFiles();
        });
    }"
>
    <input type="file" x-ref="input" />
</div>

@push('style')
    @once
        <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">
    @endonce
    <style type="text/css">
        .filepond--item {
            width: calc(50% - 0.5em);
        }
    </style>
@endpush

@push('alpine_scripts')
    @once
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    @endonce
    <script>
        FilePond.registerPlugin(
         	FilePondPluginImagePreview,
         	FilePondPluginFileValidateType,
         	FilePondPluginFileValidateSize
        );
    </script>
@endpush