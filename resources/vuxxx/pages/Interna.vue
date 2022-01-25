<template>
    <section class="entero">
        <div class="medio">
        	<InternaIndex />
        </div>

        <a href="#">
            <div class="content_icon-leng" id="btnLeng">
                <img src="assets/img/logo-leng.png" alt="">
            </div>
        </a>
    </section>
</template>

<script>
    
    import InternaIndex from '../components/interna/InternaIndex.vue'

	export default {

		name: 'Interna',
	    components: {
	        InternaIndex,
	    },

		data () {
			return {

			}
		},
		// mounted: function() {
	 //    	lightbox(document.getElementById('gallery-container'));
		// }
	}
</script>

<style lang="css" scoped>
</style>