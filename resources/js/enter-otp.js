$(document).ready(function() {

    let BACKSPACE_KEY = 8;
    let ENTER_KEY = 13;
    let TAB_KEY = 9;
    let LEFT_KEY = 37;
    let RIGHT_KEY = 39;
    let ZERO_KEY = 48;
    let NINE_KEY = 57;

    function otp(elementId) {
        let inputs = $('#' + elementId).children();
        let callback = null;

        function init(completeCallback) {
            callback = completeCallback;
            
            for (i = 0; i < inputs.length; i++) {
                registerEvents(i, inputs[i]);
            }
        }

        function destroy() {
            for (i = 0; i < inputs.length; i++) {
                registerEvents(i, inputs[i]);
            }
        }

        function registerEvents(index, element) {
            element.addEventListener("input", function(ev) {
                onInput(index, ev);
            });
            
            element.addEventListener("paste", function(ev) {
                onPaste(index, ev);
            });

            element.addEventListener("keydown", function(ev) {
                onKeyDown(index, ev);
            });
        }

        function onPaste(index, ev) {
            ev.preventDefault();

            let curIndex = index;
            let clipboardData = ev.clipboardData || window.clipboardData;
            let pastedData = clipboardData.getData("Text");

            for (i = 0; i < pastedData.length; i++) {
                if (i < inputs.length) {
                    if (!isDigit(pastedData[i])) {
                        break;
                    }

                    inputs[curIndex].value = pastedData[i];
                    curIndex++;
                }

                if (curIndex == inputs.length) {
                    inputs[curIndex - 1].focus();
                    callback(retrieveOTP());
                } else {
                    inputs[curIndex].focus();
                }
            }
        }

        function onKeyDown(index, ev) {
            let key = ev.keyCode || ev.which;
            
            if (key == LEFT_KEY && index > 0) {
                ev.preventDefault(); // prevent cursor to move before digit in input
                inputs[index - 1].focus();
            }
        
            if (key == RIGHT_KEY && index + 1 < inputs.length) {
                ev.preventDefault();
                inputs[index + 1].focus();
            }
        
            if (key == BACKSPACE_KEY && index > 0) {
                if (inputs[index].value == "") {
                    // Empty and focus previous input and current input is empty
                    inputs[index - 1].value = "";
                    inputs[index - 1].focus();
                } else {
                    inputs[index].value = "";
                }
            }
        
            if (key == ENTER_KEY) {
                // force submit if enter is pressed
                ev.preventDefault();
                
                if (isOTPComplete()) {
                    callback(retrieveOTP());
                }
            }
        
            if (key == TAB_KEY && index == inputs.length - 1) {
                // force submit if tab pressed on last input
                ev.preventDefault();
                
                if (isOTPComplete()) {
                    callback(retrieveOTP());
                }
            }
        }

        function onInput(index, ev) {
            let value = ev.data || ev.target.value;
            let curIndex = index;
            
            for (i = 0; i < value.length; i++) {
                if (i < inputs.length) {

                    if (!isDigit(value[i])) {
                        inputs[curIndex].value = "";
                        break;
                    }
                    
                    inputs[curIndex++].value = value[i];
                    
                    if (curIndex == inputs.length) {

                        if(isOTPComplete()) {
                            callback(retrieveOTP());
                        }
                    } else {
                        inputs[curIndex].focus();
                    }
                }
            }
        }

        function retrieveOTP() {
            let otp = "";
            
            for (i = 0; i < inputs.length; i++) {
                otp += inputs[i].value;
            }
            return otp;
        }

        function isDigit(d) {
            return d >= "0" && d <= "9";
        }

        function isOTPComplete() {
            let isComplete = true;
            let i = 0;
            
            while (i < inputs.length && isComplete) {
                if (inputs[i].value == "") {
                    isComplete = false;
                }
                
                i++;
            }
            
            return isComplete;
        }

        return {
            init: init
        };
    }

    // create-step6.php - confirm your e-mail
    let otpModuleEmail = otp("modal-otp-email");
    otpModuleEmail.init(function(passcode) {
        // alert("codigo insertado es: " + passcode);
    });


    // create-step6.php - confirm your number
    let otpModuleNumber = otp("modal-otp-number");
    otpModuleNumber.init(function(passcode) {
        // alert("codigo insertado es: " + passcode);
    });

});