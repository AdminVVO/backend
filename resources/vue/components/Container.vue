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

        <IndexHome
            @showLanguage="showLanguage()"
        />

        <ContenidoFooter />

    </div>
</template>

<script>

    import HeaderIndex from './header/HeaderIndex.vue'
    import IndexHome from './home/IndexHome.vue'
    import ContenidoFooter from './ContenidoFooter.vue'
    import SignUpOrLogIn from './signup/SignUpOrLogIn.vue'
    import Language from './language/Language.vue'

	export default {
		name: 'Container',
        components: {
            HeaderIndex,
            IndexHome,
            ContenidoFooter,
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
                }
                this.isLoggedIn = true
            }
        },
        methods: {
            SignOn: function() {
                this.SignOnActive = true
            },
            closeModal() {
                this.SignOnActive = false
                this.LangugeActive = false
            },
            showLanguage: function() {
                this.LangugeActive = true
            }
        }
	}
</script>

<style lang="css" scoped>
</style>