<template>
	<div>
		<HeaderIndex />

		<LanguageIndex />

		<router-view/>

		<FooterIndex />
	</div>

</template>

<script>

    import HeaderIndex from './components/headers/HeaderIndex'
    import LanguageIndex from './components/language/LanguageIndex'
    import FooterIndex from './components/footer/FooterIndex'

	export default {

		name: 'App',
		components: {
			HeaderIndex,
			LanguageIndex,
			FooterIndex,
		},

		data () {
			return {

			}
		},
	}
</script>

<style lang="css" scoped>
</style>