<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr c-photo-drag">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 31px;">Next, let's add some photos of your place</h2>
                    
                    <x-filepond-pre-listing 
                        wire:model="images" 
                        multiple
                        allowImagePreview
                        imagePreviewMaxHeight="200"
                        allowFileTypeValidation
                        acceptedFileTypes="['image/png', 'image/jpg', 'image/jpeg']"
                        allowFileSizeValidation
                        maxFileSize="2mb"
                        maxFiles="15"
                    />

                </div>
            </div>
        </div>
    </div>
</div>