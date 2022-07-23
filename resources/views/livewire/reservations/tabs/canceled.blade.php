<div class="_scrolltable scroll_n" style="margin-top: 50px;">
    <div class="_width">
        <table class="_tb-reservations">
            <thead>
                <tr>
                    <td>
                        <div class="_txtec">Status</div>
                    </td>
                    <td>
                        <div class="_txtec">Guests</div>
                    </td>
                    <td>
                        <div class="selected-blu">
                            <select name="" id="">
                                <option>Check-in</option>
                            </select>

                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="6.052"
                                viewBox="0 0 10.584 6.052">
                                <path
                                    d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z"
                                    transform="translate(-6.188 -11.246)" fill="#00b5dd" />
                            </svg>
                        </div>
                    </td>
                    <td>
                        <div class="_txtec">Checkout</div>
                    </td>
                    <td>
                        <div class="_txtec">Booked</div>
                    </td>
                    <td>
                        <div class="_txtec">Listing</div>
                    </td>
                    <td>
                        <div class="_txtec">COVID-19 support payment</div>
                    </td>
                    <td>
                        <div class="_txtec">Total payout</div>
                    </td>
                    <td>
                        <div class="_txtec">Reservation amount</div>
                    </td>
                </tr>
            </thead>

            <tbody>
                @foreach($reservation as $key => $data)
                <tr>
                    <td>
                        <div class="_txtec">2021-11-10</div>
                        <div class="_txtec16">by guest</div>
                    </td>
                    <td>
                        <div class="_txtblu _txtcapit">{{$data['name']}}</div>
                        <div class="_txtec">{{$data['number_guests']}} adults</div>
                    </td>
                    <td>
                        <div class="_txtec">{{$data['checkin']}}</div>
                    </td>
                    <td>
                        <div class="_txtec">{{$data['checkout']}}</div>
                    </td>
                    <td>
                        <div class="_txtec">{{$data['booked']}}</div>
                        <div class="_txtec16">{{$data['booked_hour']}}</div>
                    </td>
                    <td>
                        <div class="_txtec txt_upper">{{$data['title']}}</div>
                    </td>
                    <td>
                        <div class="_txtec">Not applicable</div>
                        <div class="_txtec16">booked after Mar 14, 2020</div>
                    </td>
                    <td>
                        <div class="_txtec">${{number_format($data['total_payout'], 2)}}</div>
                    </td>
                    <td>
                        <div class="_fblock">
                            <div class="_txtec">${{number_format($data['reservation_amount'], 2)}}</div>
                            <button class="btn-border">Details</button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
