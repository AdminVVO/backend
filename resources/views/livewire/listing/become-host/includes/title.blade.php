<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs-next">
            <div class="content_mr" style="max-width: 658px; width: 100%;">
                <div class="content_step content_step9">
                    <h2 class="h2_publish txt_center" style="margin-bottom: 39px;">Let's give your place a name</h2>
                    <div class="txt-check-in">Create your title</div>
                    <div style="margin-top: 12px;" wire:ignore.self>
                        <textarea class="_txtarea @error('inputTitle') error_input @enderror" placeholder="Cheerful 1-bedroom residential home with hot tub" maxlength="50" style="font-size: 32px; line-height: normal; height: auto;" wire:model.defer="inputTitle"></textarea>
                        @error('inputTitle')
                            <div class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror
                        <p class="fx fx-ai-c" style="float: right;">
                            <span class="_txtec14 views_num">0</span><span class="_txtec14">/50</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>