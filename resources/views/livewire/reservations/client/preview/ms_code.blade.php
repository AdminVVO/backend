<div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
    <h2 class="h2_publish">Reservation Form</h2>
    <div class="fx fx-ai-c fx-fw-w" style="gap: 46px;">
        <h2 class="h2_publish">MS Code: <span class="h2_publishgris">0702838</span></h2>
    </div>
</div>

<div style="margin-top: 22px;">
    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">VVO Confirmation Number:</span>
            <p class="_txtec txt_upper">{{ $content['vvo_confirm'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Date:</span>
            <p class="_txtec txt_upper">{{ Carbon\Carbon::parse( $content['date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Costumer Name:</span>
            <p class="_txtec _txtcapit">{{ $content['costumb_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Spouse Name:</span>
            <p class="_txtec _txtcapit">{{ $content['spouse_name'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Address:</span>
            <p class="_txtec _txtcapit">{{ $content['address'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Phone:</span>
            <p class="_txtec">{{ $content['phone'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Occupation:</span>
            <p class="_txtec _txtcapit">{{ $content['occupation'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Spouse Occupation:</span>
            <p class="_txtec _txtcapit">{{ $content['spouse_occupation'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Marital Status:</span>
            <p class="_txtec _txtcapit">{{ $content['status_marital'] }}</p>
        </div>

        <div class="block">
            <span class="_txteh">Ages:</span>
            <p class="_txtec">{{ $content['ages'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Combined Yearly Income:</span>
            <p class="_txtec">$ {{ $content['combine_amount'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Type Card:</span>
            <div class="block_img">
                <img src="{{ URL::asset('assets/img/card/') }}/{{ $content['type_card'] }}.png" alt="">
                <p class="_txtec _txtcapit">{{ $content['type_card'] }}</p>
            </div>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Resort:</span>
            <p class="_txtec">{{ $content['name_site'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Unit:</span>
            <p class="_txtec">{{ $content['guest_number'] }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh"># in the Party:</span>
            <p class="_txtec">{{ $content['in_party'] }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh"># of Nights:</span>
            <p class="_txtec">{{ $content['of_night'] }}</p>
        </div>
    </div>

    <div class="content_celest_form">
        <div class="block">
            <span class="_txteh">Check in:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $content['checkin'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Check out:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $content['checkout'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>
    </div>

    <div class="content_celest_form content_celest_form_bg">
        <div class="block">
            <span class="_txteh">Preferred Tour Date:</span>
            <p class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $content['preferenc_tour'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</p>
        </div>

        <div class="block pl40">
            <span class="_txteh">Gifting:</span>
            <p class="_txtec">$ {{ $content['gifting'] }}</p>
        </div>
    </div>

</div>