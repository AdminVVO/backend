<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .mr-b17 {
            margin-bottom: 17px;
        }

        .container {
            padding: 0 80px;
        }

        .logo {
            width: 130px;
            min-width: 130px;
        }

        a {
            display: block;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Lato", sans-serif !important;
        }

        p,
        b,
        a,
        li,
        div,
        span,
        strong,
        button,
        label,
        input,
        textarea,
        th,
        td,
        select,
        option {
            font-family: "Lato", sans-serif !important;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .fx {
            display: flex;
        }

        .fx-jc-sb {
            justify-content: space-between;
        }

        .fx-jc-c {
            justify-content: center;
        }

        .fx-ai-c {
            align-items: center;
        }

        .fx-ai-b {
            align-items: baseline;
        }

        .fx-fw-w {
            flex-wrap: wrap;
        }

        .fx-fd-c {
            flex-direction: column;
        }

        .hr:not(:last-child) {
            border-bottom: 1px solid #E3EDF3;
        }

        ._txtbold3a26 {
            font-size: 26px;
            color: #2A2A2A;
            font-weight: bold;
        }

        ._txt-gris16 {
            font-size: 16px;
            color: #7D7D7D;
            font-weight: normal;
        }

        ._txtboldwhite16 {
            font-size: 16px;
            color: #fff;
            font-weight: bold;
        }

        ._txtbold3316 {
            font-size: 16px;
            color: #333;
            font-weight: bold;
        }

        .mr-t38 {
            margin-top: 38px;
        }

        .pd-b48 {
            padding-bottom: 48px;
        }

        .mr-t21 {
            margin-top: 21px;
        }

        .mr-t3 {
            margin-top: 3px;
        }

        .gp18 {
            gap: 18px;
        }

        .gp17 {
            gap: 17px;
        }

        .gp21 {
            gap: 21px;
        }

        .gp20 {
            gap: 20px;
        }

        .gp38 {
            gap: 38px;
        }

        .gp10 {
            gap: 10px;
        }

        .gp8 {
            gap: 8px;
        }

        .gp7 {
            gap: 7px;
        }

        .mr-b21 {
            margin-bottom: 21px;
        }

        .wh122 {
            width: 122px;
        }

        ._txtbold3a18 {
            font-size: 18px;
            color: #2A2A2A;
            font-weight: bold;
        }

        .section-pdf .container {
            padding-top: 2.5rem;
        }

        .cont-pd {
            padding: 22px 0;
        }

        .imgs_more {
            display: flex;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        ._pf-msg {
            position: relative;
            background-color: #E3EDF3;
            border-radius: 50%;
            max-width: 42px;
            min-width: 42px;
            height: 42px;
            border: 1px solid #E3EDF3;
        }

        ._pf-msg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
        }

        ._pf-msg:nth-of-type(2) {
            margin-left: -15px;
        }

        ._pf-msg:nth-of-type(3) {
            margin-left: -15px;
        }

        ._pf-msg:nth-of-type(4) {
            margin-left: -15px;
        }

        ._txt-gris14 {
            font-size: 14px;
            color: #7D7D7D;
            font-weight: normal;
        }

        ._moreusrmsg {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(51, 51, 51, 0.72);
            border-radius: 50%;
        }

        .text-upper {
            text-transform: uppercase;
        }

        .text-capi {
            text-transform: capitalize;
        }

        .checkbox_custom {
            position: relative;
            -webkit-appearance: none;
            background-color: #FFFFFF;
            width: 55px;
            max-width: 55px;
            min-height: 32px;
            height: 32px;
            border: 1px solid #E3EDF3;
            border-radius: 63px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .checkbox_custom:checked::before {
            left: 22px;
            background-color: #00B5DD;
        }

        .checkbox_custom::before {
            content: "";
            position: absolute;
            max-width: 30px;
            width: 100%;
            height: 100%;
            min-height: 30px;
            border-radius: 50%;
            border: 1px solid #E3EDF3;
            background-color: #FF5A5F;
            top: 50%;
            transform: translate(0, -50%);
            left: -2px;
            transition: 0.3s ease;
        }
    </style>
    <title>VVO</title>
</head>

<body>
    <section class="section-pdf pd-b48">
        <div class="container">
            <div class="cont-pd hr" style="border-bottom: 1px solid #E3EDF3;">
                <header>
                    <img src="https://platform.vivevacationsoutlet.com/assets/img/logo-footer.png" class="logo"
                        alt="vvoutlet logo">
                </header>

                <div style="margin-top:23px;">
                    <div style="margin-bottom: 14px;">
                        <div>
                            <div class="_txt-gris14">INTERNATIONAL, {{ $reservation['date'] }}</div>
                            <div class="_txtbold3a26 mr-t3">Your home reservation</div>
                        </div>

                        <div style="margin-top: 12px;">
                            <img src="https://platform.vivevacationsoutlet.com/assets/img/pano-home.png" alt=""
                                class="wh-p100">
                        </div>
                    </div>

                    <h1 class="_txtbold3a18">{{ $reservation['title'] }}</h1>
                </div>
            </div>

            <div class="cont-pd hr" style="border-bottom: 1px solid #E3EDF3;">
                <div style="display:inline-block; position: relative;">
                    <div style="position: absolute; top:0; left:0;">
                        <img style="margin: auto;" src="https://i.ibb.co/jr7dqBK/calendar.jpg" alt="">
                    </div>

                    <div style="display:inline-block; margin-left:26px;">
                        <div class="_txtbold3a18">Check in</div>
                        <div style="margin-top: 7px;">
                            <div class="_txt-gris16">{{ $reservation['date_in'] }}</div>
                            <div class="_txt-gris16">4:00 PM</div>
                        </div>
                    </div>
                </div>

                <div style="margin-left:5rem; display:inline-block; position: relative;">
                    <div style="position: absolute; top:0; left:0;">
                        <img style="margin: auto;" src="https://i.ibb.co/jr7dqBK/calendar.jpg" alt="">
                    </div>

                    <div style="display:inline-block; margin-left:26px;">
                        <div class="_txtbold3a18">Check out</div>
                        <div style="margin-top: 7px;">
                            <div class="_txt-gris16">{{ $reservation['date_out'] }}</div>
                            <div class="_txt-gris16">4:00 PM</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="cont-pd hr" style="border-bottom: 1px solid #E3EDF3;">
                <div class="_txtbold3a18 mr-b21">Reservation details</div>
                <div style="margin-bottom: 16px;">
                    <div style="display: inline-block; margin-bottom: 1rem;">
                        <h3 class="_txtbold3316">Who's coming</h3>
                        <span class="_txt-gris16">{{ $reservation['next_count'] }}</span>
                    </div>
                    <img style="width: 40.6px; height:40.6px; object-fit: cover; display:inline-block; margin:0 0 15px 18px;"
                        src="https://platform.vivevacationsoutlet.com/assets/img/avatar/1.png">
                </div>

                <div>
                    <h3 class="_txtbold3316" style="margin-bottom: 8px;">Confirmation code</h3>
                    <span class="_txt-gris16 text-upper">{{ $reservation['code_reservation'] }}</span>
                </div>
            </div>

            <div class="cont-pd hr" style="border-bottom: 1px solid #E3EDF3;">
                <div class="_txtbold3a18">Getting there</div>
                <div class="_txtbold3316" style="margin-top: 19px;">Address</div>

                <div style="margin-top: 6px;">
                    <p class="_txt-gris16 text-capi">{{ $reservation['street'] }}</p>
                    <p class="_txt-gris16 text-capi">{{ $reservation['city'] }} {{ $reservation['zip_code'] }}</p>
                </div>
            </div>

            <div class="cont-pd hr">
                <div>
                    <div class="_txtbold3a18" style="margin-bottom: 21px">Payment info</div>
                    <div class="_txtbold3316" style="margin-bottom: 8px">Payment details</div>
                    <div class="_txt-gris16" style="margin-bottom: 21px">Total cost: {{ $reservation['total_amount'] }}
                        {{ $reservation['currency_default'] }}</div>
                </div>
                <div class="fx"
                    style="padding: 35px 0; align-items: center; justify-content: space-between; gap: 21px;">
                    <div style="display: inline-block; flex-direction: column; gap: 8px;">
                        <div class="_txtbold3316" style="margin-bottom: 8px">This is a business trip</div>
                        <div>
                            <div class="_txt-gris16">Your company and is travel partners will have</div>
                            <div class="_txt-gris16">Access to your trip details.</div>
                        </div>
                    </div>
                    <div style="display: inline-block; margin-left:15rem;">
                        <input type="checkbox" class="checkbox_custom">
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
