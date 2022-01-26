<div class="_yellow-bg {{ $classActive ? 'personal_edit' : ''}}">
    <div class="_bgpadding">
        <div class="_cont-edit">
            <div class="_txteh">Gender</div>

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
        <div class="_txtec none">{{ $query['sex'] }}</div>
        {{-- @if ($classActive === true) --}}
            <form wire:submit.prevent="submit" class="_form">
                <div class="selected-modal">
                    <select class="@error('gender') error_input @enderror" wire:model="gender">
                        <option value="0" disabled select>Select one option</option>
                            @foreach ($arraySelect as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                    </select>

                    <i class="fas fa-chevron-down" aria-hidden="true"></i>
                </div>
                @error('gender')
                    <div  class="_txterror">
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ $message }}
                    </div>
                @enderror
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