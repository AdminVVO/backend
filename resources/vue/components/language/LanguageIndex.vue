<template>
	<div class="container-leng">
	    <div class="modal-lang"></div>

	    <div class="pd_leng">
	        <div class="_z4lmgp">
	            <div class="modal_content">
	                <span class="x">X</span>

	                <div class="nav nav-leng" id="nav-leng">
	                    <ul>
	                        <li class="leng-click"><a class="btn-a activ">Language and region</a></li>
	                        <li class="currency-click"><a class="btn-a">Currency</a></li>
	                    </ul>
	                </div>

	                <div class="modal_block">
	                    <Language />
	                    <Currency />
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>

    import Language from './LanguageRegions.vue'
    import Currency from './Currency.vue'

	export default {

		name: 'LanguageIndex',
        components: {
            Language,
            Currency,
        },

		data () {
			return {

			}
		}
	}
</script>

<style lang="css" scoped>
</style>