<div class="_bef-places">
    <div>
        <div class="_cont-places">
            <div class="_inf">
                <div class="_txteh">Adults</div>
            </div>
            <div class="_2btns">
                <button class="_btn" {{ $disableButton['Decrease']['adult'] ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('adult')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span aria-hidden="true">{{ $inputAdult }}</span>

                <button class="_btn" {{ $disableButton['Increase']['adult'] ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('adult')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="_cont-places">
            <div class="_inf">
                <div class="_txteh">Childres</div>
                <div class="_txtec">Ages 2-12</div>
            </div>
            <div class="_2btns">
                <button class="_btn" {{ $disableButton['Decrease']['kids'] ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('kids')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span aria-hidden="true">{{ $inputKids }}</span>

                <button class="_btn" {{ $disableButton['Increase']['kids'] ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('kids')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="_cont-places">
            <div class="_inf">
                <div class="_txteh">Infants</div>
                <div class="_txtec">Under 2</div>
            </div>
            <div class="_2btns">
                <button class="_btn" {{ $disableButton['Decrease']['infant'] ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('infant')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span aria-hidden="true">{{ $inputInfant }}</span>

                <button class="_btn" {{ $disableButton['Increase']['infant'] ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('infant')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>

        <div class="_cont-places">
            <div class="_inf">
                <div class="_txteh">Pets</div>
                <a href="#" class="_txtlinearnormal">Bringing an assistance animal?</a>
            </div>
            <div class="_2btns">
                <button class="_btn" {{ $disableButton['Decrease']['pets'] ? 'disabled' : '' }} type="button" aria-label="disminuir valor" wire:click="buttonDecrease('pets')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28"></path>
                        </svg>
                    </span>
                </button>
                
                <span aria-hidden="true">{{ $inputPets }}</span>

                <button class="_btn" {{ $disableButton['Increase']['pets'] ? 'disabled' : '' }} type="button" aria-label="aumentar valor" wire:click="buttonIncrease('pets')">
                    <span>
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                            <path d="m2 16h28m-14-14v28"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <div class="_txtec">If you are lucky enough to have more than 2 pets with you, be sure to let your host know.</div>
</div>