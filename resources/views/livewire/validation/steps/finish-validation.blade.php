<div>
    <section class="entero">
        <div class="medio-two">
            <div class="section_photo-id">
                <h2 class="h2_publish">We've sent a link to your phone</h2>
                <div class="_gap">
                    <p class="_txtec">A text is on its way to {{ $phone }}. Tap the link in the message and
                        then take your photos.</p>
                    <p class="_txtec">Didn't get a text? <span class="_txteh">Send again</span></p>
                </div>

                <div class="_btnsmleft mr-t60">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.052" height="10.584" viewBox="0 0 6.052 10.584">
                        <path
                            d="M5.294,1.824l4,4.005a.753.753,0,0,0,1.068,0,.763.763,0,0,0,0-1.071L5.83.22A.755.755,0,0,0,4.787.2L.221,4.755A.757.757,0,0,0,1.289,5.826Z"
                            transform="translate(0 10.584) rotate(-90)" fill="#333" />
                    </svg>
                    <span>Back</span>
                </div>
            </div>
        </div>
        <input type="text" value="{{ $user_id }}" id="userID" hidden>
        <a href="#">
            <div class="content_icon-leng" id="btnLeng">
                <img src="{{ URL::asset('assets/img/logo-leng.png') }}" alt="">
            </div>
        </a>
        <script>
            // Enable pusher logging - don't include this in production
            Pusher.logToConsole = true;

            var pusher = new Pusher('0efd841401d79aed289c', {
                cluster: 'us2'
            });

            var channel = pusher.subscribe('channelValidation');
            channel.bind('sendEvent' + $('#userID').val(), function(data) {
                window.location.href = "http://127.0.0.1:8000/validation/process?type=finish";
            });


            /*******************************************************/
            // alert($());
            // window.addEventListener('sendValidation', event => {
            //     const typing = Echo.private(`validationUser` + $('#user_id').val());
            //     setTimeout(() => {
            //         typing.whisper('click', {
            //             typing: true,
            //             userID: user_id
            //         });
            //     }, 500);
            // })
        </script>
    </section>
</div>
