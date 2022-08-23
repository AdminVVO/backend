    <div class="_menu-options" wire:ignore.self>
        <div class="_menu-options-items _shadow-black3-6">
            <ul>
                <li>
                    <div class="_mxpadd">
                        <div class="_txtec">Reservation code: </div>
                        <div class="_txtec txt_upper">hmrckrthz8</div>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="_b-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18.191" height="18.227" viewBox="0 0 18.191 18.227">
                            <path
                                d="M19.559,15.3v2.472a1.648,1.648,0,0,1-1.8,1.648,16.31,16.31,0,0,1-7.112-2.53A16.071,16.071,0,0,1,5.7,11.942,16.31,16.31,0,0,1,3.175,4.8,1.648,1.648,0,0,1,4.815,3H7.287A1.648,1.648,0,0,1,8.935,4.417a10.582,10.582,0,0,0,.577,2.316,1.648,1.648,0,0,1-.371,1.739L8.095,9.519a13.187,13.187,0,0,0,4.945,4.945l1.047-1.047a1.648,1.648,0,0,1,1.739-.371,10.582,10.582,0,0,0,2.316.577A1.648,1.648,0,0,1,19.559,15.3Z"
                                transform="translate(-2.268 -2.1)" fill="none" stroke="#7d7d7d"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" />
                        </svg>
                        <div><a class="_txtec" id="tel" href="tel:{{ $phone }}">Call {{ $phone }}</a></div>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="_b-flex">
                        <i class="far fa-envelope _i-gris18"></i>
                        <div><a class="_txtec" href="{{ route('messageUserIndex') }}" class="btn-border">Message</a>
                        </div>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="_b-flex">
                        <i class="far fa-window-close _i-gris18"></i>
                        <div class="_txtec">Change or cancel</div>
                    </div>
                </li>
            </ul>

            <ul>
                <li>
                    <div class="_b-flex">
                        <i class="far fa-money-bill-alt _i-gris18"></i>
                        <div class="_txtec">Send or request money</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>