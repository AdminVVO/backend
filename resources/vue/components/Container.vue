<template>
    <div>
        <SignUpOrLogIn 
            v-show="SignOnActive"
            :activeModal="false"
            @closeModal="closeModal()"
        />

        <HeaderIndex
            :isLoggedIn="isLoggedIn"
            :authLoggedIn="authLoggedIn"
            @accion="SignOn()"
        />

        <Language
            v-show="LangugeActive"
            @closeModal="closeModal()"
        />



    </div>
</template>

<script>

    import HeaderIndex from './header/HeaderIndex.vue'
    import SignUpOrLogIn from './signup/SignUpOrLogIn.vue'
    import Language from './language/Language.vue'

	export default {
		name: 'Container',
        components: {
            HeaderIndex,
            SignUpOrLogIn,
            Language,
        },
		data () {
			return {
                'SignOnActive': false,
                'isLoggedIn': false,
                'LangugeActive': false,
                'authLoggedIn': [],
			}
		},
        created() {
            if (window.Laravel.isLoggedin) {
                if (window.Laravel.user) {
                    this.authLoggedIn.name = window.Laravel.user.name
                    this.authLoggedIn.last_name = window.Laravel.user.last_name
                    this.authLoggedIn.email = window.Laravel.user.email
                    this.authLoggedIn.avatar = window.Laravel.user.avatar
                    localStorage.codecurrency = window.Laravel.user.currency_default
                    localStorage.codelanguages = window.Laravel.user.language_default
                }
                this.isLoggedIn = true

            } else{
                localStorage.codecurrency = 'USD'
                localStorage.codelanguages = 'US'
            }
        },
        methods: {
            SignOn: function() {
                this.SignOnActive = true
                $('.page-category').css('overflow', 'hidden');
            },
            closeModal() {
                this.SignOnActive = false
                this.LangugeActive = false
                $('.page-category').css('overflow', 'auto');
            },
            showLanguage: function() {
                this.LangugeActive = true
                $('.page-category').css('overflow', 'hidden');
            }
        }
	}
</script>

<style lang="css" scoped>
</style>