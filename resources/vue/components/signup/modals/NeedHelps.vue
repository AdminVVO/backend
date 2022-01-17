<template>
    <div class="content_hidden-number">
        <div class="content_mr">
            <div class="content_need-email">
                <form
                    @submit.prevent="sendHelp"
                    :keyup.enter="sendHelp"
                >
                    <h3>Need our help?</h3>
                    <p>Only use this form if you're unable to complete this security check Using Another option-It can take several days to get back into your account if you need our help.</p>
                    <h5>What were you trying to do?</h5>
                    <textarea
                    	v-model="message"
                    	:class="[isError ? 'error_input' : '']"
                    ></textarea>
                    <div class="content_a">
                        <div class="back">
                            <div 
                            	class="back_a btn-back"
                            	@click="returnHelp()"
                        	>
                                <i class="fas fa-angle-left"></i>Back
                            </div>
                        </div>
                        <button
                            type="submit"
                            class="btn-number btns-modals"
                            :class="[isLoad ? 'activeLoading' : '']"
                            :disabled="isLoad"
                        >
                            Submit
                            <div class="loading-btn loading-btn-modal"></div>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'NeedHelps',

		data () {
			return {
				'message': '',
                'isError': false,
                'isLoad': false,
			}
		},
		props: [
			'phoneOrEmail'
		],
		methods: {
			returnHelp() {
				this.$emit('moreOptions')
			},
			sendHelp: function() {
                this.isLoad = true
                axios.post('/api/logInRegistration/helpPhoneEmail', {
                    'message': this.message,
                    'from': this.phoneOrEmail
                })
                .then((res) =>{
                    this.isLoad = false
                    this.isError = false
                    if ( res.data.status === 200 && res.data.error === false  ) {
                    	this.message = ''
                        this.$emit('close')
                    }
                    if ( res.data.status === 400 && res.data.error === false  ) {
                        this.isError = true
                    }
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