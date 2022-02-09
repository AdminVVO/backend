@extends('layouts.App')

@section('title') Listings @endsection

@section('css')

    <link href="{{ URL::asset('assets/css/header-admin.css') }}" rel="stylesheet"/>

@endsection

@section('header')

    @include('layouts.HeaderAuth')

@endsection

@section('content')

    <section class="entero c_linsting">
        <div class="medio">
            <div class="fx fx-jc-sb fx-ai-c fx-fw-w" style="gap: 12px;">
                <h2 class="h2-guests">5 listing</h2>
                <a href="{{ route('stepInit') }}">
                    <button class="btn-celest"><span class="margin-right: 1px;">+</span> Create listing</button>
                </a>
            </div>

            <div class="fx fx-jc-sb fx-ai-b _search">
                <div class="search_content">
                    <div class="input-wrapper">
                        <i class="fas fa-search"></i>
                        <input type="text" name="" placeholder="Search languages">
                    </div>
                </div>

                <div class="fx _g">
                    <div class="selected-modal">
                        <select name="" id="">
                            <option>Rooms and bed</option>
                        </select>

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"/>
                        </svg>
                    </div>

                    <div class="selected-modal">
                        <select name="" id="">
                            <option>Amenities</option>
                        </select>

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"/>
                        </svg>
                    </div>

                    <div class="selected-modal">
                        <select name="" id="">
                            <option>Listing status</option>
                        </select>

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"/>
                        </svg>
                    </div>

                    <div class="selected-modal">
                        <select name="" id="">
                            <option>More filters</option>
                        </select>

                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="5.965" viewBox="0 0 10.584 5.965">
                            <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538c-.287.287-1.043.022-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(-6.188 -11.246)" fill="#7d7d7d"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="_scrolltable scroll_n">
                <div class="_width _tb-listings">
                    <table class="_tb-reservations">
                        <thead>
                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <span class="before_checkblu"></span>
                                        </label>

                                        <div class="selected-2">
                                            <select name="" id="">
                                                <option>Listing</option>
                                            </select>
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="16.024" viewBox="0 0 10.584 16.024">
                                                <g transform="translate(-241.416 -411)">
                                                    <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(235.228 409.727)" fill="#7d7d7d"/>
                                                    <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 399.754)" fill="#7d7d7d"/>
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="selected-2">
                                        <select name="" id="">
                                            <option>Status</option>
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
                                    <div class="_txtec">To do</div>
                                </td>
                                <td>
                                    <div class="selected-2">
                                        <select name="" id="">
                                            <option>Instant book</option>
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
                                            <option>Bedrooms</option>
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
                                            <option>Beds</option>
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
                                            <option>Baths</option>
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
                                            <option>Location</option>
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
                                            <option>Last modified</option>
                                        </select>
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10.584" height="16.024" viewBox="0 0 10.584 16.024">
                                            <g transform="translate(-241.416 -411)">
                                                <path d="M11.482,15.474l4-4.005a.753.753,0,0,1,1.068,0,.763.763,0,0,1,0,1.071l-4.535,4.538a.755.755,0,0,1-1.043.022L6.408,12.543a.757.757,0,0,1,1.068-1.071Z" transform="translate(235.228 409.727)" fill="#7d7d7d"/>
                                                <path d="M11.482,13.071l4,4.006a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.072l-4.535-4.539a.755.755,0,0,0-1.043-.022L6.408,16a.757.757,0,0,0,1.068,1.072Z" transform="translate(235.228 399.754)" fill="#7d7d7d"/>
                                            </g>
                                        </svg>
                                    </div>
                                </td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <div class="_cont-l-img">
                                                <div class="_ad-list_img">
                                                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}">
                                                </div>
                                                <span class="before_checkblu"></span>
                                            </div>
                                        </label>

                                        <div style="margin-left: 20px;">
                                            <h3 class="_txteh txt_upper">studio resort for 4 people!</h3>
                                            <p class="_txtec16">A1-WGTS Studio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="4" fill="#2ddab4"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 10px;">listed</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn-border">Update</button>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#d1d1d1"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 7.7px;">off</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="_txtec">0</div>
                                </td>
                                <td>
                                    <div class="_txtec">2</div>
                                </td>
                                <td>
                                    <div class="_txtec">1</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">orlando, fl</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">yesterday</div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <div class="_cont-l-img">
                                                <div class="_ad-list_img">
                                                    <img src="{{ URL::asset('assets/img/card3.jpg') }}">
                                                </div>
                                                <span class="before_checkblu"></span>
                                            </div>
                                        </label>

                                        <div style="margin-left: 20px;">
                                            <h3 class="_txteh txt_upper">studio resort for 4 people!</h3>
                                            <p class="_txtec16">A1-WGTS Studio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="4" fill="#2ddab4"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 10px;">listed</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn-border">Update</button>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#d1d1d1"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 7.7px;">off</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="_txtec">0</div>
                                </td>
                                <td>
                                    <div class="_txtec">2</div>
                                </td>
                                <td>
                                    <div class="_txtec">1</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">orlando, fl</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">yesterday</div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <div class="_cont-l-img">
                                                <div class="_ad-list_img">
                                                    <img src="{{ URL::asset('assets/img/card.jpg') }}">
                                                </div>
                                                <span class="before_checkblu"></span>
                                            </div>
                                        </label>

                                        <div style="margin-left: 20px;">
                                            <h3 class="_txteh txt_upper">studio resort for 4 people!</h3>
                                            <p class="_txtec16">A1-WGTS Studio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                            <circle cx="4" cy="4" r="4" fill="#2ddab4"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 10px;">listed</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn-border">Update</button>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#d1d1d1"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 7.7px;">off</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="_txtec">0</div>
                                </td>
                                <td>
                                    <div class="_txtec">2</div>
                                </td>
                                <td>
                                    <div class="_txtec">1</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">orlando, fl</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">yesterday</div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <div class="_cont-l-img">
                                                <div class="_ad-list_img">
                                                    <img src="{{ URL::asset('assets/img/card/c8.jpg') }}">
                                                </div>
                                                <span class="before_checkblu"></span>
                                            </div>
                                        </label>

                                        <div style="margin-left: 20px;">
                                            <h3 class="_txteh txt_upper">studio resort for 4 people!</h3>
                                            <p class="_txtec16">A1-WGTS Studio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <i class="far fa-hourglass _i-gris18"></i>
                                        <div class="_txtec _txtcapit" style="margin-left: 10px;">in progress</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn-border">Finish</button>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#2ddab4"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 7.7px;">on</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="_txtec">3</div>
                                </td>
                                <td>
                                    <div class="_txtec">5</div>
                                </td>
                                <td>
                                    <div class="_txtec">2</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">orlando, fl</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">nov 12</div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="checkbox-item">
                                        <label class="check_click">
                                            <input type="checkbox" name="">
                                            <div class="_cont-l-img">
                                                <div class="_ad-list_img">
                                                    <img src="{{ URL::asset('assets/img/card/c1.jpg') }}">
                                                </div>
                                                <span class="before_checkblu"></span>
                                            </div>
                                        </label>

                                        <div style="margin-left: 20px;">
                                            <h3 class="_txteh txt_upper">studio resort for 4 people!</h3>
                                            <p class="_txtec16">A1-WGTS Studio</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <i class="far fa-hourglass _i-gris18"></i>
                                        <div class="_txtec _txtcapit" style="margin-left: 10px;">in progress</div>
                                    </div>
                                </td>
                                <td>
                                    <button class="btn-border">Finish</button>
                                </td>
                                <td>
                                    <div class="fx fx-ai-c">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.693" height="12.448" viewBox="0 0 16.693 12.448">
                                            <path d="M5.67,16.781.244,11.356a.835.835,0,0,1,0-1.18l1.18-1.18a.835.835,0,0,1,1.18,0L6.26,12.65l7.828-7.828a.835.835,0,0,1,1.18,0L16.449,6a.835.835,0,0,1,0,1.18l-9.6,9.6A.835.835,0,0,1,5.67,16.781Z" transform="translate(0 -4.577)" fill="#2ddab4"/>
                                        </svg>
                                        <div class="_txtec _txtcapit" style="margin-left: 7.7px;">on</div>
                                    </div>
                                </td>
                                <td>
                                    <div class="_txtec">3</div>
                                </td>
                                <td>
                                    <div class="_txtec">5</div>
                                </td>
                                <td>
                                    <div class="_txtec">2</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">orlando, fl</div>
                                </td>
                                <td>
                                    <div class="_txtec _txtcapit">nov 12</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('script')

@endsection
