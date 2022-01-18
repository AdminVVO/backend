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
                    
                    <vue-tel-input
                        class="_input-mod email-modals"
                        v-bind="bindProps"
                        v-model="phone"
                        :class="[isError ? 'error_input' : '']"
                    >
                    </vue-tel-input>


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

    import { VueTelInput } from 'vue-tel-input'

	export default {  

		name: 'SignEmail',
        components: {
            VueTelInput,
        },

		data () {
			return {
                'phone': '',
                'isError': false,
                'isLoad': false,
                'errors': [],
                  'bindProps': {
                    'mode': 'international',
                    'inputOptions': {
                      'showDialCode': true,
                      'tabindex': 0
                    }
                  }
			}
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
                    'phone': this.phone.replace(/\s+/g, '')
                })
                    .then((res) =>{
                        this.isLoad = false
                        if ( res.data.errors ) {
                            this.isError = true
                            this.errors = res.data.errors
                        }else{
                            this.$emit('toVerifity', this.phone.replace(/\s+/g, ''))
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