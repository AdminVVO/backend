(function() {
    var width = 480;
    var height = 0;

    var streaming = false;

    var video = null;
    var canvas = null;
    var photo = null;
    var startbutton = null;
    var retakephoto = null;
    var continuePhoto = null;

    function startup() {
        video = document.getElementById('video');
        canvas = document.getElementById('canvas');
        photo = document.getElementById('photo');
        startbutton = document.getElementById('startbutton');
        retakephoto = document.getElementById('retakephoto');
        continuePhoto = document.getElementById('js__continuePhotoIdWecam');

        // if (location.protocol == 'https:') {
        //     console.log("funciona!");
        // } else {
        //     console.log("no funciona!");
        // }

        navigator.mediaDevices.getUserMedia({video: true, audio: false})
        .then(function(stream) {
            video.srcObject = stream;
            video.play();
        })
        .catch(function(err) {
            console.log("An error occurred: " + err);
        });

        video.addEventListener('canplay', function(ev){
            if (!streaming) {
                height = video.videoHeight / (video.videoWidth/width);
            
                // Firefox currently has a bug where the height can't be read from
                // the video, so we will make assumptions if this happens.
            
                if (isNaN(height)) {
                    height = width / (4/3);
                }
            
                video.setAttribute('width', width);
                video.setAttribute('height', height);
                canvas.setAttribute('width', width);
                canvas.setAttribute('height', height);
                streaming = true;
            }
        }, false);

        startbutton.addEventListener('click', function(ev){
            takepicture();
            ev.preventDefault();
        }, false);
        
        retakephoto.addEventListener('click', function(ev){
            stoprecording();
            ev.preventDefault();
        }, false);

        continuePhoto.addEventListener('click', function(ev){
            nextpicture();
            stoprecording();
            ev.preventDefault();
        }, false);

        clearphoto();
    }

    function nextpicture() {
        $(".js__contWebcam1").show();
        $(".js__contWebcam2").hide();
    }

    function clearphoto() {
        var context = canvas.getContext('2d');
        context.fillStyle = "#AAA";
        context.fillRect(0, 0, canvas.width, canvas.height);

        var data = canvas.toDataURL('image/png');
        photo.setAttribute('src', data);
    }
    
    function stoprecording() {
        $(".webcam-img-save").addClass("dn");
        $(".js__navRetakeSubmit").hide();
        $(".js__navBackTakePhoto").show();
        // console.table(video.srcObject.getTracks()[0]);
        // video.srcObject.getTracks().forEach(track => track.stop());
    }

    function takepicture() {
        var context = canvas.getContext('2d');
        if (width && height) {
            canvas.width = width;
            canvas.height = height;
            context.drawImage(video, 0, 0, width, height);
        
            var data = canvas.toDataURL('image/png');
            photo.setAttribute('src', data);
        } else {
            clearphoto();
        }

        $(".webcam-img-save").removeClass("dn");
        $(".js__navRetakeSubmit").show();
        $(".js__navBackTakePhoto").hide();
    }

    window.addEventListener('load', startup, false);
})();