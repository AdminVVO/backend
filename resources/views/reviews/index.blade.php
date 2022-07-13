@extends('layouts.App')

@section('title')
    reviews
@endsection

@section('css')
    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/modals-admin.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('assets/css/modals-user.css') }}" rel="stylesheet" />
@endsection

@section('header')
    @include('layouts.HeaderAuth')
@endsection


@section('content')
    <section class="entero">
        <div class="medio">
            {{-- CONTENT INTERNA --}}
            <div class="content_international">

                <div class="content-info-hosted">
                    <main class="site-content">

                        <div class="content-user-nvl">
                            <div class="content-starg fx-ai-b gp8 skeleton skeleton_txt">
                                <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" role="presentation"
                                    focusable="false" style="height: 16px; width: 16px; fill: #FF5A5F;">
                                    <path
                                        d="M15.094 1.579l-4.124 8.885-9.86 1.27a1 1 0 0 0-.542 1.736l7.293 6.565-1.965 9.852a1 1 0 0 0 1.483 1.061L16 25.951l8.625 4.997a1 1 0 0 0 1.482-1.06l-1.965-9.853 7.293-6.565a1 1 0 0 0-.541-1.735l-9.86-1.271-4.127-8.885a1 1 0 0 0-1.814 0z">
                                    </path>
                                </svg>
                                <h2>
                                    <span class="num-starg">4.89 ·</span>
                                    <span class="num-tg">(57 reviews)</span>
                                </h2>
                            </div>

                            <div class="block-flex">
                                <div class="w100">
                                    <div class="ciubx">
                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Cleanliness</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    
                                                    <span class="_lvl" style="width: {{20*$data['rating_cleanliness']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_cleanliness'] }}</span>
                                            </div>
                                        </div>

                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Communication</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    <span class="_lvl" style="width: {{20*$data['rating_communication']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_communication'] }}</span>
                                            </div>
                                        </div>

                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Check-in</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    <span class="_lvl" style="width: {{20*$data['rating_check']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_check'] }}</span>
                                            </div>
                                        </div>

                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Accuracy</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    <span class="_lvl" style="width: {{20*$data['rating_accuracy']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_accuracy'] }}</span>
                                            </div>
                                        </div>

                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Location</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    <span class="_lvl" style="width: {{20*$data['rating_location']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_location'] }}</span>
                                            </div>
                                        </div>

                                        <div class="_flex-lvl">
                                            <div class="_txtec skeleton skeleton_txt">Value</div>
                                            <div class="_bkl skeleton">
                                                <div class="_nivel">
                                                    <span class="_lvl" style="width: {{20*$data['rating_value']}}%;"></span>
                                                </div>
                                                <span class="_txtecnum">{{ $data['rating_value'] }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn-red alants mr-t24 skeleton">Show all 57
                                        reviews</button>
                                </div>
                                <br><br>
                                <div class="usrscont">
                                    <div class="cblock">
                                        @foreach ($data['content'] as $item)
                                            <div class="content-user_inf">
                                                <span class="_pf-msg skeleton">
                                                    @if (file_exists(storage_path('app/public/uploadAvatar/' . $item['avatar'])))
                                                        <img src="{{ URL::asset('storage/uploadAvatar/') . '/' . $item['avatar'] }}"
                                                            loading="lazy" alt="">
                                                    @else
                                                        <img src="{{ URL::asset('assets/img/avatar') }}/{{ $item['avatar'] }}"
                                                            loading="lazy" alt="">
                                                    @endif
                                                </span>
                                                <div>
                                                    <div class="_txteh skeleton skeleton_txt">
                                                        {{ $item['full_name'] }}
                                                    </div>
                                                    <ol class="skeleton skeleton_txt">
                                                        <li class="_txtec">{{ $item['created_at'] }}</li>
                                                    </ol>
                                                </div>
                                            </div>

                                            <div class="msgcont skeleton">
                                                <span class="_txtec text_tm3">{{ $item['comment'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>


                    </main>

                </div>
            </div>

        </div>

        <button type="button" class="content_icon-leng" id="btnLeng">
        </button>
    </section>
@endsection
@section('script')
    <!-- SCRIPT JAVASCRIPT -->

    <script src="{{ URL::asset('assets/js/places.js') }}"></script>
    <script src="{{ URL::asset('assets/js/slider_home.js') }}"></script>
    <script>
        lightbox(document.getElementById('gallery-container'));

        var vvoRangePicker = new Lightpick({
            field: document.getElementById('showPicker-interna'),
            inline: true,
            selectForward: true,
            singleDate: false,
            hoveringTooltip: true,
            numberOfMonths: 2,
            minDate: moment().startOf('MMMM D, YYYY').add(0, 'day'),
            onSelect: function(start, end) {
                var str = '',
                    ipts = '',
                    ipte = '';

                ipts += start ? start.format('MMM DD, YYYY') : '';
                ipte += end ? end.format('MMM DD, YYYY') : '';

                str += start ? start.format('MMM DD, YYYY') + ' - ' : 'Add your travel dates for exact pricing';
                str += end ? end.format('MMM DD, YYYY') : '';

                document.getElementById('show__date-fechas').innerHTML = str;
                $(".checkin__lightpicker").val(ipts);
                $(".checkout__lightpicker").val(ipte);
            },
            footer: true,
            locale: {
                buttons: {
                    prev: '',
                    next: '',
                    reset: 'Clear dates',
                    apply: ''
                }
            }
        });

        vvoRangePicker.el.classList.add("vvo_range_picker");

        // modal calendario
        var vvoRangePickerPopup = new Lightpick({
            field: document.getElementById('showPickerCheckinput'),
            inline: true,
            selectForward: true,
            singleDate: false,
            hoveringTooltip: true,
            numberOfMonths: 2,
            minDate: moment().startOf('MMMM D, YYYY').add(0, 'day'),
            onSelect: function(start, end) {
                var ipts = '',
                    ipte = '';

                ipts += start ? start.format('MMM DD, YYYY') : '';
                ipte += end ? end.format('MMM DD, YYYY') : '';

                $("#checkIn-book_edit").val(ipts);
                $("#checkOut-book_edit").val(ipte);
            },
            footer: true,
            locale: {
                buttons: {
                    prev: '',
                    next: '',
                    reset: 'Cancel',
                    apply: ''
                }
            }
        });
        vvoRangePickerPopup.el.classList.add("vvo_range_picker");

        $(".lightpick-apply-action").appendTo(".popup-dates-edit .lightpick__footer");
    </script>
@endsection
