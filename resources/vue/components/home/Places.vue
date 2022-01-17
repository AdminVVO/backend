<template>
	<div
		class="block_places"
    	:class="[ showGuest ? 'is-active' : '' ]" 
    	v-click-outside="clickExterno"
	>
	    <h3>Places to stay</h3>
	    <div class="book-form">
	        <form action="">
	            <div class="inputBox">
	                <div class="place_select hr">
	                    <span>Location</span>
	                    <div class="place_select-flex">
	                        <img src="assets/img/icons/hotel.png" alt="hotel">
	                        <span>Orlando Florida</span>
	                    </div>
	                </div>
	            </div>
	            <div class="inputBox">
	                <div class="place_select hr">
	                    <span>Check in</span>
	                    <i class="far fa-calendar-alt">
	                        <input type="month" name="fecha" value="2019-08">
	                    </i>
	                </div>
	            </div>

	            <div class="inputBox">
	                <div class="place_select hr">
	                    <span>Check Out</span>
	                    <i class="far fa-calendar-alt">
	                        <input type="month" name="fecha" value="2019-08">
	                    </i>
	                </div>
	            </div>

	            <div class="inputBox">
	                <div 
	                	class="place_select"
				    	@click="showGuest = !showGuest"
                	>
	                    <span>Guest</span>
	                    <div class="menuGuest">
	                        <i class="far fa-user">
	                            <!-- <select name="format" id="format">
	                                <option selected disabled>5 guest</option>
	                                <option value="Nov19">Nov 19</option>
	                                <option value="Nov20">Nov 20</option>
	                            </select> -->

	                            <span>5 guest</span>
	                            <i class="fas fa-chevron-down"></i>
	                        </i>
	                    </div>
	                </div>
	            </div>
	            <input type="button" value="Search" class="btn">
	        </form>
	    </div>

	    <div class="_bef-places">
	        <div>
	            <div class="_cont-places">
	                <div class="_inf">
	                    <div class="_txteh">Adultos</div>
	                    <div class="_txtec">Edad: 13 años o más</div>
	                </div>
	                <div class="_2btns">
	                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                    
	                    <span aria-hidden="true">0</span>

	                    <button class="_btn" type="button" aria-label="aumentar valor">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28m-14-14v28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                </div>
	            </div>

	            <div class="_cont-places">
	                <div class="_inf">
	                    <div class="_txteh">Niños</div>
	                    <div class="_txtec">De 2 a 12 años</div>
	                </div>
	                <div class="_2btns">
	                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                    
	                    <span aria-hidden="true">0</span>

	                    <button class="_btn" type="button" aria-label="aumentar valor">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28m-14-14v28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                </div>
	            </div>

	            <div class="_cont-places">
	                <div class="_inf">
	                    <div class="_txteh">Bebés</div>
	                    <div class="_txtec">Menos de 2 años</div>
	                </div>
	                <div class="_2btns">
	                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                    
	                    <span aria-hidden="true">0</span>

	                    <button class="_btn" type="button" aria-label="aumentar valor">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28m-14-14v28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                </div>
	            </div>

	            <div class="_cont-places">
	                <div class="_inf">
	                    <div class="_txteh">Mascotas</div>
	                    <a href="#" class="_btnsm">¿Llevarás un animal de asistencia?</a>
	                </div>
	                <div class="_2btns">
	                    <button class="_btn" type="button" aria-label="disminuir valor" disabled="">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                    
	                    <span aria-hidden="true">0</span>

	                    <button class="_btn" type="button" aria-label="aumentar valor">
	                        <span>
	                            <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="presentation" focusable="false" style="display: block; fill: none; height: 12px; width: 12px; stroke: currentcolor; stroke-width: 5.33333; overflow: visible;">
	                                <path d="m2 16h28m-14-14v28"></path>
	                            </svg>
	                        </span>
	                    </button>
	                </div>
	            </div>
	        </div>

	        <div class="_txtec">Si tienes la suerte de tener más de 2 mascotas contigo, asegúrate de avisarle a tu anfitrión.</div>
	    </div>
	</div>
</template>

<script>

    import vClickOutside from 'v-click-outside'

	export default {

		name: 'Places',

		data () {
			return {
				'showGuest': false,
			}
		},
	    directives: {
	      clickOutside: vClickOutside.directive
	    },
		methods: {
			clickExterno (event) {
				this.showGuest = false
		    }
		}
	}
</script>

<style lang="css" scoped>
</style>