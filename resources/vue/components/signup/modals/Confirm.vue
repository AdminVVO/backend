<template>
    <div class="content_hidden-number">
        <div class="content_mr">
            <div class="content_number">
                <form
                    @submit.prevent="sendVerify"
                    :keyup.enter="sendVerify"
                >
                    <h3>Confirm your {{ typeSend ? 'Email Address' : 'Phone Number' }}</h3>
                    <p class="des">Enter the code we sent over {{ typeSend ? 'email address' : 'phone number' }} to {{ phoneOrEmail }}.</p>

                    <div
                        class="box_enter"
                        :class="[isError ? 'error_code' : '']"
                    >
                        <input
                            type="text" 
                            id="ist" 
                            maxlength="1" 
                            onkeyup="clickEvent(this, 'sec')"
                            onkeypress="return solonumeros(event);"
                            v-model="oneNumber"
                        >
                        <input
                            type="text" 
                            id="sec" 
                            maxlength="1" 
                            onkeyup="clickEvent(this, 'third')"
                            onkeypress="return solonumeros(event);"
                            v-model="twoNumber"
                        >
                        <input
                            type="text" 
                            id="third" 
                            maxlength="1" 
                            onkeyup="clickEvent(this, 'fourth')"
                            onkeypress="return solonumeros(event);"
                            v-model="threeNumber"
                        >
                        <input
                            type="text" 
                            id="fourth" 
                            maxlength="1" 
                            onkeyup="clickEvent(this, 'fifth')"
                            onkeypress="return solonumeros(event);"
                            v-model="fourNumber"
                        >
                        <input
                            type="text" 
                            id="fifth" 
                            maxlength="1" 
                            onkeyup="clickEvent(this, 'up')"
                            onkeypress="return solonumeros(event);"
                            v-model="fiveNumber"
                        >
                        <input
                            type="text" 
                            id="up" 
                            maxlength="1"
                            onkeypress="return solonumeros(event);"
                            v-model="sixNumber"
                        >
                    </div>

                    <p class="txt-err">Wrong Code</p>

                    <p class="link">Didn't get a code? 
                        <a
                            class="btn-options"
                            @click="moreOptions()"
                        >More Options</a>
                    </p>

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
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'Confirm',
        props:[
            'phoneOrEmail',
            'typeSend'
        ],
		data () {
			return {
                'codeSend': '',
                'oneNumber': '',
                'twoNumber': '',
                'threeNumber': '',
                'fourNumber': '',
                'fiveNumber': '',
                'sixNumber': '',
                'isError': false,
                'isLoad': false,
			}
		},
        methods: {
            moreOptions() {
                this.$emit('moreOptions')
            },
            sendVerify() {
                this.isLoad = true
                const params = {
                    'code': this.oneNumber + this.twoNumber + this.threeNumber + this.fourNumber + this.fiveNumber + this.sixNumber,
                    'type': this.typeSend ? 'email' : 'phone'
                }
                axios.post('/api/logInRegistration/verifyPhoneEmail', params)
                    .then((res) =>{
                        this.isLoad = false
                        this.isError = false

                        if ( res.data.logIn ) {
                            window.location.href = "/"
                        }

                        if ( res.data.redirecTo ) {
                            this.$emit('returnSignOn')
                        }

                        if ( res.data.codeError || res.data.errors ) {
                            this.isError = true
                        }

                        this.oneNumber = ''
                        this.twoNumber = ''
                        this.threeNumber = ''
                        this.fourNumber = ''
                        this.fiveNumber = ''
                        this.sixNumber = ''
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