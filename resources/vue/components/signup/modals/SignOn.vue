<template>
    <div class="content_hidden-welcome">
        <div class="log">
            <strong>Finish registering</strong>
        </div>
        <div class="modal_block-welcome">
            <div class="content_welcome-email content-f-r">
                <form
                    @submit.prevent="submitSignOn"
                    :keyup.enter="submitSignOn"
                >
                    <h4>Name</h4>
                    <input
                    	type="text"
                    	class="_input-mod"
                    	v-model="name"
                        :class="[errors && errors.name ? 'error_input' : '']"
                	>
                    <div 
                        class="_txterror"
                        v-if="errors && errors.name"
                    >
                        <i class="fas fa-exclamation-circle icon1">
                            {{ errors.name[0] }}
                        </i> 
                    </div>

                    <h4>Last Names</h4>
                    <input
                    	type="text"
                    	class="_input-mod _mr"
                    	v-model="last_name"
                        :class="[errors && errors.last_name ? 'error_input' : '']"
                	>
                    <div 
                        class="_txterror"
                        v-if="errors && errors.last_name"
                    >
                        <i class="fas fa-exclamation-circle icon1">
                            {{ errors.last_name[0] }}
                        </i> 
                    </div>

                    <p>Make sure it matches the name that appears on your official ID.</p>

                    <div class="selected-modal _mrt">
                        <select
                            v-model="sex"
                            :class="[errors && errors.sex ? 'error_input' : '']"
                        >
                            <option value="" selected disabled>Sex</option>
                            <option value="M">Male</option>
                            <option value="F">Feminine</option>
                        </select>

                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                        <div 
                            class="_txterror"
                            v-if="errors && errors.sex"
                        >
                            <i class="fas fa-exclamation-circle icon1">
                                {{ errors.sex[0] }}
                            </i> 
                        </div>
                    </div>

                    <h4>Date of birth</h4>
                    <input
                    	type="date"
                    	class="_input-mod date date-v-modals _mr"
                    	v-model="date_birth"
                        :class="[errors && errors.date_birth ? 'error_input' : '']"
                	>
                    <div 
                        class="_txterror"
                        v-if="errors && errors.date_birth"
                    >
                        <i class="fas fa-exclamation-circle icon1">
                            {{ errors.date_birth[0] }}
                        </i> 
                    </div>
                    
                    <p>In order to register you must be at least 18 years old. We will not share your date of birth with other Airbnb users.</p>

                    <h4 style="margin-top: 23px;">Email</h4>
                    <input
                    	type="text"
                    	class="_input-mod _mr email-modals"
                    	placeholder="Examples@demo.com"
                    	v-model="email"
                        :class="[errors && errors.email ? 'error_input' : '']"
                	>
                    <div 
                        class="_txterror"
                        v-if="errors && errors.email"
                    >
                        <i class="fas fa-exclamation-circle icon1">
                            {{ errors.email[0] }}
                        </i> 
                    </div>
                    <p class="_txtemail-des">We will send you travel confirmations and receipts by email.</p>


                    <br>

                    <p>By selecting <b>Accept and Continue</b>, I agree to the VVOUTLET <a href="#">Terms of Service</a>. <a href="#">Payment Terms of Service</a>, and <a href="#">Anti-Discrimination Policy</a>. I also acknowledge the <a href="#">Privacy Policy</a>.</p>
                    
                    <div class="block_a">
                        <button
                            type="submit"
                            class="btn-number btns-modals"
                            :class="[isLoad ? 'activeLoading' : '']"
                            :disabled="isLoad"
                        >
                            Accept and continue
                            <div class="loading-btn loading-btn-modal"></div>
                        </button>
                    </div>

                    <div class="_line-hr" style="border-top-color: #E3EDF3; margin: 20px 0;"></div>

                    <p>Voutlet le enviará ofertas exclusivas para miembros, contenido inspirador, correos electrónicos comerciales y notificaciones automáticas. Puedes optar por dejar de recibirlas en cualquier momento a través del apartado de configuración de tu cuenta o directamente desde cualquiera de las notificaciones que recibes.</p>

                    <div class="radio-item">
                        <input
                        	type="checkbox"
                        	id="not"
                        	v-model="promotions"
                    	>
                        <label for="not">I do not want to receive Airbnb promotional messages.</label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'SignOn',
		props: [
			'phoneOrEmail',
			'typeSend',
		],
		data() {
			return {
				'name': '',
				'last_name': '',
				'sex': '',
				'date_birth': '',
				'email': '',
				'promotions': '',
				'phone': '',
                'isError': false,
                'isLoad': false,
                'errors': [],
			}
		},
	    mounted(){
	    	this.changeBefore()
	    },
	    methods: {
	    	changeBefore: function() {
		    	if (this.typeSend === true) {
		    		this.email = this.phoneOrEmail
		    		return
		    	}
	    		this.phone = this.phoneOrEmail
		    	
	    	},
	    	submitSignOn: function() {
                this.isLoad = true
                this.isError = false
                this.errors = []

                const params = {
                    'name': this.name,
                    'last_name': this.last_name,
                    'sex': this.sex,
                    'date_birth': this.date_birth,
                    'email': this.email,
                    'promotions': this.promotions,
                    'phone': this.phone,
                }
                axios.post('/api/logInRegistration/registrationPhoneEmail', params )
                    .then((res) =>{
                        this.isLoad = false
                        this.isError = false

                        if ( res.data.errors ) {
                            this.isError = true
                            this.errors = res.data.errors
                        }

                        if ( res.data.message ) {
                            this.name       = ''
                            this.last_name  = ''
                            this.sex        = ''
                            this.date_birth = ''
                            this.email      = ''
                            this.promotions = ''
                            this.phone      = ''
                            window.location.href = "/"
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