@extends('layouts.App')

@section('title') Listings Show @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')
    
    <section class="entero c_linsting" style="margin-top: 50px;">
        <div class="medio">
            <div class="c_listing-post fx">

                {{-- Bar All Listin Right --}}
                @livewire('listing.details.content-right', ['listing' => $listing])

                @livewire('listing.details.content-left', ['listing' => $listing])

            </div>
        </div>
    </section>

    <div class="container_admin-host container_give-feedback">
        <div class="modal-anhost"></div>

        @livewire('listing.feedback', ['listing' => $listing])

    </div>

    <div class="container_admin-host container_preview_guests_pay">
        <div class="modal-anhost"></div>

        <div class="pd_anhost-modal">
            <div class="_z4lmgp">
                <div class="modal_content-anhost" style="max-width: 706px;">
                    <div class="close">
                        <span>X</span>
                    </div>

                    <div class="modal_block" style="height: 652px;">
                        <div class="content_hidden-anhost" style="margin-bottom: 0;">
                            <div class="_pdleftright35">
                                <h2 class="h2_publish" style="padding-bottom: 8px;">Preview how much guests pay</h2>
                                <p class="_txtec">Select any combination of nights, guests and pets for us to show you the final price.</p>

                                <div class="fx fx-fw-w" style="gap: 12px; margin: 24px 0 32px;">
                                    <div class="selected-modal" style="margin: 0;">
                                        <select name="" id="">
                                            <option>1 night</option>
                                            <option>2 night</option>
                                            <option>3 night</option>
                                            <option>1 week</option>
                                            <option>1 month</option>
                                        </select>

                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                        </svg>
                                    </div>

                                    <div class="pr content_show_modal_left guest-btn-modal">
                                        <button class="select_btn-border click_guest">
                                            <span>1 Guest</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                                <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                            </svg>
                                        </button>

                                        <!-- <div class="_bef-places" style="padding: 0;">
                                            <div style="padding: 5px 22px 16px 22px;">
                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Adults</div>
                                                        <div class="_txtec">Ages 13 or above</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>1</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Children</div>
                                                        <div class="_txtec">Ages 2-12</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Infants</div>
                                                        <div class="_txtec">Under 2 · Stay for free</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                <button class="btn-celest" style="float: right;">Save</button>
                                            </div>
                                        </div> -->

                                        <div class="container_admin-host" style="z-index: 1;">
                                            <div class="modal-anhost-guest click_afuera_modal"></div>
                                            <div class="pd_anhost-modal">
                                                <div class="_z4lmgp">
                                                    <div class="_bef-places _bef-places-modal">
                                                        <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                                            <div style="padding: 22px;">
                                                                <h2 class="h2-guests">How many guests?</h2>
                                                            </div>
                                                            <span class="x_modal click_x_modal">X</span>
                                                        </div>
                                                        
                                                        <div style="padding: 0 22px;">
                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Adults</div>
                                                                    <div class="_txtec">Ages 13 or above</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>1</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Children</div>
                                                                    <div class="_txtec">Ages 2-12</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Infants</div>
                                                                    <div class="_txtec">Under 2 · Stay for free</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                            <button class="btn-celest">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="pr content_show_modal_left pets-btn-modal">
                                        <button class="select_btn-border click_guest">
                                            <span>No pet</span>

                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                                                <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"></path>
                                            </svg>
                                        </button>

                                        <!-- <div class="_bef-places" style="padding: 0;">
                                            <div  style="padding: 5px 22px 16px 22px;">
                                                <div class="_cont-places">
                                                    <div class="_inf">
                                                        <div class="_txteh">Pets</div>
                                                    </div>
                                                    <div class="_2btns">
                                                        <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                        
                                                        <span>0</span>

                                                        <button class="_btn" type="button" aria-label="aumentar valor">
                                                            <span>
                                                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                    <path d="m2 16h28m-14-14v28"></path>
                                                                </svg>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                <button class="btn-celest" style="float: right;">Save</button>
                                            </div>
                                        </div> -->

                                        <div class="container_admin-host" style="z-index: 1;">
                                            <div class="modal-anhost-guest click_afuera_modal"></div>
                                            <div class="pd_anhost-modal">
                                                <div class="_z4lmgp">
                                                    <div class="_bef-places _bef-places-modal">
                                                        <div class="_c-h fx fx-jc-sb fx-ai-fs" style="border-bottom: 2px solid #E3EDF3;">
                                                            <div style="padding: 22px;">
                                                                <h2 class="h2-guests">How many pets?</h2>
                                                            </div>
                                                            <span class="x_modal click_x_modal">X</span>
                                                        </div>
                                                        
                                                        <div style="padding: 0 22px;">
                                                            <div class="_cont-places">
                                                                <div class="_inf">
                                                                    <div class="_txteh">Pets</div>
                                                                </div>
                                                                <div class="_2btns">
                                                                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                    
                                                                    <span>0</span>

                                                                    <button class="_btn" type="button" aria-label="aumentar valor">
                                                                        <span>
                                                                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
                                                                                <path d="m2 16h28m-14-14v28"></path>
                                                                            </svg>
                                                                        </span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="fx fx-jc-r" style="padding: 16px 22px; border-top: 2px solid #E3EDF3;">
                                                            <button class="btn-celest">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="border_preview_g_p">
                                    <div class="_cns _cns-mdls">
                                        <div class="hr" style="padding-bottom: 12px;">
                                            <span class="f-cth">
                                                <div>
                                                    <div class="_txtec">$32.56 for 1 night</div>
                                                    <span class="_txtblu14" style="font-weight: normal; margin-top: 3px;">your base price</span>
                                                </div>
                                                <div class="_txtec">$32.56</div>
                                            </span>

                                            <span class="f-cth">
                                                <div class="_txtec">Guest service fee</div>
                                                <div class="_txtec">$4.54</div>
                                            </span>
                                        </div>

                                        <div class="hr" style="padding-top: 12px;">
                                            <span class="f-cth">
                                                <div class="_txteh">Total</div>
                                                <div class="_txteh">$37.10</div>
                                            </span>

                                            <span class="f-cth">
                                                <div class="_txtec">your income</div>
                                                <div class="_txtec">$31.49</div>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="_pd35" style="padding-top: 21px; padding-bottom: 21px;">
                        <button class="btn-celest click_close" style="float: right;">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
     <script>

         $(".click_x_anuncio").click(function() {
            $(".anuncio_start_hosting").hide();
        });

        document.addEventListener("DOMContentLoaded", () => {
            Livewire.hook('component.initialized', (component) => {
                this.addEventListener('openModalFeedback', e => {
                    console.log('hoaosORIAN');
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);

                    $(".container_give-feedback").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });
            })

           Livewire.hook('element.updated', (el, component) => {
                this.addEventListener('openModalFeedback', e => {
                    console.log('hoaosORIAN');
                    $('html,body').animate({
                        scrollTop: $("body").offset().top
                    }, 10);

                    $(".container_give-feedback").css({'display': 'block'});
                    $(".page-category").css({'overflow': 'hidden'});
                });

                $(".input_cant_view").keyup(function() {
                    $(this).parents(".show_form_input ._flfpc").find(".views_num").text($(this).val().length);
                });
                $(".click_minumum_nights").click(function() {
                    $(".show_minimum_nights").css({'display': 'flex'});
                    $(".click_minumum_nights").css({'display': 'none'});
                });
           })
        });

     </script>
@endsection
