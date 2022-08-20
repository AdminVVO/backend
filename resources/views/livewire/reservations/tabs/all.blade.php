<div class="_scrolltable scroll_n" style="margin-top: 50px; overflow:initial;">
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
                        <div class="_txtec">Total payout</div>
                    </td>

                    <td></td>
                </tr>
            </thead>

            <tbody>
                @foreach ($reservation as $key => $data)
                    <tr>
                        <td>
                            @if ($data['status'] == 0)
                                <div class="_txtverd">Confirmed</div>
                            @elseif($data['status'] == 1)
                                <div class="_txtverd">Arriving tomorrow</div>
                            @elseif($data['status'] == 2)
                                <div class="_txtred">Trip Request</div>
                            @elseif($data['status'] == 3)
                                <div class="_txtverd">Currently hosting</div>
                            @elseif($data['status'] == 4)
                                <div class="_txtec">Review Guest</div>
                            @elseif($data['status'] == 5)
                                <div class="_txtec">Past Guest</div>
                            @elseif($data['status'] == 6)
                                <div class="_txtverd">Bye Guest</div>
                            @endif
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
                            <div class="_txtec">${{ number_format($data['total_payout'], 2) }}</div>
                        </td>
                        <td>
                            <div class="_fblock">
                                @if ($data['status'] == 4)
                                    {{-- <button class="btn-border_red js__reviewMdlReservation" wire:click="updateReviews({{$key}})">Review</button> --}}
                                    <button class="btn-border js__detailsMdlReservation"
                                    wire:click="updateDetail({{ $key }})">Details</button>
                                @else
                                    <button class="btn-border js__detailsMdlReservation"
                                        wire:click="updateDetail({{ $key }})">Details</button>
                                @endif
                                <span class="_options" wire:click="updatePhone({{ $data['phone'] }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="_svg28">
                                        <path fill="currentColor"
                                            d="M304 256c0 26.5-21.5 48-48 48s-48-21.5-48-48 21.5-48 48-48 48 21.5 48 48zm120-48c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48zm-336 0c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </td>
                    </tr>
                @endforeach
                @livewire('reservations.tabs.modals.options')
                @livewire('reservations.tabs.modals.details')
                @livewire('reservations.tabs.modals.reviews')
            </tbody>
        </table>
    </div>
</div>
