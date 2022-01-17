<template>
    <div class="content_hidden-number">
        <div class="content_mr">
            <div class="content_options">
                <h3>More options</h3>
                <p>Choose Another way to get a verification code at +1 123 123 123 Make sure your notifications are turned on.</p>
                <div class="box_options">
                    <div class="block_check">

                        <div class="radio-item">
                            <input type="radio" id="msg-email" name="ritem" value="message" checked>
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
                            <input type="radio" id="whatsapp-email" name="ritem" value="whatsapp">
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

                        <div class="radio-item">
                            <input type="radio" id="phone-email" name="ritem" value="phone">
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

                        <div class="hr"></div>

                        <div 
                        	class="btn-help btn-help-email"
                        	@click="needHelp()"
                    	>I nedd help</div>
                    </div>
                </div>

                <div class="block_a">
                    <button class="btn-resend-email">Resend code</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'MoreOptions',

		data () {
			return {

			}
		},
		methods: {
			needHelp: function() {
				this.$emit('needHelp')
			}
		}
	}
</script>

<style lang="css" scoped>
</style>