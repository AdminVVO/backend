<template>
    <div class="tabs_card tabs_card_xxl entero" style="margin: 0 0 100px;">
        <div class="medio">
            <CardCategory />
        </div>  
    </div>
    <div class="entero">
        <div class="medio">
            <h2 class="h2">Most Popular</h2>
        </div>
    </div> 
    <div class="tabs entero">
        <div class="medio">
            <TabsItems />
            <TabsSelect />
        </div>  
    </div>

    <div class="tabs_card entero">
        <div class="medio"> 
            <Cards />
        </div>  
    </div>

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2">New Hotel</h2>
        </div>
    </div> 

    <div class="tabs_card tabs_card_xl entero">
        <div class="medio">
            <Cards />
        </div> 
    </div> 

    <div class="wo_home entero">
        <div class="medio">
            <h3>Questions about hosting?</h3>
            <div class="block_a">
                <a href="/" class="btn-h">Answers and Tips</a>
            </div>
        </div>
    </div>

    <div class="entero mt-100">
        <div class="medio">
            <h2 class="h2">With Pool</h2> 
        </div>
    </div> 

    <div class="tabs_card entero mt-80">
        <div class="medio"> 
            <Cards />
        </div>  
    </div> 
</template>

<script>
    
    import CardCategory from './../components/category/CardCategory'
    import TabsItems from '../components/home/TabsItems'
    import TabsSelect from '../components/home/TabsSelect'
    import Cards from '../components/home/Cards'

	export default {

		name: 'Category',
	    components: {
	        CardCategory,
	        TabsItems,
	        TabsSelect,
	        Cards,
	    },

		data () {
			return {

			}
		}
	}
</script>

<style lang="css" scoped>
</style>