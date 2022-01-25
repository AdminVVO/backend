<template>
	<header class="entero header">
	    <div class="medio">
	        <a href="/" class="logo-menu">
	            <img src="assets/img/logo.png" alt="logo">
	        </a>

	        <div class="book-form book-f_header">
	      		<Places />
	      		<BeforePlaces />
	        </div>

	        <div class="menu _header-menu">
	            <a href="#" class="menu_items">
	                <img src="assets/img/icons/hotel.png" alt="">
	                Become a Host
	            </a>

	            <a href="#" class="menu_perfil">
	                <span>
	                    <img src="assets/img/profile.png" alt="">
	                    Anny Smith
	                </span>
	            </a>

	            <div class="_menu-bars">
	                <i class="fas fa-bars"></i>
	            </div>

	            <div class="menu_home-content">
	                <div class="menu_home-content-items">
	                    <ul>
	                        <li>
	                        	<a href="#"> ------ Enlaces SPA ------</a>
	                        	<router-link to="/">Home</router-link>
	                        	<router-link to="/category">Category</router-link>
	                        	<router-link to="/interna">Interna</router-link>
	                        	<router-link to="/host">Host and experience</router-link>
	                        	<a href="#"> ------ Fin Enlaces SPA ------</a>
	                        </li>
	                    </ul>
	                    <hr class="br-line">
	                    <ul>
	                        <li><a href="#">Message</a></li>
	                        <li><a href="#">Trips</a></li>
	                        <li><a href="#">Wishlists</a></li>
	                    </ul>
	                    <hr class="br-line">
	                    <ul>
	                        <li><a href="#">Manage</a></li>
	                        <li>
	                        	<router-link to="/host">Host and experience</router-link>
	                        </li>
	                        <li><a href="#">Account</a></li>
	                        <li><a href="#" id="butnLogin">Log out</a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
</template>

<script>
    
    import Places from './Places'
    import BeforePlaces from './BeforePlaces'

	export default {

		name: 'HeaderIndex',
	    components: {
	        Places,
	        BeforePlaces,
	    },

		data () {
			return {

			}
		}
	}
</script>

<style lang="css" scoped>
</style>