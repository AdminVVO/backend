<template>
	<div>

	    <HeaderIndex
	        :isLoggedIn="isLoggedIn"
	        :authLoggedIn="authLoggedIn"
	        @accion="SignOn()"
	    />

        <Language
            v-show="LangugeActive"
            @closeModal="closeModal()"
        />

    	<router-view/>
    	





</div>

</template>

<script>

    import HeaderIndex from './components/header/HeaderIndex.vue'
    import Language from './components/language/Language.vue'

	export default {

		name: 'App',
        components: {
            HeaderIndex,
            Language,
            // IndexHome,
            // SignUpOrLogIn,
        },

		data () {
			return {
                'SignOnActive': true,
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