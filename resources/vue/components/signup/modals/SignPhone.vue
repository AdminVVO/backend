<template>
    <div class="content_hidden-welcome">
        <div class="log">
            <strong>Log in or sign up</strong>
        </div>
        <div class="modal_block-welcome">
            <div class="content_welcome">
                <form
                    @submit.prevent="Verifity"
                    :keyup.enter="Verifity"
                >
                    <h3>Welcome to vvoutlet</h3>
                    <h4>Phone Number</h4>
                    <input
                        type="text"
                        placeholder="+1 (800) 756-850"
                        class="_input-mod email-modals"
                        id="telephone"
                        v-model="phone"
                        :class="[isError ? 'error_input' : '']"
                    >
                    <div class="_txterror" v-if="errors && errors.phone">
                        <i class="fas fa-exclamation-circle icon1">
                            {{ errors.phone[0] }}
                        </i> 
                    </div>

                    <p>We'll call or text you to confirm your number. <br>Standard message and data rates apply. <a href="#">Privacy Policy</a>.</p>
                    <div class="block_a">
                        <button
                            type="submit"
                            class="btn-number btns-modals"
                            :class="[isLoad ? 'activeLoading' : '']"
                            :disabled="isLoad"
                        >
                            Continue
                            <div class="loading-btn loading-btn-modal"></div>
                        </button>
                    </div>
                </form>
                
                <p>or</p>
                <div class="block_redes">
                    <a href="/facebook/login">
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            Continue with Facebook
                        </div>
                    </a>

                    <a href="/google/login">
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fab fa-google"></i>
                            </div>
                            Continue with Google
                        </div>
                    </a>

                    <!-- <a href="#">
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fab fa-apple"></i>
                            </div>
                            Continue with Apple
                        </div>
                    </a> -->

                    <a href="#" 
                    	class="_btnEmail" 
                    	@click="ToEmail()"
                    >
                        <div class="contend_red">
                            <div class="flex_icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            Continue with Email
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    import 'intl-tel-input/build/css/intlTelInput.css';
    import 'intl-tel-input/build/js/intlTelInput.js';
    import intlTelInput from 'intl-tel-input';

	export default {  

		name: 'SignEmail',

		data () {
			return {
                'phone': '',
                'isError': false,
                'isLoad': false,
                'errors': [],
			}
		},
        mounted(){
            const input = document.querySelector("#telephone");
            intlTelInput(input, {
              // any initialisation options go here
            });
        },
		methods: {
			ToEmail: function() {
				this.$emit('toEmail')
			},
            Verifity: function() {   
                this.isLoad = true
                this.isError = false
                this.errors = []
                axios.post('/api/logInRegistration/initPhone', {
                    'phone': this.phone 
                })
                    .then((res) =>{
                        this.isLoad = false
                        if ( res.data.errors ) {
                            this.isError = true
                            this.errors = res.data.errors
                        }else{
                            this.$emit('toVerifity', this.phone)
                        }
                        
                        this.phone = ''
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            }
		}
	}
</script>

<style lang="css" scoped>
</style>