<template>
	<div class="content_hidden _lgcth">
        <div class="search_content">
            <div class="input-wrapper">
                <i class="fas fa-search"></i>
                <input
                    type="text"
                    name=""
                    placeholder="Search languages"
                    v-model="filterLanguages"
                >
            </div>
        </div>

        <strong>Suggested languages and regions</strong>
        <div class="content_leng-choose content_leng">
            <div class="flex_content">
                <div
                    class="btn_leng"
                    v-for="( item, index ) in suggested"
                    :key="index"
                    :class="[item.code == codelanguages ? 'active' : '' ]"
                    @click="changeLanguage( item.code )"
                >
                    <h4>{{ item.languages }}</h4>
                    <p>{{ item.name }}</p>
                </div>
            </div>
        </div>

        <strong>Choose a language and region</strong>
        <div class="content_leng-choose">
            <div class="flex_content">
                <div
                    class="btn_leng hr"
                    v-for="( item, index ) in filteredLanguage"
                    :key="index"
                    :class="[item.code == codelanguages ? 'active' : '' ]"
                    @click="changeLanguage( item.code )"
                >
                    <h4>{{ item.languages }}</h4>
                    <p>{{ item.name }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'LanguageAndRegion',

		data () {
			return {
                'lenguage': [],
                'suggested': [],
                'filterLanguages': null,
                'codelanguages': null
			}
		},
        mounted(){
            this.queryLanguage()
            this.codelanguages = localStorage.codelanguages;
            
        },
        methods: {
            queryLanguage: function() {
                axios.get('/api/returnlanguageRegions')
                    .then((res) =>{
                        if ( res.data.status ) {
                            let content = res.data.content
                            const self = this;
                            content.forEach( function(elemento, indice) {
                                if ( elemento.suggested == true ) {
                                    self.suggested.push( elemento )
                                }else{
                                    self.lenguage.push( elemento )
                                }
                            })
                        }else{
                            console.log('Empty query..');
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            changeLanguage: function(code) {
                localStorage.codelanguages = code;
                if ( window.Laravel.isLoggedin ) {

                    axios.get('/sanctum/csrf-cookie').then(response => {
                        axios.post('/api/changeLanguage', {
                            'code': code
                        })
                            .then((res) =>{
                                if ( res.data.message ) {
                                    console.log( res.data.message );
                                }else{
                                    console.log('Empty query..');
                                }
                            })
                            .catch(function (error) {
                                console.log(error);
                            })
                        })
                    }
            }
        },
        computed: {
            filteredLanguage () {

                let lenguage = this.lenguage;
                let filterLanguages = this.filterLanguages;

                if ( !filterLanguages ) {
                    return lenguage
                }

                let searchString = filterLanguages.trim().toLowerCase()

                lenguage = lenguage.filter( function(item){
                    if( item.languages.toLowerCase().indexOf(filterLanguages) !== -1 )
                        return item;
                })
                
                return lenguage;
            },
        }
	}
</script>

<style lang="css" scoped>
</style>