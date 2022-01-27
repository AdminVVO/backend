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
        <div class="_txtec none">{{ Carbon\Carbon::parse( $query['date_birth'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</div>
            <div class="_txtec show">Use an address you'll always have access to.</div>


            <form wire:submit.prevent="submit" class="_form _form-f">                         
                <div class="_flex">                             
                    <label class="_lbl-date">                                 
                        <input type="text" name="calendar" wire:model="datebirth" placeholder="dd/mm/yyyy" maxlength="10" class="_input-mod date date-v-modals @error('datebirth') error_input @enderror">                                 
                        <i class="far fa-calendar"></i>  
                        @error('datebirth')
                            <div  class="_txterror">
                                <i class="fas fa-exclamation-circle icon1"></i> 
                                {{ $message }}
                            </div>
                        @enderror                           
                    </label>                         
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