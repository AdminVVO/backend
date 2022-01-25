<template>
	<div class="content_hidden_currency">
        <strong>Choose a currency</strong>
        <div class="content_leng-choose">
            <div class="flex_content">
                <div
                    class="btn_choose hr"
                    v-for="( item, index ) in currency"
                    :key="index"
                    :class="[item.code == codecurrency ? 'active' : '' ]"
                    @click="changeCurrency( item.code )"
                >
                    <h4>{{ item.name }}</h4>
                    <p>{{ item.code }} - {{ item.symbol }}</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {

		name: 'Currency',

		data () {
			return {
                'currency': null,
                'codecurrency': null
			}
		},
        mounted(){
            this.queryCurrency()
            this.codecurrency = localStorage.codecurrency;
        },
        methods: {
            queryCurrency: function() {
                axios.get('/api/returncurrencys')
                    .then((res) =>{
                        if ( res.data.status ) {
                            this.currency = res.data.content
                        }else{
                            console.log('Empty query..');
                        }
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
            changeCurrency: function(code) {
                localStorage.codecurrency = code;
                if ( window.Laravel.isLoggedin ) {

                    axios.get('/sanctum/csrf-cookie').then(response => {
                        axios.post('/api/changeCurrency', {
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
	}
</script>

<style lang="css" scoped>
</style>