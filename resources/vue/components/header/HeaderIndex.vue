<template>
	<header class="entero">
	    <div class="medio">
	        <a href="/" class="logo-menu">
	            <img src="assets/img/logo.png" alt="logo">
	        </a>
	        <div class="book-form">
	            <form action="">
	                <div class="inputBox">
	                    <div class="place_select">
	                        <span>Check in</span>
	                        <i class="far fa-calendar-alt">
	                            <input type="month" name="fecha" value="2019-08">
	                        </i>
	                    </div>
	                </div>

	                <div class="inputBox">
	                    <div class="place_select">
	                        <span>Check Out</span>
	                        <i class="far fa-calendar-alt">
	                            <input type="month" name="fecha" value="2019-08">
	                        </i>
	                    </div>
	                </div>

	                <div class="inputBox">
	                    <div class="place_select">
	                        <span>Guest</span>
	                        <i class="far fa-user">
	                            <select name="format" id="format">
	                                <option selected disabled>5 guest</option>
	                                <option value="Nov19">Nov 19</option>
	                                <option value="Nov20">Nov 20</option>
	                            </select>
	                        </i>
	                    </div>
	                </div>
	                <input type="submit" value="Search" class="btn">
	            </form>
	        </div>

	        <HeaderLogOn 
	        	v-if="isLoggedIn"
	        />
	        
	        <HeaderLogOff
	        	v-else
	        	@SignOn="SignOn()"
	        />


	    </div>
	</header>
</template>

<script>

    import HeaderLogOn from './HeaderLogOn.vue'
    import HeaderLogOff from './HeaderLogOff.vue'


	export default {
		name: 'HeaderIndex',
        components: {
            HeaderLogOn,
            HeaderLogOff,
        },
		props: [
			'isLoggedIn',
		],
		data () {
			return {

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