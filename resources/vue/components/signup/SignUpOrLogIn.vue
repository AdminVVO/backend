<template>
	<div class="container-welcome">
	    <div class="modal-welcome modal1"></div>

	    <div class="pd_login-modal">
	        <div class="_z4lmgp">
	            <div class="modal_content-welcome">
	                <span 
	                	class="close-x1" 
	                	@click="close()"
	                >X</span>
	                <div class="img-left">
	                    <img src="assets/img/welcome.png">
	                </div>
	                <div class="content_right">
	                	<SignPhone
	                		v-if="showPhone"
	                		@toEmail="toEmail()"
	                		@toVerifity="toVerifity($event, false)"
	                	/>
	                	<SignEmail 
	                		v-else-if="showEmail"
	                		@toPhone="toPhone()"
	                		@toVerifityEmail="toVerifity($event, true)"
	                	/>
	                	<Confirm 
	                		v-else-if="showConfirm"
	                		:phoneOrEmail="phoneOrEmail"
	                		:typeSend="typeSend"
	                		@moreOptions="moreOptions()"
	                		@returnSignOn="returnSignOn()"
	                	/>
	                	<MoreOptions 
	                		v-else-if="showOptions"
	                		@needHelp="needHelp()"
	                		:phoneOrEmail="phoneOrEmail"
	                		:typeSend="typeSend"
	                		@toVerifity="toVerifity($event, typeSend)"
	                	/>
	                	<NeedHelps 
	                		v-else-if="showHelps"
	                		@moreOptions="moreOptions()"
	                		@close="close()"
	                		:phoneOrEmail="phoneOrEmail"
	                	/>
	                	<SignOn 
	                		v-else="SignOn"
	                		:phoneOrEmail="phoneOrEmail"
	                		:typeSend="typeSend"
	                	/>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>

	import SignEmail from './modals/SignEmail.vue'
	import SignPhone from './modals/SignPhone.vue'
	import Confirm from './modals/Confirm.vue'
	import MoreOptions from './modals/MoreOptions.vue'
	import NeedHelps from './modals/NeedHelps.vue'
	import SignOn from './modals/SignOn.vue'

	export default {

		name: 'SignUpOrLogIn',
        components: {
            SignEmail,
            SignPhone,
            Confirm,
            MoreOptions,
            NeedHelps,
            SignOn,
        },
		data () {
			return {
				'showPhone': true,
				'showEmail': false,
				'showConfirm': false,
				'showOptions': false,
				'showHelps': false,
				'showSignOn': false,
				'phoneOrEmail': '',
				'typeSend': false,
			}
		},
		methods: {
		    close() {
		    	this.$emit('closeModal')
				this.showPhone    = true
				this.showEmail    = false
				this.showConfirm  = false
				this.showOptions  = false
				this.showHelps    = false
				this.showSignOn   = false
				this.phoneOrEmail = ''
				this.typeSend     = false
		    },
		    toEmail() {
				this.showPhone   = false
				this.showEmail   = true
				this.showConfirm = false
				this.showOptions = false
				this.showHelps   = false
				this.showSignOn  = false
		    },
		    toPhone() {
				this.showPhone   = true
				this.showEmail   = false
				this.showConfirm = false
				this.showOptions = false
				this.showHelps   = false
				this.showSignOn  = false
		    },
		    toVerifity(phoneOrEmail, type) {
				this.showPhone    = false
				this.showEmail    = false
				this.showConfirm  = true
				this.showOptions  = false
				this.showHelps    = false
				this.showSignOn   = false
				this.phoneOrEmail = phoneOrEmail
				this.typeSend     = type
		    },
		    moreOptions(){
				this.showPhone   = false
				this.showEmail   = false
				this.showConfirm = false
				this.showOptions = true
				this.showHelps   = false
				this.showSignOn  = false
		    },
		    needHelp(){
				this.showPhone   = false
				this.showEmail   = false
				this.showConfirm = false
				this.showOptions = false
				this.showHelps   = true
				this.showSignOn  = false
		    },
		    returnSignOn( phoneOrEmail ){
				this.showPhone   = false
				this.showEmail   = false
				this.showConfirm = false
				this.showOptions = false
				this.showHelps   = false
				this.showSignOn  = true
		    },

		}
	}
</script>

<style lang="css" scoped>
</style>