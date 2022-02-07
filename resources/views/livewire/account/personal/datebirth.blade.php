<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Date of birth</div>

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
            <div class="_txtec none">{{ Carbon\Carbon::parse( $query, 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
        @endif

        <div class="_txtec show">Use an address you'll always have access to.</div>
        <form wire:submit.prevent="submitDatebirth" class="_form _form-f">                         
            <div class="_flex">    
                <label class="_lbl-date">
                    <input type="text" wire:model.lazy="datebirth" placeholder="dd/mm/yyyy" maxlength="10" class="_input-mod date date-v-modals @error('datebirth') error_input @enderror" style="margin: 0;">

                    <i class="far fa-calendar"></i>
                    @error('datebirth')
                        <div  class="_txterror">
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ $message }}
                        </div>
                    @enderror                           
                </label>                      
            </div>  

            <button type="submit" class="btn-celest btns-modals" wire:loading.class="activeLoading" wire:loading.attr="disabled">
                Save
                <div class="loading-btn loading-btn-modal"></div>
            </button>
        </form>
    </div>
</div>