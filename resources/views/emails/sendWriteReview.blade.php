<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vvoutlet</title>

    <!-- font awesome pro -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet">

    <style>
        .fa-brands,
        .fab {
            font-family: "Font Awesome 6 Brands";
            font-weight: 400;
        }

        .fa,
        .fa-brands,
        .fa-duotone,
        .fa-light,
        .fa-regular,
        .fa-solid,
        .fa-thin,
        .fab,
        .fad,
        .fal,
        .far,
        .fas,
        .fat {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: var(--fa-display, inline-block);
            font-style: normal;
            font-variant: normal;
            line-height: 1;
            text-rendering: auto;
        }

        .fa-facebook:before {
            content: "\f09a";
        }

        ._txtec {
            font-size: 16px;
            line-height: 20px;
            font-weight: normal;
            color: #7D7D7D;
        }

        .btn-celest {
            display: inline-block;
            width: fit-content;
            padding: 14px 24px;
            font-size: 16px;
            font-weight: normal;
            line-height: 20px;
            border-radius: 8px;
            background-color: #00B5DD;
            color: #FFFFFF;
        }

        .btn-celest:hover {
            background-color: #0096B7;
        }

        .btn-celest:active {
            transform: scale(0.96);
            background-color: #0096B7;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: rgba(227, 237, 243, 0.3);
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
            font-family: "Lato", sans-serif;
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
            font-family: "Lato", sans-serif;
        }

        li {
            list-style: none;
        }

        button {
            outline: none;
            border-style: none;
            background: none;
            cursor: pointer;
        }

        select,
        textarea {
            border-style: none;
            background: none;
            outline: none;
        }

        input {
            background: #FFFFFF;
            outline: none;
            border: 0;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            margin: auto;
            padding: 0 25px;
        }

        .ifx {
            display: inline-flex;
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

        .fx-jc-e {
            justify-content: end;
        }

        .fx-ai-c {
            align-items: center;
        }

        .fx-ai-b {
            align-items: baseline;
        }

        .fx-ai-fs {
            align-items: flex-start;
        }

        .fx-ai-fe {
            align-items: flex-end;
        }

        .fx-ai-s {
            align-items: stretch;
        }

        .fx-jc-fs {
            justify-content: flex-start;
        }

        .fx-jc-r {
            justify-content: right;
        }

        .fx-fw-w {
            flex-wrap: wrap;
        }

        .fx-fd-c {
            flex-direction: column;
        }

        .flex-centrado {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gp21 {
            gap: 21px;
        }

        .gp12 {
            gap: 12px;
        }

        .gp6 {
            gap: 6px;
        }

        .mr-t76 {
            margin-top: 76px;
        }

        .mr-t40 {
            margin-top: 40px;
        }

        .mr-t21 {
            margin-top: 21px;
        }

        .mr-b21 {
            margin-bottom: 21px;
        }

        .mr-t5 {
            margin-top: 5px;
        }

        .f-b-black35 {
            font-size: 35px;
            color: #2A2A2A;
            font-weight: bold;
            line-height: 42px;
        }

        .f-b-white35 {
            font-size: 35px;
            color: #FFFFFF;
            font-weight: bold;
            line-height: 42px;
        }

        .f-b-white25 {
            font-size: 25px;
            color: #FFFFFF;
            font-weight: bold;
            line-height: 30px;
        }

        .f-r-white16 {
            font-size: 16px;
            color: #FFFFFF;
            font-weight: normal;
            line-height: 20px;
        }

        .f2-b-black18 {
            font-size: 18px;
            color: #333333;
            font-weight: bold;
            line-height: 24px;
        }

        .f2-b-black16 {
            font-size: 16px;
            color: #333333;
            font-weight: bold;
            line-height: 20px;
        }

        .f-r-7d14 {
            font-size: 14px;
            color: #7D7D7D;
            font-weight: normal;
            line-height: 16px;
        }

        .f-b-black14 {
            font-size: 14px;
            color: #2A2A2A;
            font-weight: bold;
            line-height: 16px;
        }

        .mbrbbcwmw {
            margin: 68px auto;
            border-radius: 20px;
            border: 1px solid #E3EDF3;
            background-color: #FFFFFF;
            width: 100%;
            max-width: 540px;
        }

        .sect-info-vvo {
            padding: 45px 0;
        }

        .l-b {
            border-bottom: 1px solid #E3EDF3;
        }

        .h111 {
            height: 111px;
        }

        .wm34 {
            width: 34px;
            min-width: 34px;
        }

        .bpbb {
            border: 1px solid #7D7D7D;
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
        }

        .fxbrwmh {
            display: flex;
            border-radius: 50%;
            overflow: hidden;
            width: 56px;
            min-width: 56px;
            height: 56px;
        }

        .fxbrwmh img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .link__red-social-vvo {
            position: relative;
            width: fit-content;
        }

        .link__red-social-vvo i {
            position: relative;
            font-size: 21px;
            color: #D1D1D1;
            transition: color 0.5s ease;
        }

        .link__red-social-vvo:hover i {
            color: #00B5DD;
        }

        .star_rating_vvo ul {
            margin-right: -46px;
        }

        .star_rating_vvo li {
            color: #FFFFFF;
            text-align: center;
            padding-right: 46px;
        }

        .star_rating_vvo svg {
            width: 38px;
            stroke: #7D7D7D;
        }
    </style>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/vvo-correo.css') }}">
</head>

<body>

    <div class="mbrbbcwmw">
        <a href="" class="l-b">
            <header class="h111 flex-centrado">
                <img src="{{ URL::asset('assets/img/vvo-logo.svg') }}" alt="">
            </header>
        </a>

        <section class="sect-info-vvo">
            <div class="container">
                <div class="fx fx-fd-c gp21">
                    <h1 class="f-b-black35">Tell your experience to other guests</h1>

                    <div class="mr-t5">
                        <div class="bpbb">
                            <div class="fx fx-ai-c gp21">
                                <div class="fxbrwmh">
                                    <img src="{{ URL::asset('assets/img/avatar') . '/' . $contentMessage[2] }}"
                                        alt="">
                                </div>

                                <div class="f2-b-black16">Rate your stay at {{ $contentMessage[1] }} accommodation</div>
                            </div>
                        </div>
                    </div>

                    <div class="star_rating_vvo">
                        <ul class="fx fx-jc-c fx-fw-w gp6">
                            <li data-star-desc="Bad" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path
                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                        transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2">
                                    </path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Appalling</div>
                            </li>

                            <li data-star-desc="Bored" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path
                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                        transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2">
                                    </path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Bad</div>
                            </li>

                            <li data-star-desc="Well" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path
                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                        transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2">
                                    </path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Acceptable</div>
                            </li>

                            <li data-star-desc="Good" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path
                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                        transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2">
                                    </path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Okay</div>
                            </li>

                            <li data-star-desc="Excellent" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46"
                                    viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path
                                        d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z"
                                        transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2">
                                    </path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Excellent</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mr-t76">
                    <p class="_txtec">As you have just stayed at {{ $contentMessage[1] }} accommodation, your comments
                        will help other guests to get an idea of what their stay will be like.</p>

                    <div class="mr-t40">

                        <a href="https://platform.vivevacationsoutlet.com/message?review={{ $contentMessage[3] }}"
                            class="btn-celest">Write a review</a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="mr-t40 mr-b21">
                    <div class="fx fx-ai-c fx-jc-sb fx-fw-w gp21">
                        <a href="https://platform.vivevacationsoutlet.com">
                            <img src="{{ URL::asset('assets/img/logo.png') }}" alt="vvoutlet logo">
                        </a>

                        <div class="fx fx-ai-c fx-fw-w gp12">
                            <a href="https://www.facebook.com/vvoutlet.travelnow" target="_blank"
                                class="link__red-social-vvo">
                                <img src="{{ URL::asset('assets/img/img_fb.jpg') }}" alt="vvoutlet facebook">
                            </a>

                            <a href="https://www.instagram.com/vvoutlet.travelnow/" target="_blank"
                                class="link__red-social-vvo">
                                <img src="{{ URL::asset('assets/img/img_instagram.jpg') }}" alt="vvoutlet instagram">
                            </a>
                        </div>
                    </div>

                    <div class="mr-t21">
                        <div class="f-r-7d14">Vvotlet. Inc.</div>
                        <div class="f-r-7d14">888 Brannan St.</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
