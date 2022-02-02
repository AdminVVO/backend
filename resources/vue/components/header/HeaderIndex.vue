<template>
	<div class="_location-he">
		<header class="entero header">
		    <div class="medio">
		        <a href="/" class="logo-menu">
		            <img :src="img" alt="logo">
		        </a>
		        
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

    import HeaderLogOn from './HeaderLogOn.vue'
    import HeaderLogOff from './HeaderLogOff.vue'
	import img from './logo.png'

	export default {
		name: 'HeaderIndex',
        components: {
            HeaderLogOn,
            HeaderLogOff,
        },
		props: [
			'isLoggedIn',
			'authLoggedIn',
		],
		data () {
			return {
                'showGuest': false,
                'img': img,
			}
		},
		methods: {
			SignOn: function() {
				this.$emit('accion')
			},
		}
	}
</script>

<style lang="css" scoped>
</style>