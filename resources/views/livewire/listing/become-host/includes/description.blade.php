<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr" style="max-width: 658px; width: 100%;">
                <div class="content_step content_step9">
                    <h2 class="h2_publish txt_center" style="margin-bottom: 31px;">Now, let's describe your place</h2>
                    <div class="txt-check-in">Create your description</div>
                    <div style="margin-top: 12px;">
                        <textarea class="_txtarea @error('inputDescription') error_input @enderror" placeholder="This unique place has a style all its own." maxlength="500" wire:model.defer="inputDescription"></textarea>
                        @error('inputDescription')
                            <div class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fx fx-ai-c" style="float: right;">
                            <span class="_txtec14 views_num">0</span><span class="_txtec14">/500</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>