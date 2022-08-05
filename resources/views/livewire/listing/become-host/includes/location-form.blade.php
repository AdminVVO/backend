<div class="_ctoverlay">
    <div class="content_right">
        <div class="content_hidden cs_form">
            <div class="content_mr">
                <div class="content_step">
                    <h2 class="h2_publish" style="margin-bottom: 23px;">What kind of space will guests have?</h2>

                    <div class="options_form">
                        <h3 class="h2-guests txt_center" style="margin-bottom: 36px;">Confirm your address</h3>
                        <div class="_flfpc">
                            <div class="txt-check-in">Street</div>
                            <input type="text" class="_numcard @error('inputStreet') error_input @enderror" wire:model.defer="inputStreet">
                            @error('inputStreet')
                                <div class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="_flfpc" style="gap: 20px;">
                            <div class="block_date">
                                <div class="txt-check-in">Apt, suite, etc. (Optional)</div>
                                <input type="text" class="_numcard" wire:model.defer="inputSuite">
                            </div>

                            <div class="block_date">
                                <div class="txt-check-in">City</div>
                                <input type="text" class="_numcard @error('inputCity') error_input @enderror" wire:model.defer="inputCity">
                                @error('inputCity')
                                    <div class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="_flfpc">
                            <div class="block_date">
                                <div class="txt-check-in">State</div>
                                <input type="text" class="_numcard @error('inputRegion') error_input @enderror" wire:model.defer="inputRegion">
                                @error('inputRegion')
                                    <div class="_txterror">
                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="block_date">
                                <div class="txt-check-in">Zip code (Optional)</div>
                                <input type="text" class="_numcard" wire:model.defer="inputPostcode">
                            </div>
                        </div>

                        <div class="_flfpc">
                            <div class="txt-check-in">Country/region</div>
                            <input type="text" class="_numcard @error('inputCountry') error_input @enderror" wire:model.defer="inputCountry">
                            @error('inputCountry')
                                <div class="_txterror">
                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <p class="_txtec16">We'll only share your address with guests who are booked as outlined in our <a href="" class="_txtblu16">privacy policy</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>