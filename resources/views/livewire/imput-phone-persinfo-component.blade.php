

<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Phone number</div>

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

        @forelse ($qphone as $element)
            <div class="_txtec none">{{ $element }}</div>
        @empty
            <div class="_txtec none">Not provided</div>
        @endforelse

        <div class="_txtec show">For notifications, reminders, and help logging in.</div>
        <div class="_form">

            <div style="display: {{$showInput === false ? '' : 'none'}};">
                @foreach ($qphone as $element)
                    <div class="_cont-edit" style="padding-top: 25px;">
                        <div class="_txtec">{{ $element }}</div>

                        <a href="javascript:void(0)" wire:click="editNumber('{{ $element }}')" class="_btnsm">
                            <span class="_txtblu" style="margin-bottom: 0; font-weight: normal;">Edit</span>
                        </a>
                    </div>
                @endforeach
                @if ( count( $qphone ) <= 1 )
                    <button wire:click="addOtherNumber()" class="btn-celest" style="margin-top: 22px;">Add Another number</button>
                @endif
            </div>

            <div style="display: {{$showInput === false ? 'none' : ''}};">
                <form wire:submit.prevent="submit" class="_form">
                    <div class="_flfpc">
                        <div class="txt-check-in">Phone number</div>
                        {{-- <x-tel-input type="text" name="phone" id="phone" wire:model="phone" class="form-input _input-mod email-modals" />    --}}
                        {{-- <x-tel-input wire:model="phone" class="form-input _input-mod email-modals @error('phone') error_input @enderror"/>  --}}
                        {{-- <input wire:model="phone_country" type="hidden" id="phone_country" name="phone_country"> --}}
                        <input type="text" class="_input-mod email-modals @error('phone') error_input @enderror" wire:model="phone" placeholder="Examples@demo.com">
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
            </div>





                



        </div>
    </div>
</div>