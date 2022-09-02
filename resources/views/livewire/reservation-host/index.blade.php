<section class="entero">
    <div class="medio">
        <div class="_section-reserva _section-r">
            <div class="content-scroll-reserva scroll_n">
                <div class="tabs_items_group scroll_n">
                    <h3 class="tabs_items {{ $statusBar === 'upcoming' ? 'active_tabs' : '' }}" wire:click="changeStatusBar('upcoming')">Upcoming</h3>
                    <h3 class="tabs_items {{ $statusBar === 'completed' ? 'active_tabs' : '' }}" wire:click="changeStatusBar('completed')">Completed</h3>
                    <h3 class="tabs_items {{ $statusBar === 'canceled' ? 'active_tabs' : '' }}" wire:click="changeStatusBar('canceled')">Canceled</h3>
                    <h3 class="tabs_items {{ $statusBar === 'all' ? 'active_tabs' : '' }}" wire:click="changeStatusBar('all')">All</h3>
                </div>

                <div class="btn-right-scroll">
                    <span class="bg-btn-right">
                        <i class="fas fa-chevron-right"></i>
                    </span>
                </div>
            </div>

            <div class="_bgpadd-f">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48.837 59.797">
                    <path d="M27.919,57.8S49.838,46.838,49.838,30.4V11.22L27.919,3,6,11.22V30.4C6,46.838,27.919,57.8,27.919,57.8Z" transform="translate(-3.5 -0.5)" fill="none" stroke="#ff5a5f" stroke-linecap="round" stroke-linejoin="round" stroke-width="5"/>
                </svg>
                <div>
                    <div class="_txteh" style="margin-bottom: 12px;">Helth and safety guidance for Hosts amd guests</div>
                    <p class="_txtec">As travel picks up again, we Want to help our Hosts and guests remain safe. Please follow the health and safety guidance if you have any interaction with guests. <a href="#" class="_txtblu">Review the Guidelines</a></p>
                </div>
            </div>

            <div class="_scrolltable" style="margin-top: 50px;">
                <div class="_width">
                    @forelse($contentHost as $reservation )
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
                                        <div class="_txtec">Check-in</div>
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
                                    @if ( $statusBar === 'canceled' )
                                        <td>
                                            <div class="_txtec">Reservation amount</div>
                                        </td>
                                    @endif

                                    <td></td>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="{{ $reservation['status_reserv']['color'] }}">{{ $reservation['status_reserv']['name'] }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtblu _txtcapit">{{ $reservation['user']['name'] }}</div>
                                        <div class="_txtec">{{ $reservation['guest']['adult'] .' Adult' }}{{ isset( $reservation['guest']['kids'] ) ? ", {$reservation['guest']['kids']} Kids" : '' }}{{ isset( $reservation['guest']['infant'] ) ? ", {$reservation['guest']['infant']} Infant" : '' }}{{ isset( $reservation['guest']['pets'] ) ? ", {$reservation['guest']['pets']} Pets" : '' }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ Carbon\Carbon::parse( $reservation['date_in'], 'UTC')->locale('en')->isoFormat('ll') }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ Carbon\Carbon::parse( $reservation['date_out'], 'UTC')->locale('en')->isoFormat('ll') }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">{{ Carbon\Carbon::parse( $reservation['created_at'], 'UTC')->locale('en')->isoFormat('ll') }}</div>
                                        <div class="_txtec16">{{ Carbon\Carbon::parse( $reservation['created_at'], 'UTC')->locale('en')->isoFormat('LTS z') }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec txt_upper">{{ $reservation['listings']['title'] }}</div>
                                    </td>
                                    <td>
                                        <div class="_txtec">${{ $reservation['total_amount'] }}</div>
                                    </td>
                                    @if ( $statusBar === 'canceled' )
                                        <td>
                                            <div class="_txtec">${{ $reservation['reserv_amount'] }}</div>
                                        </td>
                                    @endif
                                    <td>
                                        <div class="_fblock">
                                            <button class="btn-border js__detailsMdlReservation">Details</button>
                                            @if ( $statusBar != 'canceled' )
                                                <span class="_options">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="_svg28">
                                                        <path fill="currentColor" d="M304 256c0 26.5-21.5 48-48 48s-48-21.5-48-48 21.5-48 48-48 48 21.5 48 48zm120-48c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48zm-336 0c-26.5 0-48 21.5-48 48s21.5 48 48 48 48-21.5 48-48-21.5-48-48-48z"></path>
                                                    </svg>
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    @empty
                        <div class="_bgpadd">
                            <div class="_w">
                                <i class="far fa-calendar-check"></i>
                                @if ( $statusBar === 'upcoming' || $statusBar === 'all' )
                                    <p class="_txtec">You dont't have any guests staying with you right now.</p>
                                @elseif ( $statusBar === 'completed' )
                                    <p class="_txtec">You have no completed reservations at this time.</p>
                                @else
                                    <p class="_txtec">You have no canceled reservations at this time.</p>
                                @endif
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>