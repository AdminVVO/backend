<div class="_bef-places">
    <div>
        <div class="_cont-places">
            <div class="_inf">
                <div class="_txteh">Adultos</div>
                <div class="_txtec">Edad: 13 años o más</div>
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
                <div class="_txteh">Niños</div>
                <div class="_txtec">De 2 a 12 años</div>
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
                <div class="_txteh">Bebés</div>
                <div class="_txtec">Menos de 2 años</div>
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
                <div class="_txteh">Mascotas</div>
                <a href="#" class="_btnsm">¿Llevarás un animal de asistencia?</a>
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

    <div class="_txtec">Si tienes la suerte de tener más de 2 mascotas contigo, asegúrate de avisarle a tu anfitrión.</div>
</div>