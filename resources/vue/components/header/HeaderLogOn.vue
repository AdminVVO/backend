<template>
    <div 
    	class="menu _header-menu"
    	@click="activeClass = !activeClass"
    	:class="[ activeClass ? 'is-active' : '' ]" 
    	v-click-outside="clickExterno"
	>
        <a href="#" class="menu_items">
            <img src="assets/img/icons/hotel.png" alt="">
            Become a Host
        </a>

        <a href="#" class="menu_perfil">
            <span>
                <img
                	:src="'assets/img/avatar/' + authLoggedIn.avatar" 
                	alt="">
                {{ authLoggedIn.name }}
            </span>
        </a>

        <div class="_menu-bars">
            <i class="fas fa-bars"></i>
        </div>

        <div class="menu_home-content">
            <div class="menu_home-content-items">
                <ul>
                    <li><a href="#">Message</a></li>
                    <li><a href="#">Trips</a></li>
                    <li><a href="#">Wishlists</a></li>
                </ul>
                <hr class="br-line">
                <ul>
                    <li><a href="#">Manage</a></li>
                    <li><a href="#">Host and experience</a></li>
                    <li><a href="#">Account</a></li>
                    <li>
                    	<a
                    		style="cursor: pointer;"
                    		@click="logout()"
                		>
                		Log out</a>
                	</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

    import vClickOutside from 'v-click-outside'

	export default {

		name: 'HeaderLogOn',

		data () {
			return {
				'activeClass': false,
			}
		},
	    directives: {
	      clickOutside: vClickOutside.directive
	    },
	    props : [
	    	'authLoggedIn'
	    ],
		methods: {
			clickExterno (event) {
				this.activeClass = false
		    },
			logout () {
	            axios.get('/sanctum/csrf-cookie').then(response => {
	                axios.post('/api/logInRegistration/logout')
	                    .then(response => {
	                        if ( response.data.message ) {
	                            window.location.href = "/"
	                        } 
	                    })
	                    .catch(function (error) {
	                        console.error(error);
	                    });
	            })
		    },
		}
	}
</script>

<style lang="css" scoped>
</style>