<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vvoutlet</title>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/3ebe5f560f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">

    <link rel="stylesheet" href="{{ URL::asset('assets/css/vvo.css') }}">
</head>
<body>

    <div class="mbrbbcwmw">
        <a href="" class="l-b">
            <header class="h111 flex-centrado">
                <img src="https://platform.vivevacationsoutlet.com/assets/img/vvo-logo.svg" alt="vvoutlet logo">
                {{-- <img src="{{URL::asset('assets/img/vvoutlet.svg')}}" alt=""> --}}
            </header>
        </a>

        <section class="sect-info-vvo">
            <div class="container">
                <div class="fx fx-fd-c gp21">
                    <h1 class="f-b-black35">Tell your experience to other guests</h1>

                    <div class="mr-t5">
                        <div class="bpbb">
                            <div class="fx fx-ai-c fx-fw-w gp21">
                                <div class="fxbrwmh">
                                    <img src="https://platform.vivevacationsoutlet.com/assets/img/avatar/1.png" alt="">
                                    {{-- <img src="{{URL::asset('assets/img/avatar') .'/'. $contentMessage[2]}}" alt=""> --}}
                                </div>

                                <div class="f2-b-black16">Rate your stay at  {{$contentMessage[1]}} accommodation</div>
                            </div>
                        </div>
                    </div>

                    <div class="star_rating_vvo">
                        <ul class="fx fx-jc-c fx-fw-w gp6">
                            <li data-star-desc="Bad" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"></path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Appalling</div>
                            </li>

                            <li data-star-desc="Bored" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"></path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Bad</div>
                            </li>

                            <li data-star-desc="Well" class="active">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"></path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Acceptable</div>
                            </li>

                            <li data-star-desc="Good" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"></path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Okay</div>
                            </li>

                            <li data-star-desc="Excellent" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" viewBox="0 0 41.449 39.906" style="fill: currentcolor;">
                                    <path d="M18.68,1.1A2.5,2.5,0,0,0,17.663,2.21l-4.5,9.7L2.385,13.3A2.5,2.5,0,0,0,.227,16.1l.039.219a2.5,2.5,0,0,0,.769,1.318l7.943,7.151L6.835,35.535A2.5,2.5,0,0,0,8.8,38.472l.225.035a2.5,2.5,0,0,0,1.517-.323l9.391-5.443,9.392,5.443a2.5,2.5,0,0,0,3.415-.908l.1-.2a2.5,2.5,0,0,0,.184-1.539L30.88,24.784l7.945-7.151A2.5,2.5,0,0,0,39.01,14.1l-.156-.159a2.5,2.5,0,0,0-1.38-.647L26.7,11.908l-4.5-9.7A2.5,2.5,0,0,0,18.878,1Z" transform="translate(0.797 0.377)" stroke-linecap="round" stroke-width="2"></path>
                                </svg>

                                <div class="f-b-black14 mr-t5">Excellent</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mr-t76">
                    <p class="_txtec">As you have just stayed at {{$contentMessage[1]}} accommodation, your comments will help other guests to get an idea of what their stay will be like.</p>

                    <div class="mr-t40">
                        <a href="https://platform.vivevacationsoutlet.com/message?review={{$contentMessage[3]}}" class="btn-celest">Write a review</a>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="container">
                <div class="mr-t40 mr-b21">
                    <div class="fx fx-ai-c fx-jc-sb fx-fw-w gp21">
                        <a href="">

                            <img src="https://platform.vivevacationsoutlet.com/assets/img/logo.png" alt="vvoutlet logo">
                        </a>

                        <div class="fx fx-ai-c fx-fw-w gp12">
                            <a href="https://www.facebook.com/vvoutlet.travelnow" target="_blank" class="link__red-social-vvo">
                                <i class="fa-brands fa-facebook"></i>
                            </a>

                            <a href="https://www.instagram.com/vvoutlet.travelnow/" target="_blank" class="link__red-social-vvo">
                                <i class="fa-brands fa-instagram"></i>
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