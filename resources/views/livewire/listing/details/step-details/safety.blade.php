<div class="block {{ $classActive['safety'] ? 'edit_listing_post' : ''}}">
    <h2 class="h2-guests">Guest safety</h2>

    <div class="fx fx-ai-b fx-jc-sb" style="gap: 25px;">
        <div class="w100">
            <h3 class="_txteh">Property type</h3>
            <div class="show_info">
                <div class="_width_text _width_flex fx">
                    <div class="w">
                        @foreach ( $content['safety_name'] as $element )
                            <p class="_txtec">{{ $element }}</p>
                        @endforeach
                    </div>
                </div>
            </div>

            <form wire:submit.prevent="submitSafety" class="show_form_input" style="margin-top: 21px;">
                <div class="fx fx-fw-w" style="gap: 21px;">
                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="safety" wire:model.defer="content.safety" value="smoke_alarm">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Smoke alarm</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="safety" wire:model.defer="content.safety" value="first_kit">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">First aid kit</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="safety" wire:model.defer="content.safety" value="monoxide_alarm">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Caroom monoxide alarm</span>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w28_h28">
                        <label class="block-lb fx-ai-fs fx-jc-fs" style="gap: 13px;">
                            <input type="checkbox" name="safety" wire:model.defer="content.safety" value="fire_extinguisher">
                            <span class="before_check_cuadro">
                                <div class="flex-centrado" style="width: inherit;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12.448" viewBox="0 0 16.693 12.448">
                                        <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#fff"></path>
                                    </svg>
                                </div>
                            </span>

                            <div class="bfx_svg">
                                <div class="w100">
                                    <span class="_txtec">Fire extinguisher</span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>

                <div class="fx fx-fw-w fx-jc-sb" style="gap: 12px; margin-top: 25px;">
                    <div class="_btnsmleft click_cancel_listing" wire:click='disabledClass("safety")'>
                        <span>Cancel</span>
                    </div>
                    <button class="btn-celest">Save</button>
                </div>
            </form>
        </div>

        <div class="_btnsm edit" wire:click='activeClass("safety")'>
            <span class="_fcontent">
                Edit
                <span class="_svg-asm">
                    <img src="{{ URL::asset('assets/img/icons/down-right.svg') }}" alt="">
                </span>
            </span>
        </div>
    </div>
</div>