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
        />
        <Contenido />
        <ContenidoFooter />

    </div>
</template>

<script>

    import HeaderIndex from './header/HeaderIndex.vue'
    import Contenido from './ContenidoHome.vue'
    import ContenidoFooter from './ContenidoFooter.vue'
    import SignUpOrLogIn from './signup/SignUpOrLogIn.vue'

	export default {
		name: 'Container',
        components: {
            HeaderIndex,
            Contenido,
            ContenidoFooter,
            SignUpOrLogIn,
        },
		data () {
			return {
                'SignOnActive': false,
                'isLoggedIn': false,
			}
		},
        created() {
            if (window.Laravel.isLoggedin) {
                console.log("window.Laravel.isLoggedin", window.Laravel.isLoggedin);
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