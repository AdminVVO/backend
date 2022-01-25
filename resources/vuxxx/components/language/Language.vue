<template>
	<div class="container-leng">
   		<div class="modal-lang"></div>

	    <div class="pd_leng">
	        <div class="_z4lmgp">
	            <div class="modal_content">
	                <span
	                	class="x"
	                	@click="close()"
	                >
	            		X
	            	</span>

	                <div class="nav nav-leng" id="nav-leng">
	                    <ul>
	                        <li class="leng-click"><a class="btn-a activ">Language and region</a></li>
	                        <li class="currency-click"><a class="btn-a">Currency</a></li>
	                    </ul>
	                </div>

	                <div class="modal_block">

	                	<LanguageAndRegion />

	                	<Currency />

	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>

    import Currency from './Currency.vue'
    import LanguageAndRegion from './LanguageAndRegion.vue'

	export default {

		name: 'Language',
        components: {
            Currency,
            LanguageAndRegion,
        },
		data () {
			return {

			}
		},
		methods: {
		    close() {
		    	this.$emit('closeModal')
		    },
		}
	}
</script>

<style lang="css" scoped>
</style>