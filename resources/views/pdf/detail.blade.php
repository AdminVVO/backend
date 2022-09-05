<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VVO</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Lato', sans-serif !important;
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
            font-family: 'Lato', sans-serif !important;
        }

        img {
            max-width: 100%;
            display: block;
        }
    </style>

</head>
<body class="page-category">

    <section style="padding-bottom: 48px;">
        <div style="padding: 2.5rem 80px 0;">
            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <header>
                    {{-- <img src="{{ URL::asset('assets/img/icons/vvoutlet.svg') }}" alt=""> --}}
                    {{-- <img src="img/vvoutlet.svg" style="width: 200px; min-width: 200px;"> --}}
                </header>

                <div class="_txtbold3a35 mr-t38" style="font-size: 35px; color: #000; font-weight: normal; margin-top: 38px;">{{$reservation['title']}}</div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 21px;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 19px; color: #333; font-weight: normal;">{{$reservation['date_in']}}</div>
                    {{-- <div style="font-size: 19px; color: #333; font-weight: normal;">16:00</div> --}}
                </div>

                <div style="display: flex; flex-direction: column; text-align: right; gap: 8px;">
                    <div style="font-size: 19px; color: #333; font-weight: normal;">{{$reservation['date_out']}}</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal;">11:00</div>
                </div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 20px; color: #333; font-weight: normal;">¿Who is with you?</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal;">1 guest</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal;">{{$reservation['client_name']}}</div>
                </div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 20px; color: #333; font-weight: normal;">Confirmation code</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal; text-transform: uppercase;">{{$reservation['code_reservation']}}</div>
                </div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 20px; color: #333; font-weight: normal;">Address</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal;">{{$reservation['street']}},{{$reservation['zip_code']}} {{$reservation['state']}}, {{$reservation['city']}}, España</div>
                </div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 19px; color: #333; font-weight: normal;">Host: {{$reservation['host_name']}}</div>
                </div>
            </div>

            <div style="padding: 35px 0; border-bottom: 1px solid #E3EDF3;">
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <div style="font-size: 20px; color: #333; font-weight: normal;">Total cost</div>
                    <div style="font-size: 19px; color: #333; font-weight: normal; text-transform: uppercase;">${{$reservation['total_amount']}} {{$reservation['currency_default']}}</div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>