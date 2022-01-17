<template>
    <div>
        <SignUpOrLogIn 
            v-show="SignOnActive"
            @closeModal="closeModal()"
            :activeModal="false"
        />
        <HeaderIndex
            @accion="SignOn()"
            :isLoggedIn="isLoggedIn"
            :authLoggedIn="authLoggedIn"
        />
        <IndexHome />
        <ContenidoFooter />

    </div>
</template>

<script>

    import HeaderIndex from './header/HeaderIndex.vue'
    import IndexHome from './home/IndexHome.vue'
    import ContenidoFooter from './ContenidoFooter.vue'
    import SignUpOrLogIn from './signup/SignUpOrLogIn.vue'

	export default {
		name: 'Container',
        components: {
            HeaderIndex,
            IndexHome,
            ContenidoFooter,
            SignUpOrLogIn,
        },
		data () {
			return {
                'SignOnActive': false,
                'isLoggedIn': false,
                'authLoggedIn': [],
			}
		},
        created() {
            if (window.Laravel.isLoggedin) {
                if (window.Laravel.user) {
                    this.authLoggedIn.name = window.Laravel.user.name
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
            }
        }
	}
</script>

<style lang="css" scoped>
</style>