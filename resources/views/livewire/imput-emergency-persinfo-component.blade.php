<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Emergency contact</div>

            <a href="javascript:void(0)" class="_btnsm" wire:click='statusUpdate()'>
                <span class="_fcontent edit">
                    Edit
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>

                <span class="_fcontent cancel">
                    Cancel
                    <span class="_svg-asm">
                        <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                    </span>
                </span>
            </a>
        </div>
        @if ( empty( $query ) )
            <div class="_txtec none">Not provided</div>
        @else
            <div class="_txtec none">Name: {{ $query['name'] }}</div>
            <div class="_txtec none">Relationship: {{ $query['relationship'] }}</div>
            <div class="_txtec none">Preferred Language: {{ $query['language'] }}</div>
            <div class="_txtec none">Email: {{ $query['email'] }}</div>
            <div class="_txtec none">Country: {{ $query['country'] }}</div>
            <div class="_txtec none">Phone:{{ $query['phone'] }}</div>
        @endif

        {{-- @if ($classActive === true) --}}
            <div class="_txtec show">A trusted contact we can alert in an urgent situation.</div>
            <form wire:submit.prevent="submit" class="_form">
                <div class="block_date">
                    <div class="txt-check-in">Name</div>
                    <input type="text" class="_input-mod @error('name') error_input @enderror" wire:model="name">
                    @error('name')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Relationship</div>
                    <input type="text" class="_input-mod @error('relationship') error_input @enderror" wire:model="relationship">
                    @error('relationship')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Preferred language</div>
                    <div class="selected-modal">
                        <select wire:model="language" class="@error('language') error_input @enderror">
                            <option value="0" disabled selected>Choose...</option>
                            <option value="ES">España</option>
                        </select>

                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    @error('language')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Email</div>
                    <input type="text" class="_input-mod @error('email') error_input @enderror" wire:model="email">
                    @error('email')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Country/region</div>
                    <div class="selected-modal">
                        <select wire:model="country" class="@error('country') error_input @enderror">
                            <option value="0" disabled selected>Choose...</option>
                            <option value="PR">Perú</option>
                        </select>

                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                    </div>
                    @error('country')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_date">
                    <div class="txt-check-in">Phone number</div>
                    <input type="text" class="_input-mod @error('phone') error_input @enderror" wire:model="phone">
                    @error('phone')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="block_a">
                    <button type="submit" class="btn-celest btns-modals {{ $isLoad ? 'activeLoading' : '' }}" {{ $isLoad ? 'disabled' : '' }} >
                        Save
                        <div class="loading-btn loading-btn-modal"></div>
                    </button>
                </div>
            </form>
        {{-- @endif --}}
    </div>
</div>