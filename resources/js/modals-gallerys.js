// Obtener la galeria de imagenes
const getImages = container => [...container.querySelectorAll('img')];



// Obtener un array de las rutas de las imagenes grandes
const getLargeImages = gallery => gallery.map(el => el.src).map(el => el.replace('thumb', 'large'));





// Obtener las descripciones de las imagenes
const getDescriptions = gallery => gallery.map(el => el.alt);



// Capturar el evento click en la galeria para abrir el lightbox
const openLightboxEvent = (container, gallery, larges, descriptions) => {
 	container.addEventListener('click', e => {
 		let el = e.target,
 			i = gallery.indexOf(el);
 		if (el.tagName === 'IMG') {
 			openLightbox(gallery, i, larges, descriptions);
 		}
 	})
};


// Imprimir overlay del lightbox en el body
const openLightbox = (gallery, i, larges, descriptions) => {
	let lightboxElement = document.createElement('div');
		lightboxElement.innerHTML = `
			<div class="_z4lmgp">
				<div class="whfxfdc">
					<section>
						<div class="fxaijcmpz">
							<div class="cfflaifxjcp">
								<h2 class="cfsfwlhmp count_glr"></h2>
							</div>

							<div class="fxf00a">
								<button type="button" class="btn__nrltext btnmenosmrg close-x_gllrys">
									<span class="fxfdraicpen">
										<span class="mr-r8">
											<svg viewBox="0 0 12 12" focusable="false" style="height: 12px; width: 12px; display: block; fill: currentcolor;">
												<path d="m11.5 10.5c.3.3.3.8 0 1.1s-.8.3-1.1 0l-4.4-4.5-4.5 4.5c-.3.3-.8.3-1.1 0s-.3-.8 0-1.1l4.5-4.5-4.4-4.5c-.3-.3-.3-.8 0-1.1s.8-.3 1.1 0l4.4 4.5 4.5-4.5c.3-.3.8-.3 1.1 0s .3.8 0 1.1l-4.5 4.5z" fill-rule="evenodd"></path>
											</svg>
										</span>

										<span>Cerrar</span>
									</span>
								</button>
							</div>
						</div>
					</section>

					<div class="whcplt">
						<div class="whmpt">
							<div class="ht-p100">
								<div class="bdbofxfdch">
									<div class="fmhpr">
										<picture>
											<img class="pawhofva" src="${larges[i]}" data-original-uri="https://a0.muscache.com/im/pictures/miso/Hosting-46695796/original/9bd67185-dc83-4473-a191-9486c62aec66.jpeg?aki_policy=large">
										</picture>
									</div>
								</div>
							</div>
						</div>

						<div class="whtlfxpefdcjc">
							<div class="fxjcmlmr">
								<div class="peall">
									<button type="button" class="_1lotlmr prev"></button>
								</div>

								<div class="peall">
									<button type="button" class="_1lotlmr next"></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		`

		lightboxElement.className = 'pfi0zi container_gllrys';
		document.body.appendChild(lightboxElement);

		closeModal(lightboxElement);
		navigateLightbox(lightboxElement, i, larges, descriptions);
};



// Cerrar Modal
const closeModal = modalElement => {
	let closeModal = modalElement.querySelector('.close-x_gllrys');
	closeModal.addEventListener('click', e => {
		e.preventDefault();
		document.body.removeChild(modalElement);
	});
}


// Navegar en el modal
const navigateLightbox = (lightboxElement, i, larges, descriptions) => {
	let prevButton = lightboxElement.querySelector('.prev'),
		nextButton = lightboxElement.querySelector('.next'),
		image = lightboxElement.querySelector('img'),
		description = lightboxElement.querySelector('p'),
		counter = lightboxElement.querySelector('.count_glr'),
		closeButton = lightboxElement.querySelector('.close-x_gllrys');

	window.addEventListener('keyup', e => {
		if (e.key === 'ArrowRight') {
			nextButton.click();
			console.log("dsa")
		};

		if (e.key === 'ArrowLeft') {
			prevButton.click();
		};

		// if (e.key === 'Escape') closeButton.click();
		// if (e.keyCode == 32 || e.code == "Space") closeButton.click();
	});

	let bodyHtml = document.querySelector(".page-category");
	bodyHtml.style.overflow = "hidden";

	const contDes = () => {
		// description.textContent = descriptions[i];
		counter.textContent = `${i + 1} / ${larges.length}`;
	}

	contDes();

	lightboxElement.addEventListener('click', e => {
		e.preventDefault();
		let target = e.target;

		if (target === prevButton) {
			if (i > 0) {
				image.src = larges [i - 1];
				i--
			} else {
				image.src = larges[larges.length - 1];
				i = larges.length - 1;
			}
		} else if (target === nextButton) {
			if (i < larges.length - 1) {
				image.src = larges [i + 1];
				i++
			} else {
				image.src = larges [0];
				i = 0;
			}
		}

		contDes();
	});
};


const lightbox = container => {
	let images = getImages(container),
		larges = getLargeImages(images),
		descriptions = getDescriptions(images);
		openLightboxEvent(container, images, larges, descriptions);
};