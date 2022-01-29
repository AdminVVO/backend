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

        @if ( $qphone['phone'] == null && $qphone['other_phone'] == null )
            <div class="_txtec none">Not provided</div>
        @else
            <div class="_txtec none">{{ $qphone['phone'] }}</div>

            @if ( $qphone['other_phone'] != null )
                @foreach ($qphone['other_phone'] as $element)
                    <div class="_txtec none">{{ $element }}</div>
                @endforeach
            @endif

        @endif


        <div class="_txtec show">For notifications, reminders, and help logging in.</div>
        <div class="_form">

            @if ( $qphone['phone'] != null )
                
                <div style="display: {{$showInput === false ? '' : 'none'}};">
                    <div class="_cont-edit" style="padding-top: 25px;">
                        <div class="_txtec">{{ $qphone['phone'] }}</div>
                        <a href="javascript:void(0)" wire:click="editNumber('{{ $qphone['phone'] }}')" class="_btnsm">
                            <span class="_txtblu" style="margin-bottom: 0; font-weight: normal;">Edit</span>
                        </a>
                    </div>

                    @if ( $qphone['other_phone'] != null )
                        @foreach ( $qphone['other_phone'] as $element )
                            <div class="_cont-edit" style="padding-top: 25px;">
                                <div class="_txtec">{{ $element }}</div>

                                <a href="javascript:void(0)" wire:click="editNumber('{{ $element }}')" class="_btnsm">
                                    <span class="_txtblu" style="margin-bottom: 0; font-weight: normal;">Edit</span>
                                </a>
                            </div>
                        @endforeach
                    @endif

                    @if ( count( $qphone['other_phone'] ) < 1 )
                        <button wire:click="addOtherNumber()" class="btn-celest" style="margin-top: 22px;">Add Another number</button>
                    @endif
                </div>
            @else
                <form wire:submit.prevent="" class="_form" submitphone>
                    <div class="_flfpc">
                        <div class="txt-check-in">Phone number</div>
                        <x-tel-input class="_input-mod email-modals @error('phone') error_input @enderror" type="text" /> 
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
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script >
        $("[submitphone]").submit(function(event) {
            Livewire.emit('submitEvent', $("#phone").val())
        });
    </script>
@endpush