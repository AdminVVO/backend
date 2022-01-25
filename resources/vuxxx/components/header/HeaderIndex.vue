<template>
	<div class="_location-he">
		<header class="entero header">
		    <div class="medio">
		        <a href="/" class="logo-menu">
		            <img src="assets/img/logo.png" alt="logo">
		        </a>
                <div
                    class="book-form book-f_home"
                    :class="[ showGuest ? 'is-active' : '' ]" 
                    v-click-outside="closeGuest"
                >
                    <MenuPlaces
                        @showGuest="showGuest = !showGuest"
                    />
		        	<MenuBefoPlaces />
		        </div>

		        <HeaderLogOn 
		        	v-if="isLoggedIn"
		        	:authLoggedIn="authLoggedIn"
		        />
		        
		        <HeaderLogOff
		        	v-else
		        	@SignOn="SignOn()"
		        />


		    </div>
		</header>
	</div>
</template>

<script>

    import vClickOutside from 'v-click-outside'
    import HeaderLogOn from './HeaderLogOn.vue'
    import HeaderLogOff from './HeaderLogOff.vue'
    import MenuPlaces from './MenuPlaces.vue'
    import MenuBefoPlaces from './MenuBefoPlaces.vue'

	export default {
		name: 'HeaderIndex',
        components: {
            HeaderLogOn,
            HeaderLogOff,
            MenuPlaces,
            MenuBefoPlaces,
        },
		props: [
			'isLoggedIn',
			'authLoggedIn',
		],
        directives: {
          clickOutside: vClickOutside.directive
        },
		data () {
			return {
                'showGuest': false,
			}
		},
		methods: {
			SignOn: function() {
				this.$emit('accion')
			},
            closeGuest: function() {
                this.showGuest = false
            }
		}
	}
</script>

<style lang="css" scoped>
</style>