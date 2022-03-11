<div class="block_cbloqueada">
    <div class="block-img">
        <img src="{{ URL::asset('assets/img/avatar/cb.jpg') }}">
    </div>

    <div class="mr-t">
        @if ( $typeDocument === "Driver's License" )
            <h2 class="h2_publish">Upload multiple images of your driver's license</h2>

            <div class="_w" style="margin: 10px auto 0;">
                <p class="_txtec16">Upload images of the front and back of your driver's license ({{ $country }}).</p>
                <p class="_txtec16">Check that the images are not blurry and that they show your face clearly.</p>
            </div>
        @endif

        @if ( $typeDocument === 'Passport' )
            <h2 class="h2_publish">Upload an image of your passport</h2>

            <div class="_w" style="margin: 10px auto 0;">
                <p class="_txtec16">Upload an image of your passport photo page ({{ $country }}).</p>
                <p class="_txtec16">Check that the image is not blurry and that it shows your face clearly.</p>
            </div>
        @endif

        @if ( $typeDocument === 'Identity Card')
            <h2 class="h2_publish">Upload the images of the front and back of your identity document</h2>

            <div class="_w" style="margin: 10px auto 0;">
                <p class="_txtec16">Upload the images of the front and back of your identity document ({{ $country }}).</p>
                <p class="_txtec16">Check that the images are not blurry and that they show your face clearly.</p>
            </div>
        @endif

        @if ( $typeDocument === "Driver's License" || $typeDocument === 'Identity Card' )
            <form wire:submit.prevent="submitFileUploads">
                <div class="fx fx-jc-c fx-fw-w" style="margin: 50px 0; gap: 79px;">
                    <label class="add_icon-block">
                        <input type="file" wire:model.defer="uploadFileFront" accept="image/png, image/jpg, image/jpeg">
                        @error('uploadFileFront') {{ $this->alert('warning', 'The file does not meet the requirements. Type: PNG/JPG, SizeMax: 2mb.') }}</span> @enderror

                        @if ( $uploadFileFront && !$errors->has('uploadFileFront') )
                            <div class="imagePreview">
                                <img src="{{ $uploadFileFront->temporaryUrl() }}">
                            </div>
                        @endif

                        <div class="fx fx-fd-c fx-ai-c" style="gap: 15px;">
                            @if ( $typeDocument === 'Identity Card' )
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108.971" height="73.151" viewBox="0 0 108.971 73.151">
                                    <defs>
                                        <clipPath>
                                        <rect width="108.971" height="73.151" fill="#283646"/>
                                        </clipPath>
                                    </defs>
                                    <g transform="translate(0 0)">
                                        <g transform="translate(0 0)" clip-path="url(#clip-path)">
                                        <path d="M99.553,0H9.418A9.429,9.429,0,0,0,0,9.419V63.733a9.429,9.429,0,0,0,9.418,9.419H99.553a9.429,9.429,0,0,0,9.419-9.419V9.419A9.429,9.429,0,0,0,99.553,0m6.182,63.733a6.189,6.189,0,0,1-6.182,6.182H9.418a6.189,6.189,0,0,1-6.181-6.182V9.419A6.189,6.189,0,0,1,9.418,3.237H99.553a6.189,6.189,0,0,1,6.182,6.182Z" fill="#283646"/>
                                        <path d="M82.762,60.832H45.216A1.619,1.619,0,0,0,43.6,62.451v3.884a1.619,1.619,0,0,0,3.237,0V64.069h34.31v39.489H46.834V72.808a1.619,1.619,0,1,0-3.237,0v32.368a1.619,1.619,0,0,0,1.619,1.619H82.762a1.619,1.619,0,0,0,1.619-1.619V62.451a1.618,1.618,0,0,0-1.619-1.619" transform="translate(-34.318 -47.885)" fill="#283646"/>
                                        <path d="M306.807,78.465H266.24a1.618,1.618,0,1,0,0,3.237h40.567a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -61.765)" fill="#283646"/>
                                        <path d="M423.329,133.625h-9.063a1.618,1.618,0,0,0,0,3.237h9.063a1.618,1.618,0,0,0,0-3.237" transform="translate(-324.822 -105.185)" fill="#283646"/>
                                        <path d="M266.241,136.862h25.03a1.618,1.618,0,1,0,0-3.237h-25.03a1.618,1.618,0,1,0,0,3.237" transform="translate(-208.301 -105.185)" fill="#283646"/>
                                        <path d="M306.807,188.785H266.24a1.618,1.618,0,1,0,0,3.237h40.567a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -148.605)" fill="#283646"/>
                                        <path d="M288.25,243.945H266.24a1.618,1.618,0,1,0,0,3.237h22.01a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -192.025)" fill="#283646"/>
                                        <path d="M86.18,131.12a1.619,1.619,0,0,0,3.237,0,8.092,8.092,0,1,1,16.184,0,1.618,1.618,0,0,0,3.237,0,11.332,11.332,0,0,0-5.5-9.711,11.329,11.329,0,1,0-11.656,0,11.332,11.332,0,0,0-5.5,9.711M89.417,111.7a8.092,8.092,0,1,1,8.092,8.092,8.1,8.1,0,0,1-8.092-8.092" transform="translate(-67.838 -79.008)" fill="#283646"/>
                                        </g>
                                    </g>
                                </svg>
                            @else
                                <svg id="Grupo_35087" data-name="Grupo 35087" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108.972" height="73.152" viewBox="0 0 108.972 73.152">
                                    <defs>
                                        <clipPath>
                                        <rect width="108.972" height="73.152" fill="#283646"/>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#clip-path)">
                                        <path d="M99.553,0H9.418A9.429,9.429,0,0,0,0,9.419V63.733a9.429,9.429,0,0,0,9.418,9.419H99.553a9.429,9.429,0,0,0,9.419-9.419V9.419A9.429,9.429,0,0,0,99.553,0m6.182,63.733a6.189,6.189,0,0,1-6.182,6.182H9.418a6.189,6.189,0,0,1-6.181-6.182V9.419A6.189,6.189,0,0,1,9.418,3.237H99.553a6.189,6.189,0,0,1,6.182,6.182Z" fill="#283646"/>
                                        <path d="M82.762,60.832H45.216A1.619,1.619,0,0,0,43.6,62.451v3.884a1.619,1.619,0,0,0,3.237,0V64.069h34.31v39.489H46.834V72.808a1.619,1.619,0,1,0-3.237,0v32.368a1.619,1.619,0,0,0,1.619,1.619H82.762a1.619,1.619,0,0,0,1.619-1.619V62.451a1.618,1.618,0,0,0-1.619-1.619" transform="translate(-34.318 -47.885)" fill="#283646"/>
                                        <path d="M306.807,78.465H266.24a1.618,1.618,0,1,0,0,3.237h40.568a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -61.765)" fill="#283646"/>
                                        <path d="M423.329,133.625h-9.063a1.618,1.618,0,0,0,0,3.237h9.063a1.618,1.618,0,0,0,0-3.237" transform="translate(-324.822 -105.185)" fill="#283646"/>
                                        <path d="M266.241,136.862h25.031a1.618,1.618,0,1,0,0-3.237H266.241a1.618,1.618,0,1,0,0,3.237" transform="translate(-208.301 -105.185)" fill="#283646"/>
                                        <path d="M274.539,188.785h-8.3a1.618,1.618,0,1,0,0,3.237h8.3a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -148.605)" fill="#283646"/>
                                        <path d="M271.923,243.945H266.24a1.618,1.618,0,1,0,0,3.237h5.683a1.618,1.618,0,0,0,0-3.237" transform="translate(-208.3 -192.025)" fill="#283646"/>
                                        <path d="M86.18,131.12a1.619,1.619,0,0,0,3.237,0,8.092,8.092,0,1,1,16.184,0,1.618,1.618,0,0,0,3.237,0,11.332,11.332,0,0,0-5.5-9.711,11.329,11.329,0,1,0-11.656,0,11.332,11.332,0,0,0-5.5,9.711M89.417,111.7a8.092,8.092,0,1,1,8.092,8.092,8.1,8.1,0,0,1-8.092-8.092" transform="translate(-67.838 -79.008)" fill="#283646"/>
                                        <path d="M341.25,175.25l-3.059-8.36a1.491,1.491,0,0,0-1.4-.977H319.984a1.49,1.49,0,0,0-1.4.977l-3.059,8.36a4.292,4.292,0,0,0-.44,8.524v1.82a4.049,4.049,0,0,0,4.044,4.044h1.7a4.049,4.049,0,0,0,4.044-4.044v-1.75h7.017v1.75a4.049,4.049,0,0,0,4.044,4.044h1.7a4.049,4.049,0,0,0,4.044-4.044v-1.82a4.292,4.292,0,0,0-.439-8.524Zm-20.225-6.358h14.728l2.317,6.332H318.708Zm.871,16.7a1.065,1.065,0,0,1-1.064,1.064h-1.7a1.064,1.064,0,0,1-1.064-1.064v-1.75H321.9Zm16.81,0a1.065,1.065,0,0,1-1.064,1.064h-1.7a1.065,1.065,0,0,1-1.064-1.064v-1.75h3.831Zm2.286-4.729H315.78a1.331,1.331,0,0,1,0-2.66H341a1.331,1.331,0,0,1,0,2.66Z" transform="translate(-245.176 -130.6)" fill="#283646"/>
                                    </g>
                                </svg>
                            @endif
                            <span class="_txteh16">Add the front face</span>
                        </div>
                    </label>


                    <label class="add_icon-block">
                        <input type="file" wire:model.defer="uploadFileBack" accept="image/png, image/jpg, image/jpeg">
                        @error('uploadFileBack') {{ $this->alert('warning', 'The file does not meet the requirements. Type: PNG/JPG, SizeMax: 2mb.') }}</span> @enderror
                        
                        @if ( $uploadFileBack && !$errors->has('uploadFileBack') )
                            <div class="imagePreviewBack">
                                <img src="{{ $uploadFileBack->temporaryUrl() }}">
                            </div>
                        @endif

                        <div class="fx fx-fd-c fx-ai-c" style="gap: 15px;">
                            @if ( $typeDocument === 'Identity Card' )
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108.971" height="73.151" viewBox="0 0 108.971 73.151">
                                    <defs>
                                        <clipPath>
                                        <rect width="108.971" height="73.151" fill="#283646"/>
                                        </clipPath>
                                    </defs>
                                    <g transform="translate(0 0)">
                                        <g transform="translate(0 0)" clip-path="url(#clip-path)">
                                        <path d="M99.553,0H9.418A9.429,9.429,0,0,0,0,9.419V63.733a9.429,9.429,0,0,0,9.418,9.419H99.553a9.429,9.429,0,0,0,9.419-9.419V9.419A9.429,9.429,0,0,0,99.553,0m6.182,63.733a6.189,6.189,0,0,1-6.182,6.182H9.418a6.189,6.189,0,0,1-6.181-6.182V9.419A6.189,6.189,0,0,1,9.418,3.237H99.553a6.189,6.189,0,0,1,6.182,6.182Z" fill="#283646"/>
                                        <path d="M110.357,45.641H6.946a1.618,1.618,0,1,0,0,3.237H110.357a1.618,1.618,0,0,0,0-3.237" transform="translate(-4.193 -35.927)" fill="#283646"/>
                                        <path d="M110.357,125.053H6.946a1.618,1.618,0,1,0,0,3.237H110.357a1.618,1.618,0,0,0,0-3.237" transform="translate(-4.193 -98.437)" fill="#283646"/>
                                        </g>
                                    </g>
                                </svg>
                            @else
                                <svg id="Grupo_35088" data-name="Grupo 35088" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108.972" height="73.151" viewBox="0 0 108.972 73.151">
                                    <defs>
                                        <clipPath>
                                        <rect width="108.972" height="73.151" fill="#283646"/>
                                        </clipPath>
                                    </defs>
                                    <g clip-path="url(#clip-path)">
                                        <path d="M99.553,0H9.418A9.429,9.429,0,0,0,0,9.419V63.733a9.429,9.429,0,0,0,9.418,9.419H99.553a9.429,9.429,0,0,0,9.419-9.419V9.419A9.429,9.429,0,0,0,99.553,0m6.182,63.733a6.189,6.189,0,0,1-6.182,6.182H9.418a6.189,6.189,0,0,1-6.181-6.182V9.419A6.189,6.189,0,0,1,9.418,3.237H99.553a6.189,6.189,0,0,1,6.182,6.182Z" fill="#283646"/>
                                        <path d="M110.358,45.641H6.946a1.618,1.618,0,1,0,0,3.237H110.358a1.618,1.618,0,0,0,0-3.237" transform="translate(-4.193 -35.927)" fill="#283646"/>
                                        <path d="M110.358,125.053H6.946a1.618,1.618,0,1,0,0,3.237H110.358a1.618,1.618,0,0,0,0-3.237" transform="translate(-4.193 -98.437)" fill="#283646"/>
                                        <path d="M415.55,252.252a.71.71,0,1,1-.71.71.71.71,0,0,1,.71-.71" transform="translate(-326.547 -198.564)" fill="#283646"/>
                                        <path d="M373.539,198.882a12.069,12.069,0,1,0,12.069,12.069,12.062,12.062,0,0,0-12.069-12.069m0,2.145a9.94,9.94,0,0,1,9.268,6.375h-3.968a5.505,5.505,0,0,1-2.788-.74,4.974,4.974,0,0,0-5.022,0,5.507,5.507,0,0,1-2.788.74h-3.969a9.941,9.941,0,0,1,9.268-6.375m0,12.054a2.13,2.13,0,1,1,2.13-2.13,2.132,2.132,0,0,1-2.13,2.13m-9.893-1.337c4.087.5,7.763,2.29,7.763,6.351v2.549a9.946,9.946,0,0,1-7.763-8.9m12.022,8.9V218.1c0-4.044,3.65-5.848,7.763-6.351a9.946,9.946,0,0,1-7.763,8.9" transform="translate(-284.536 -156.553)" fill="#283646"/>
                                    </g>
                                </svg>
                            @endif
                            <span class="_txteh16">Add the back face</span>
                        </div>
                    </label>
                </div>

                <button type="submit" class="btn-celest">Continue</button>
            </form>            
        @else
            <form wire:submit.prevent="submitFileUploads">
                <div class="fx fx-jc-c fx-fw-w" style="margin: 50px 0; gap: 79px;">
                    <label class="add_icon-block">
                        <input type="file" wire:model.defer="uploadFilePassport" accept="image/png, image/jpg, image/jpeg">
                        @error('uploadFilePassport') {{ $this->alert('warning', 'The file does not meet the requirements. Type: PNG/JPG, SizeMax: 2mb.') }}</span> @enderror

                        @if ( $uploadFilePassport && !$errors->has('uploadFilePassport') )
                            <div class="imagePreview">
                                <img src="{{ $uploadFilePassport->temporaryUrl() }}">
                            </div>
                        @endif

                        <div class="fx fx-fd-c fx-ai-c" style="gap: 15px;">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108.973" height="109.539" viewBox="0 0 108.973 109.539">
                                <defs>
                                    <clipPath>
                                    <rect width="108.973" height="109.539" fill="#283646"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clip-path)">
                                    <path d="M104.7,7.222h-18.2V4.277A4.281,4.281,0,0,0,82.217,0H4.277A4.283,4.283,0,0,0,0,4.277V29.156a1.622,1.622,0,0,0,3.243,0V4.277A1.035,1.035,0,0,1,4.277,3.243h77.94a1.034,1.034,0,0,1,1.034,1.034V7.222h-9.16a1.621,1.621,0,1,0,0,3.243h30.6a1.035,1.035,0,0,1,1.034,1.034V89.439a1.033,1.033,0,0,1-1.034,1.033H56.858a1.032,1.032,0,0,1-1.033-1.033V11.5a1.035,1.035,0,0,1,1.033-1.034H67.6a1.621,1.621,0,1,0,0-3.243H56.858A4.282,4.282,0,0,0,52.582,11.5v41.65H3.243V35.643a1.622,1.622,0,1,0-3.243,0v69.619a4.283,4.283,0,0,0,4.277,4.277h77.94a4.281,4.281,0,0,0,4.277-4.277V93.716h18.2a4.281,4.281,0,0,0,4.277-4.276V11.5A4.282,4.282,0,0,0,104.7,7.222m-21.444,98.04a1.034,1.034,0,0,1-1.034,1.034H4.277a1.035,1.035,0,0,1-1.034-1.034V56.391H52.582V89.439a4.281,4.281,0,0,0,4.277,4.276H83.251Z" fill="#283646"/>
                                    <path d="M304.023,183.83a16.089,16.089,0,0,0,23.34,6.369c11.9-7.817,8.329-26.559-5.924-29.195-12.541-2.455-23.321,10.673-17.416,22.825m18.855,5.683a16.858,16.858,0,0,0,2.623-3.518,14.567,14.567,0,0,1,1.679,1.064,13.237,13.237,0,0,1-4.3,2.454m6.155-4.334a17.252,17.252,0,0,0-2.423-1.562,19,19,0,0,0,1.181-5.5h4.06a13.189,13.189,0,0,1-2.819,7.061m2.81-9.681h-4.048a18.859,18.859,0,0,0-1.189-5.538,17.285,17.285,0,0,0,2.406-1.549,13.362,13.362,0,0,1,2.832,7.086m-4.685-8.967a14.724,14.724,0,0,1-1.668,1.054,16.865,16.865,0,0,0-2.6-3.477,13.125,13.125,0,0,1,4.269,2.423m-7.371-1.714a14.144,14.144,0,0,1,3.278,3.817,14.661,14.661,0,0,1-3.278.672Zm0,7.117a17.318,17.318,0,0,0,4.412-.921,16.227,16.227,0,0,1,.97,4.485h-5.382Zm0,6.184h5.378a16.376,16.376,0,0,1-.96,4.446,17.324,17.324,0,0,0-4.418-.923Zm0,6.15a14.683,14.683,0,0,1,3.292.676,14.1,14.1,0,0,1-3.292,3.849Zm-14.724-6.15h4.092a18.859,18.859,0,0,0,1.209,5.488,17.307,17.307,0,0,0-2.422,1.557,13.69,13.69,0,0,1-2.88-7.045m4.714,8.939a14.6,14.6,0,0,1,1.7-1.077,17.234,17.234,0,0,0,2.628,3.536,13.428,13.428,0,0,1-4.33-2.46m7.39,1.726a14.356,14.356,0,0,1-3.268-3.846,14.656,14.656,0,0,1,3.268-.669Zm0-7.142a17.3,17.3,0,0,0-4.4.916,16.282,16.282,0,0,1-.985-4.44h5.386Zm0-6.143h-5.386a16.272,16.272,0,0,1,1.008-4.473,17.29,17.29,0,0,0,4.378.909Zm0-10.673v4.481a14.66,14.66,0,0,1-3.238-.66,14.411,14.411,0,0,1,3.238-3.822m-3.021-.764a17.487,17.487,0,0,0-2.635,3.55,14.565,14.565,0,0,1-1.693-1.065,12.724,12.724,0,0,1,4.328-2.485m-3.757,5.92a18.835,18.835,0,0,0-1.233,5.517h-4.1a13.292,13.292,0,0,1,2.926-7.058,17.291,17.291,0,0,0,2.409,1.541" transform="translate(-237.673 -126.324)" fill="#283646"/>
                                    <path d="M192.566,290.978h5.028a1.622,1.622,0,0,0,0-3.243h-5.028a1.622,1.622,0,0,0,0,3.243" transform="translate(-150.094 -226.176)" fill="#283646"/>
                                    <path d="M192.566,333.427h5.028a1.622,1.622,0,0,0,0-3.243h-5.028a1.622,1.622,0,0,0,0,3.243" transform="translate(-150.094 -259.543)" fill="#283646"/>
                                    <path d="M192.566,375.876h5.028a1.621,1.621,0,0,0,0-3.243h-5.028a1.621,1.621,0,0,0,0,3.243" transform="translate(-150.094 -292.911)" fill="#283646"/>
                                    <path d="M190.945,459.149a1.622,1.622,0,0,0,1.621,1.622h18.163a1.622,1.622,0,1,0,0-3.243H192.566a1.621,1.621,0,0,0-1.621,1.621" transform="translate(-150.094 -359.643)" fill="#283646"/>
                                    <path d="M307.781,460.771h10a1.622,1.622,0,1,0,0-3.243h-10a1.622,1.622,0,0,0,0,3.243" transform="translate(-240.659 -359.643)" fill="#283646"/>
                                    <path d="M60.105,285.838H30.946a1.257,1.257,0,0,0-1.257,1.257v7.295a1.257,1.257,0,0,0,2.514,0v-6.038H58.849V323.3H32.2V299.418a1.257,1.257,0,1,0-2.514,0v25.137a1.257,1.257,0,0,0,1.257,1.257H60.105a1.257,1.257,0,0,0,1.257-1.257V287.1a1.257,1.257,0,0,0-1.257-1.257" transform="translate(-23.337 -224.685)" fill="#283646"/>
                                    <path d="M57.218,345.126a1.421,1.421,0,0,0,2.843,0,7.1,7.1,0,0,1,14.21,0,1.421,1.421,0,0,0,2.842,0,9.95,9.95,0,0,0-4.829-8.526,9.948,9.948,0,1,0-10.234,0,9.95,9.95,0,0,0-4.83,8.526m2.843-17.052a7.1,7.1,0,1,1,7.1,7.1,7.113,7.113,0,0,1-7.1-7.1" transform="translate(-44.977 -250.066)" fill="#283646"/>
                                </g>
                            </svg>
                            <span class="_txteh16">Add photo page</span>
                        </div>
                    </label>
                </div>

                <button type="submit" class="btn-celest">Continue</button>
            </form>       
        @endif

    </div>
</div>
