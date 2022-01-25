@extends('layouts.App')

@section('title') Personal Info @endsection

@section('css')

<link href="{{ URL::asset('assets/css/header-bck.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/personal-info.css') }}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/personal-info-edit.css') }}" rel="stylesheet"/>

@endsection

@section('content')

	<section class="entero">
        <div class="medio-two">
			<div class="section-perfil_info">
			    <main class="section-perfil_info-main">
			        <div class="_flex-right16">
			            <a href="account.php" class="_txtec16">Account</a><i class="fas fa-chevron-right"></i><span class="_txtecbold16">Personal info</span>
			        </div>
			        <h2 class="h2-guests_bold35">Personal info</h2>

			        <div>
			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Legal name</div>

			                        <a href="#" class="_btnsm">
			                            <span class="_fcontent edit">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>

			                            <span class="_fcontent cancel">
			                                Cancel
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Anny Smith</div>
			                    <div class="_txtec show">This is the name on your travel document, which could be a license or a passport.</div>
			                    <form action="" class="_form">
			                        <div class="_flfpc">
			                            <div class="block_date">
			                                <div class="txt-check-in">First Name</div>
			                                <input type="text" class="date_check">
			                            </div>

			                            <div class="block_date">
			                                <div class="txt-check-in">Last name</div>
			                                <input type="text" class="date_check">
			                            </div>
			                        </div>
			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Gender</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Cancel
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Fermale</div>
			                    <form action="" class="_form">
			                        <div class="selected-modal">
			                            <select name="" id="">
			                                <option value="1">Fermale</option>
			                                <option value="2">Male</option>
			                            </select>

			                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                        </div>
			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Date of birth</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>

			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Cancel
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">January 31, 1992</div>
			                    <div class="_txtec show">Use an address you'll always have access to.</div>
			                    <form action="" class="_form _form-f">
			                        <div class="_flex">
			                            <div class="selected-modal">
			                                <select name="" id="">
			                                    <option selected="">January</option>
			                                    <option value="1">February</option>
			                                    <option value="2">March</option>
			                                    <option value="3">April</option>
			                                    <option value="4">May</option>
			                                    <option value="5">June</option>
			                                    <option value="6">July</option>
			                                    <option value="7">August</option>
			                                    <option value="8">September</option>
			                                    <option value="9">October</option>
			                                    <option value="10">November</option>
			                                    <option value="11">December</option>
			                                </select>

			                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                            </div>

			                            <div class="selected-modal">
			                                <select name="" id="">
			                                    <option value="">31</option>
			                                </select>

			                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                            </div>

			                            <div class="selected-modal">
			                                <select name="" id="">
			                                    <option selected="">1992</option>
			                                    <option value="1">1993</option>
			                                    <option value="2">1994</option>
			                                    <option value="3">1995</option>
			                                    <option value="4">1996</option>
			                                    <option value="5">1997</option>
			                                    <option value="6">1998</option>
			                                    <option value="7">1999</option>
			                                    <option value="8">2000</option>
			                                    <option value="9">2001</option>
			                                    <option value="10">2002</option>
			                                    <option value="11">2003</option>
			                                    <option value="12">2004</option>
			                                    <option value="13">2005</option>
			                                    <option value="14">2006</option>
			                                    <option value="15">2007</option>
			                                    <option value="16">2008</option>
			                                    <option value="17">2009</option>
			                                    <option value="18">2010</option>
			                                    <option value="19">2011</option>
			                                    <option value="20">2012</option>
			                                    <option value="21">2013</option>
			                                    <option value="22">2014</option>
			                                    <option value="23">2015</option>
			                                    <option value="24">2016</option>
			                                    <option value="25">2017</option>
			                                    <option value="26">2018</option>
			                                    <option value="27">2019</option>
			                                    <option value="28">2020</option>
			                                    <option value="29">2021</option>
			                                </select>

			                                <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                            </div>
			                        </div>

			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Email address</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>

			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Cancel
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Anny_smith@gmail.com</div>
			                    <div class="_txtec show">Use an address you'll always have access to.</div>

			                    <form action="" class="_form">
			                        <input type="text" name="" class="_input-mod email-modals" placeholder="Examples@demo.com">
			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Phone number</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Not provided</div>
			                    <div class="_txtec show">For notifications, reminders, and help logging in.</div>

			                    <div class="_form">
			                        <div class="_cont-edit" style="padding-top: 25px;">
			                            <div class="_txtec">+1 123 123 123</div>

			                            <a href="#" class="_btnsm">
			                                <span class="_txtblu" style="margin-bottom: 0; font-weight: normal;">Edit</span>
			                            </a>
			                        </div>
			                        <button href="#" class="btn-celest" style="margin-top: 22px;">Add Another number</button>
			                    </div>
			                </div>
			            </div>

			            <div class="_yellow-bg">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Government ID</div>

			                        <a href="#" class="_btnsm">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec">Not provided</div>

			                    <form action="" class="_form">
			                        <div class="txt-check-in">Country/region</div>
			                        <div class="selected-modal">
			                            <select name="" id="">
			                                <option value="" disabled="" selected="">United States</option>
			                                <option value="1">Perú</option>
			                            </select>

			                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                        </div>

			                        <div class="txt-check-in">Street address</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex:123 Main St.">

			                        <div class="txt-check-in">Apt, suite. (optional)</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: Apt #7">

			                        <div class="txt-check-in">City</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: San Francisco">

			                        <div class="txt-check-in">State</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: CA">

			                        <div class="txt-check-in">ZIP Code</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: 94103">

			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Address</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Not provided</div>
			                    <div class="_txtec show">Use a permanent address where you can receive mail.</div>

			                    <form action="" class="_form">
			                        <div class="txt-check-in">Country/region</div>
			                        <div class="selected-modal">
			                            <select name="" id="">
			                                <option value="" disabled="" selected="">United States</option>
			                                <option value="1">Perú</option>
			                            </select>

			                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                        </div>

			                        <div class="txt-check-in">Street address</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex:123 Main St.">

			                        <div class="txt-check-in">Apt, suite. (optional)</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: Apt #7">

			                        <div class="txt-check-in">City</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: San Francisco">

			                        <div class="txt-check-in">State</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: CA">

			                        <div class="txt-check-in">ZIP Code</div>
			                        <input type="text" name="" class="_input-mod" placeholder="Ex: 94103">

			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>

			            <div class="_yellow-bg personal_edit">
			                <div class="_bgpadding">
			                    <div class="_cont-edit">
			                        <div class="_txteh">Emergency contact</div>

			                        <a href="#" class="_btnsm edit">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>

			                        <a href="#" class="_btnsm cancel">
			                            <span class="_fcontent">
			                                Edit
			                                <span class="_svg-asm">
			                                    <img src="assets/img/icons/down-right.svg" alt="">
			                                </span>
			                            </span>
			                        </a>
			                    </div>
			                    <div class="_txtec none">Not provided</div>
			                    <div class="_txtec show">A trusted contact we can alert in an urgent situation.</div>

			                    <form action="" class="_form">
			                        <div class="txt-check-in">Name</div>
			                        <input type="text" name="" class="_input-mod">

			                        <div class="txt-check-in">Relationship</div>
			                        <input type="text" name="" class="_input-mod">

			                        <div class="txt-check-in">Preferred language</div>
			                        <div class="selected-modal">
			                            <select name="" id="">
			                                <option value="" disabled="" selected="">Select</option>
			                                <option value="1">España</option>
			                            </select>

			                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                        </div>

			                        <div class="txt-check-in">Email</div>
			                        <input type="text" name="" class="_input-mod email-modals" placeholder="Examples@demo.com">

			                        <div class="txt-check-in">Country/region</div>
			                        <div class="selected-modal">
			                            <select name="" id="">
			                                <option value="1" disabled="" selected="">Choose...</option>
			                                <option value="2">Perú</option>
			                            </select>

			                            <i class="fas fa-chevron-down" aria-hidden="true"></i>
			                        </div>

			                        <div class="txt-check-in">Phone number</div>
			                        <input type="text" name="" class="_input-mod">

			                        <button href="#" class="btn-celest">Save</button>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </main>

			    <aside class="section-perfil_info-aside">
			        <div class="_cont-account">
			            <i class="far fa-edit"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">Which details can be edited?</div>
			            <p class="span-guests">Details vvoutlet  uses to verify your identity can't be changed. Contact info and some personal details can be edited, but we may ask you verify your identity the next time you book or create a listing.</p>
			        </div>

			        <div class="_cont-account">
			            <i class="far fa-address-card"></i>
			            <div class="_txteh" style="margin-bottom: 4px;">What info is shared with others?</div>
			            <p class="span-guests">vvoutlet only releases contact information for Hosts and guests after a reservation is confirmed.</p>
			        </div>
			    </aside>
			</div>
        </div>
    </section>

@endsection


@section('script')

@endsection
