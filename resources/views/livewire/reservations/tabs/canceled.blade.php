@if ($validatedData)
<div>
    <div class="_bgpadd-f">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.837 59.797">
            <path
                d="M27.919,57.8S49.838,46.838,49.838,30.4V11.22L27.919,3,6,11.22V30.4C6,46.838,27.919,57.8,27.919,57.8Z"
                transform="translate(-3.5 -0.5)" fill="none" stroke="#ff5a5f" stroke-linecap="round"
                stroke-linejoin="round" stroke-width="5" />
        </svg>
        <div>
            <div class="_txteh" style="margin-bottom: 12px;">Helth and safety guidance for Hosts amd guests</div>
            <p class="_txtec">As travel picks up again, we Want to help our Hosts and guests remain safe. Please
                follow the health and safety guidance if you have any interaction with guests. <a href="#"
                    class="_txtblu">Review the Guidelines</a></p>
        </div>
    </div>
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
                    @foreach ($reservation as $key => $data)
                        <tr>
                            <td>
                                <div class="_txtec">2021-11-10</div>
                                <div class="_txtec16">by guest</div>
                            </td>
                            <td>
                                <div class="_txtblu _txtcapit">{{ $data['name'] }}</div>
                                <div class="_txtec">{{ $data['number_guests'] }} adults</div>
                            </td>
                            <td>
                                <div class="_txtec">{{ $data['checkin'] }}</div>
                            </td>
                            <td>
                                <div class="_txtec">{{ $data['checkout'] }}</div>
                            </td>
                            <td>
                                <div class="_txtec">{{ $data['booked'] }}</div>
                                <div class="_txtec16">{{ $data['booked_hour'] }}</div>
                            </td>
                            <td>
                                <div class="_txtec txt_upper">{{ $data['title'] }}</div>
                            </td>
                            <td>
                                <div class="_txtec">Not applicable</div>
                                <div class="_txtec16">booked after Mar 14, 2020</div>
                            </td>
                            <td>
                                <div class="_txtec">${{ number_format($data['total_payout'], 2) }}</div>
                            </td>
                            <td>
                                <div class="_fblock">
                                    <div class="_txtec">${{ number_format($data['reservation_amount'], 2) }}</div>
                                    <button class="btn-border js__detailsMdlReservation"
                                        wire:click="updateDetail({{ $key }})">Details</button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @livewire('reservations.tabs.modals.details')
                </tbody>
            </table>
        </div>
    </div>
</div>
@else

    <div class="_bgpadd">
        <div class="_w">
            <i class="far fa-calendar-check"></i>
            <p class="_txtec">You dont't have any guests staying with you right now.</p>
        </div>
    </div>
@endif
