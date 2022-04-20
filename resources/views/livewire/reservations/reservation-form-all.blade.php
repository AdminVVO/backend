<table class="_tb-reservations _tb-reservation-form">
    <thead>
        <tr>
            <td>
                <div class="selected-2">
                    <select name="" id="">
                        <option>VVO Conf #;</option>
                    </select>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="16.024" viewBox="0 0 10.584 16.024">
                        <g transform="translate(-241.416 -411)">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(235.228 409.727)" fill="#7d7d7d"/>
                            <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 399.754)" fill="#7d7d7d"/>
                        </g>
                    </svg>
                </div>
            </td>
            <td>
                <div class="selected-2">
                    <select name="" id="">
                        <option>Resort Conf #</option>
                    </select>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="16.024" viewBox="0 0 10.584 16.024">
                        <g transform="translate(-241.416 -411)">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(235.228 409.727)" fill="#7d7d7d"/>
                            <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 399.754)" fill="#7d7d7d"/>
                        </g>
                    </svg>
                </div>
            </td>
            <td>
                <div class="selected-2">
                    <select name="" id="">
                        <option>Names</option>
                    </select>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="16.024" viewBox="0 0 10.584 16.024">
                        <g transform="translate(-241.416 -411)">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(235.228 409.727)" fill="#7d7d7d"/>
                            <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 399.754)" fill="#7d7d7d"/>
                        </g>
                    </svg>
                </div>
            </td>
            <td>
                <div class="_txtec">Email</div>
            </td>
            <td>
                <div class="_txtec">Telephone</div>
            </td>
            <td>
                <div class="_txtec">Checkin</div>
            </td>
            <td>
                <div class="_txtec">Checkbout</div>
            </td>

            <td>
                <div class="_txtec">Form Submission Date</div>
            </td>

            <td>
                <div class="_txtec">Show</div>
            </td>
        </tr>
    </thead>
    <tbody>
        @foreach ( $reservations as $element )
            <tr>
                <td>
                    <span class="_txteh txt_upper">{{ $element['vvo_confirm'] }}</span>
                </td>

                <td>
                    <span class="_txteh txt_upper">{{ $element['resort_confirm'] }}</span>
                </td>

                <td>
                    <span class="_txtec _txtcapit">{{ $element['costumb_name'] }}</span>
                </td>

                <td>
                    <span class="_txtec">{{ $element['email'] }}</span>
                </td>

                <td>
                    <span class="_txtec">{{ $element['phone'] }}</span>
                </td>

                <td>
                    <span class="_txtec _txtcapit">{{ $element['checkin'] }}</span>
                </td>

                <td>
                    <span class="_txtec _txtcapit">{{ $element['checkout'] }}</span>
                </td>

                <td>
                    <span class="_txtec _txtcapit">{{ Carbon\Carbon::parse( $element['date'], 'UTC')->locale('en')->isoFormat('dddd, MMMM D, YYYY') }}</span>
                </td>

                <td>
                    <a href="{{ route('ReservPreview', $element['id_reservation_forms']) }}">
                        <i class="far fa-eye _i-gris22"></i>
                    </a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>