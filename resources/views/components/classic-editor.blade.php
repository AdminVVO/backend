<div
    wire:ignore
    x-data
    x-init="
        ClassicEditor.create($refs.classicEditor, {
            toolbar: [ 'Heading', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo' ]
         })
        .then( function(editor){
            editor.model.document.on('change:data', () => {
                @this.set('content.additional_rules', editor.getData());
            })
        })
        .catch( error => {
            console.error( error );
        } );
    "    
    x-ref="classicEditor"
>
    <textarea
        x-ref="classicEditor"
    >{{ $attributes->get('contentText') }}</textarea>
</div>

@push('style')
    @once

    @endonce
@endpush

@push('alpine_scripts')
    @once
        <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
    @endonce
@endpush