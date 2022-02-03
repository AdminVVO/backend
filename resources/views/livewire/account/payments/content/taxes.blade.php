<div>

    @if ( count($query) == 0 )

        <div class="_cont-ein">
            <div class="h2-guests">EIN</div>
            <div class="_block">
                <div class="_txtec">If you are registered for EIN or your stay is for business, you may not be charged EIN on vvoutlt service fees. To get started, enter your business' EIN ID Number. <a href="#" class="_txtehlinear">Learn more about EIN</a>.</div>
            </div>
            <button class="btn-celest" wire:click="showModal()">Add payout method</button>
        </div>
        
    @else

        <div class="_cont-2">
            <div class="h2-guests">Taxpayer information</div>

            <p class="_txtec">If you add a single U.S. taxpayer, we will automatically assign it to all of your U.S. payout method(s). If you add multiple taxpayers, go to your Payout setting and assign a taxpayer to each U.S. payout method under the "..." menu next to each method. All other hosts - use your <a href="#" class="_txtehlinear">Earnings Summary</a> to file taxes.</p>

            <div class="_gap-default">
                @foreach ($query as $key => $element)
                    <div class="_flex-baseline">
                        <div class="content_flex-actv">
                            <div class="_block">
                                <i class="far fa-file"></i>
                            </div>

                            <div class="flex-msg">
                                <div class="_flexgap">
                                    <div class="_txteh">{{ $element['name'] }}</div>
                                    @if ( $element['default'] == true)
                                        <span class="_news-bt">Default</span>
                                    @endif
                                </div>
                                <div class="_g">
                                    <p class="_txtec16">Taxpayer ID: {{ $element['id_ein'] }} </p>
                                    <p class="_txtec16">Added on {{ Carbon\Carbon::parse( $element['created_at'], 'UTC')->locale('en')->isoFormat('LL') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <a href="#" wire:click="editModal({{ $key }})">
                            <i class="far fa-edit"></i>
                        </a>
                    </div>
                @endforeach
            </div>
            <button class="btn-celest" wire:click="showModal()">Add U.S Taxpayer</button>
        </div>
        
    @endif


    @if ( $showModal )
        <div class="container_add-payments">
            <div class="modal-addpymts"></div>

            <div class="pd_addpymts-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-addpymts">
                        <div class="close" wire:click="closeModal()">
                            <span>X</span>
                        </div>

                        <div class="modal_block">
                            <div class="content_hidden-addpymts">
                                <div class="site-content">
                                    <h2 class="h2_publish">Add EIN ID Number</h2>
                                    <div class="_txtec" style="margin: 12px 0 50px;">If you are registered with the European Commission, verification may take up to 48 hours. We'll send you an email when its finished. More information on EIN IDs can be found <a href="#" class="_txtehlinear">here</a>.</div>

                                    @if ( $showEdit )
                                        <form wire:submit.prevent="submitEditTaxes">
                                    @else
                                        <form wire:submit.prevent="submitTaxes">
                                    @endif
                                        <div class="_flfpc">
                                            <div class="block_date">
                                                <div class="txt-check-in">Country/region</div>
                                                <div class="selected-modal" style="margin: 0;">
                                                    <select wire:model.lazy="country" class="@error('country') error_input @enderror">
                                                        <option value="0" selected>Choose...</option>
                                                        <option value="US">United States (+1)</option>
                                                        <option value="VE">Venezuela (+58)</option>
                                                    </select>

                                                    <i class="fas fa-chevron-down"></i>
                                                </div>
                                                @error('country')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="block_date">
                                                <div class="txt-check-in">Add EIN ID Number</div>
                                                <input type="text" class="_numcard @error('id_ein') error_input @enderror" wire:model.lazy="id_ein">
                                                @error('id_ein')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="_flfpc">
                                            <div class="txt-check-in">Name on registration</div>
                                            <input type="text" class="_numcard @error('name') error_input @enderror" wire:model.lazy="name">
                                            @error('name')
                                                <div  class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="_flfpc">
                                            <div class="txt-check-in">Address line 1</div>
                                            <input type="text" class="_numcard @error('address_1') error_input @enderror" wire:model.lazy="address_1">
                                            @error('address_1')
                                                <div  class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i> 
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="_flfpc">
                                            <div class="block_date">
                                                <div class="txt-check-in">Address line 2 (optional)</div>
                                                <input type="text" class="_numcard @error('address_2') error_input @enderror" wire:model.lazy="address_2">
                                                @error('address_2')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="block_date">
                                                <div class="txt-check-in">Zip/postal code</div>
                                                <input type="text" class="_numcard @error('zip_code') error_input @enderror" wire:model.lazy="zip_code">
                                                @error('zip_code')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="_flfpc">
                                            <div class="block_date">
                                                <div class="txt-check-in">City</div>
                                                <input type="text" class="_numcard @error('city') error_input @enderror" wire:model.lazy="city">
                                                @error('city')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>

                                            <div class="block_date">
                                                <div class="txt-check-in">Province or region</div>
                                                <input type="text" class="_numcard @error('region') error_input @enderror" wire:model.lazy="region">
                                                @error('region')
                                                    <div  class="_txterror">
                                                        <i class="fas fa-exclamation-circle icon1"></i> 
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="_block">
                                            <button type="submit" class="btn-celest">Done</button>
                                            <button type="button" wire:click="closeModal()" class="btn-red">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif  
</div>