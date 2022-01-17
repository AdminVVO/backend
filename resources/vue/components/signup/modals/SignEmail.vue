<template>
	<div class="content_hidden-welcome">
	    <div class="log">
	        <strong>Log in or sign up</strong>
	    </div>
	    <div class="modal_block-welcome">
	        <div class="content_welcome-email">
                <form
                    @submit.prevent="Verifity"
                    :keyup.enter="Verifity"
                >
		            <h3>Welcome to vvoutlet</h3>
		            <h4>Email Address</h4>
		            <input
		            	type="text"
		            	placeholder="examples@demo.com"
		            	class="_input-mod"
		            	v-model="email"
		            	:class="[isError ? 'error_input' : '']"
	            	>
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
	                            <i class="fab fa-facebook-f" aria-hidden="true"></i>
	                        </div>
	                        Continue with Facebook
	                    </div>
	                </a>

	                <a href="/google/login">
	                    <div class="contend_red">
	                        <div class="flex_icon">
	                            <i class="fab fa-google" aria-hidden="true"></i>
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
	                	class="_btnPhone"
	                	@click="ToPhone()"
                	>
	                    <div class="contend_red">
	                        <div class="flex_icon">
	                            <i class="fas fa-phone" aria-hidden="true"></i>
	                        </div>
	                        Continue with Phone
	                    </div>
	                </a>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
	export default {

		name: 'SignEmail',

		data () {
			return {
                'email': '',
                'isError': false,
                'isLoad': false,
			}
		},
		methods: {
			ToPhone: function() {
				this.$emit('toPhone')
			},
            Verifity: function() {   
                this.isLoad = true
                axios.post('/api/logInRegistration/initEmail', {
                    'email': this.email 
                })
                .then((res) =>{
                    this.isLoad = false
                    this.isError = false
                    if ( res.data.status === 200 && res.data.error === false  ) {
                        this.$emit('toVerifityEmail', this.email)
                    }
                    if ( res.data.status === 400 && res.data.error === false  ) {
                        this.isError = true
                    }
                	this.email = ''
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