<div class="_2btns">
    <button class="_btn" type="button" aria-label="disminuir valor" {{ $disableButton['Decrease'] ? 'disabled' : '' }} wire:click="buttonDecrease">
        <span>
            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                <path d="m2 16h28"></path>
            </svg>
        </span>
    </button>
    
    <span>{{ $numberguest }}</span>

    <button class="_btn" type="button" aria-label="aumentar valor" {{ $disableButton['Increase'] ? 'disabled' : '' }} wire:click="buttonIncrease">
        <span>
            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false">
                <path d="m2 16h28m-14-14v28"></path>
            </svg>
        </span>
    </button>
</div>