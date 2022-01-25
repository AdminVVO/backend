<template>
    <div class="content_hidden-welcome">
        <div class="log">
            <strong>Sign Up</strong>
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
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ errors.name[0] }}
                    </div>

                    <h4>Last Name</h4>
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
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ errors.last_name[0] }}
                    </div>

                    <p>Make sure it matches the name that appears on your official ID.</p>

                    <div class="selected-modal">
                        <select
                            v-model="sex"
                            :class="[errors && errors.sex ? 'error_input' : '']"
                        >
                            <option value="" selected disabled>Gender</option>
                            <option value="M">Male</option>
                            <option value="F">Female</option>
                        </select>
                        <div 
                            class="_txterror"
                            v-if="errors && errors.sex"
                        >
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ errors.sex[0] }}
                        </div>
                    </div>

                    <h4>Date of birth</h4>
                    <input
                        type="date"
                        placeholder="dd/mm/yyyy"
                        maxlength="10"
                        class="_input-mod date date-v-modals _mr"
                        id="calendario"
                        style="cursor: pointer;"
                        v-model="date_birth"
                        :class="[errors && errors.date_birth ? 'error_input' : '']"
                    >
                    <div 
                        class="_txterror"
                        v-if="errors && errors.date_birth"
                    >
                        <i class="fas fa-exclamation-circle icon1"></i> 
                        {{ errors.date_birth[0] }}
                    </div>
                    
                    <p>In order to register you must be at least 18 years old. We will not share your date of birth with other Airbnb users.</p>

                    <div
                        v-if="typeSend"
                    >
                        <h4 style="margin-top: 23px;">Phone Number</h4>
                        <vue-tel-input
                            class="_input-mod _mr email-modals"
                            v-bind="bindProps"
                            v-model="phone"
                            :class="[errors && errors.phone ? 'error_input' : '']"
                        >
                        </vue-tel-input>

                        <div 
                            class="_txterror"
                            v-if="errors && errors.phone"
                        >
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ errors.phone[0] }}
                        </div>
                    </div>

                    <div
                        v-else
                    >
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
                            <i class="fas fa-exclamation-circle icon1"></i> 
                            {{ errors.email[0] }}
                        </div>
                        
                        <p class="_txtemail-des">We will send you travel confirmations and receipts by email.</p>
                        
                    </div>

                    <br>

                    <p style="text-align: center;">By selecting <b>Accept and Continue</b>, I agree to the VVOUTLET <a href="#">Terms of Service</a>. <a href="#">Payment Terms of Service</a>, and <a href="#">Anti-Discrimination Policy</a>. I also acknowledge the <a href="#">Privacy Policy</a>.</p>
                    
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

                    <div class="checkbox-item">
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

    import { VueTelInput } from 'vue-tel-input'
    
	export default {

		name: 'SignOn',
        components: {
            VueTelInput,
        },
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
                'bindProps': {
                    'mode': 'international',
                    'inputOptions': {
                        'showDialCode': true,
                        'tabindex': 0
                    }
                }
			}
		},
	    mounted(){
	    	this.changeBefore()
            this.functionSelec()
            this.showCalendario()
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
                    'phone': this.phone.replace(/\s+/g, ''),
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
    		},
            functionSelec: function() {
                document.querySelectorAll('.selected-modal').forEach(setupSelector);

                function setupSelector(selector) {
                    selector.addEventListener('mousedown', e => {
                        if(window.innerWidth >= 420) {
                            e.preventDefault();

                            const select = selector.children[0];
                            const dropDown = document.createElement('ul');
                            dropDown.className = "selector-options";

                            [...select.children].forEach(option => {
                                const dropDownOption = document.createElement('li');
                                dropDownOption.textContent = option.textContent;

                                dropDownOption.addEventListener('mousedown', (e) => {
                                    e.stopPropagation();
                                    select.value = option.value;
                                    selector.value = option.value;
                                    select.dispatchEvent(new Event('change'));
                                    selector.dispatchEvent(new Event('change'));
                                    dropDown.remove();
                                });
                                dropDown.appendChild(dropDownOption);   
                            });

                            selector.appendChild(dropDown);

                            document.addEventListener('click', (e) => {
                                if(!selector.contains(e.target)) {
                                    dropDown.remove();
                                }
                            });
                        }
                    });
                }
            },
            showCalendario: function() {
                $('#calendario').datepicker({
                    dateFormat: "dd/mm/yy",
                    autoclose: true,
                    todayHighlight: true,
                    selectOtherMonths: true,
                    autoclose: true,
                    // minDate: 0,
                    orientation: "button"
                });

                $('.date-v-modals').on('input', function (evt) { 
                    let v = this.value,
                    l = v.length,
                    d,
                    b;
                    if (
                        l === 1 && /^[0-3]/.test(v) || // D
                        l === 2 && /^0[1-9]|[12]\d|3[01]$/.test(v) || // DD
                        l === 3 && /^\/$/.test(v[2]) || // DD/
                        l === 4 && /^[0-1]$/.test(v[3]) || // DD/M
                        l === 5 && /^0[1-9]|1[0-2]$/.test(v[3]+''+v[4]) || // DD/MM
                        l === 6 && /^\/$/.test(v[5]) || // DD/MM/
                        l === 7 && /^[12]$/.test(v[6]) || // DD/MM/Y
                        l === 8 && /^\d$/.test(v[7]) || // DD/MM/YY
                        l === 9 && /^\d$/.test(v[8]) || // DD/MM/YYY
                        l === 10 && /^\d$/.test(v[9]) // DD/MM/YYYY
                        ) {

                        // Control fecha valida
                    d = v.split(/\//);
                    if (l === 10) {
                        b = (new Date(d[2], d[1] - 1, d[0])).toISOString().substr(0,10).split('-')
                    }

                        // Meses con 3* dias
                        if (l === 5 && v[0] === '3' &&
                            (d[1] === '02' ||
                                (v[1] === '1' && ['04','06','09','11'].indexOf(d[1]) !== -1)
                                )) {
                            //Error, el mes no tiene 3* dias
                    }
                        // Año bisiesto
                        else if (l === 10 && d[0] === '29' && d[1] === '02' && b[2] != d[0]) {
                            //Error, el año no es bisiesto, febrero no puede tener 29 dias
                        } else {
                            return;
                        }
                    }

                    this.value = v.substr(0, l - 1);
                });
            }
	    }
	}
</script>

<style lang="css" scoped>
</style>