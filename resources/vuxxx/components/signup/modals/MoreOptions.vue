<template>
    <div class="content_hidden-number">
        <div class="content_mr">
            <div class="content_options">
                <h3>More options</h3>
                <p>Choose Another way to get a verification code at {{ phoneOrEmail }} Make sure your notifications are turned on.</p>
                <form
                    @submit.prevent="resentCode"
                    :keyup.enter="resentCode"
                >
                    <div class="box_options">
                        <div class="block_check">
                                <div
                                    v-if="typeSend"
                                >
                                    <div class="radio-item">
                                        <input
                                            type="radio"
                                            id="whatsapp-email"
                                            value="email"
                                            v-model="options"
                                            checked
                                        >
                                        <label for="whatsapp-email" class="hr">
                                            <div class="content_flex-actv">
                                                <div class="flex_icon">
                                                    <i class="far fa-envelope"></i>
                                                </div>
                                                <div class="flex-msg">
                                                    <h5>Email</h5>
                                                    <small>We'll text you a code.</small>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div
                                    v-else
                                >
                                    <div class="radio-item">
                                        <input
                                            type="radio"
                                            id="msg-email"
                                            value="message"
                                            v-model="options"
                                            checked
                                        >
                                        <label for="msg-email" class="hr">
                                            <div class="content_flex-actv">
                                                <div class="flex_icon">
                                                    <i class="far fa-comment-alt"></i>
                                                </div>
                                                <div class="flex-msg">
                                                    <h5>Text message (SMS)</h5>
                                                    <small>We'll text you a code.</small>
                                                </div>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="radio-item">
                                        <input
                                            type="radio"
                                            id="phone-email"
                                            value="call"
                                            v-model="options"
                                        >
                                        <label for="phone-email">
                                            <div class="content_flex-actv">
                                                <div class="flex_icon">
                                                    <img src="assets/img/icons/smartphone.svg" alt="">
                                                </div>
                                                <div class="flex-msg">
                                                    <h5>Phone call</h5>
                                                    <small>We'll text you a code.</small>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                            <div class="hr"></div>

                            <div 
                            	class="btn-help btn-help-email"
                            	@click="needHelp()"
                        	>I nedd help</div>
                        </div>
                    </div>

                    <div class="block_a">
                        <button
                            type="submit"
                            class="btn-number btns-modals"
                            :class="[isLoad ? 'activeLoading' : '']"
                            :disabled="isLoad || options === ''"
                        >
                            Resend code
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

		name: 'MoreOptions',
        props:[
            'phoneOrEmail',
            'typeSend'
        ],
		data () {
			return {
                'isLoad': false,
                'options': '',
			}
		},
		methods: {
			needHelp: function() {
				this.$emit('needHelp')
			},
            resentCode: function() {
                this.isLoad = true

                const params = {
                    'type': this.options,
                    'to': this.phoneOrEmail
                }
                axios.post('/api/logInRegistration/resentVerify', params )
                    .then((res) =>{
                        this.isLoad = false
                        this.$emit('toVerifity', this.phoneOrEmail)
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