<div>
    <div class="_cont-payments">
        <div class="h2-guests skeleton skeleton_txt" wire:ignore>Payments methods</div>
        <div class="_txtec mr-t16 skeleton skeleton_txt" wire:ignore>Add a payment method using our secure payment
            system, then start
            planning your next trip.</div>

        @if (count($query) != 0)
            <div class="_gap-default _br-defautl">
                @foreach ($query as $key => $element)
                    <div class="_flex skeleton" wire:ignore>
                        <div class="content_flex-actv">
                            <div class="_block">
                                <img src="{{ URL::asset('assets/img/card/visa.jpg') }}" alt="">
                            </div>

                            <div class="flex-msg">
                                <div class="_flexgap">
                                    <div class="_txteh">Visa ---- {{ $element['card_number'] }}</div>
                                    @if ($element['default'] == true)
                                        <span class="_news-bt">Default</span>
                                    @endif
                                </div>
                                <p class="_txtec">Expiration: {{ $element['expiration'] }}</p>
                            </div>
                        </div>

                        <button type="button" wire:click="editModal({{ $key }})">
                            <i class="far fa-edit _i-black20"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        @endif

        <button class="btn-celest js_popup_payments mr-t18 skeleton" wire:ignore>Add payment method</button>
    </div>

    <div class="container_add-payments content_popup_payments">
        <div class="paz999i0b">
        </div>

        <div class="pd_addpymts-modal">
            <div class="_z4lmgp">
                <div class="modal_content-addpymts">
                    <div class="fx fx-jc-e">
                        <button type="button" class="cwhfcbbpfx closeUserModal">X</button>
                    </div>

                    <div class="modal_block">
                        <div class="content_hidden-addpymts">
                            <div class="site-content">
                                <div class="_frever">
                                    <div class="h2_publish">Add payment method</div>
                                    <div class="_imgtarj">
                                        <img src="{{ URL::asset('assets/img/card/play-with.jpg') }}" alt=""
                                            class="imgtarj">
                                    </div>
                                </div>

                                @if ($showEdit)
                                    <form wire:submit.prevent="submitEditPayment">
                                    @else
                                        <form wire:submit.prevent="submitPayment">
                                @endif
                                <div class="_hiddencreditordebit">
                                    <div class="_flfpc">
                                        <div class="block_date">
                                            <div class="txt-check-in">First Name</div>
                                            <input type="text" class="_numcard @error('name') error_input @enderror"
                                                wire:model.lazy="name">
                                            @error('name')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="block_date">
                                            <div class="txt-check-in">Last Name</div>
                                            <input type="text"
                                                class="_numcard @error('last_name') error_input @enderror"
                                                wire:model.lazy="last_name">
                                            @error('last_name')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="txt-check-in">Card Number</div>
                                    <div class="_sltguests">
                                        <input type="text"
                                            class="_numcard @error('card_number') error_input @enderror"
                                            placeholder="1234 5678 9012 3456" wire:model.lazy="card_number">
                                        @error('card_number')
                                            <div class="_txterror">
                                                <i class="fas fa-exclamation-circle icon1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <i class="fal fa-credit-card" aria-hidden="true"></i>
                                    </div>

                                    <div class="_flfpc">
                                        <div class="block_date">
                                            <div class="txt-check-in">Expiration</div>
                                            <input type="date"
                                                class="_numcard @error('expiration') error_input @enderror"
                                                placeholder="MM/YY" wire:model.lazy="expiration">
                                            @error('expiration')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="block_date">
                                            <div class="txt-check-in">CVV</div>
                                            <input type="text" class="_numcard @error('cvv') error_input @enderror"
                                                placeholder="MM/YY" wire:model.lazy="cvv">
                                            @error('cvv')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="_flfpc">
                                        <div class="block_date">
                                            <div class="txt-check-in">Street address</div>
                                            <input type="text"
                                                class="_numcard @error('street_address') error_input @enderror"
                                                wire:model.lazy="street_address">
                                            @error('street_address')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="block_date">
                                            <div class="txt-check-in">Apt #</div>
                                            <input type="text" class="_numcard @error('apt') error_input @enderror"
                                                wire:model.lazy="apt">
                                            @error('apt')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="_flfpc">
                                        <div class="block_date">
                                            <div class="txt-check-in">City</div>
                                            <input type="text" class="_numcard @error('city') error_input @enderror"
                                                wire:model.lazy="city">
                                            @error('city')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="block_date">
                                            <div class="txt-check-in">State</div>
                                            <input type="text"
                                                class="_numcard @error('state') error_input @enderror"
                                                wire:model.lazy="state">
                                            @error('state')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="_flfpc">
                                        <div class="block_date">
                                            <div class="txt-check-in">Zip code</div>
                                            <input type="text"
                                                class="_numcard @error('zip_code') error_input @enderror"
                                                wire:model.lazy="zip_code">
                                            @error('zip_code')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="block_date">
                                            <div class="txt-check-in">Country/region</div>
                                            <div class="selected-modal" style="margin: 0;">
                                                <select wire:model.lazy="country"
                                                    class="@error('country') error_input @enderror">
                                                    <option value="0" selected>Choose...</option>
                                                    <option value="VE">Venezuela (+58)</option>
                                                    <option value="US">United States (+1)</option>
                                                </select>

                                                <i class="fas fa-chevron-down"></i>
                                            </div>
                                            @error('country')
                                                <div class="_txterror">
                                                    <i class="fas fa-exclamation-circle icon1"></i>
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="_block">
                                        <button type="submit" class="btn-celest">Done</button>
                                        <button type="button" wire:click="closeModal()"
                                            class="btn-red">Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
