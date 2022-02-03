<template>
    <div
    	class="menu _header-menu"
    	@click="activeClass = !activeClass"
    	:class="[ activeClass ? 'is-active' : '' ]" 
    	v-click-outside="clickExterno"
	>
        <a href="#" class="menu_items">
            <img :src="logo" alt="">
            Become a Host
        </a>

        <div class="_menu-bars">
            <i class="fas fa-bars"></i>
        </div>

        <div class="menu_home-content">
            <div class="menu_home-content-items">
                <ul>
                    <li>
                    	<a
                    		href="#"
                    		@click="SignOn()"
                		>
                			Sign up
                		</a>
                	</li>
                </ul>
                <ul>
                    <li>
                    	<a
                    		href="#"
                    		@click="SignOn()"
                		>
                			Log in
                		</a>
                	</li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>

    import vClickOutside from 'v-click-outside'
	import logo from './hotel.png'

	export default {

		name: 'HeaderLogOff',

		data () {
			return {
				'activeClass': false,
                'logo': logo,
			}
		},
	    directives: {
	      clickOutside: vClickOutside.directive
	    },
		methods: {
			SignOn: function() {
				this.$emit('SignOn')
			},
			clickExterno (event) {
				this.activeClass = false
		    }
		}
	}
</script>

<style lang="css" scoped>
</style>