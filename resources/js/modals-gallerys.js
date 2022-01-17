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

		<div class="container_gllrys">
            <div class="modal-gllrys"></div>
            <div class="pd_gllrys-modal">
                <div class="_z4lmgp">
                    <div class="modal_content-gllrys">
                        <span class="close-x_gllrys">X</span>
                        <div class="content-width">
                            <div class="content_hidden-gllrys">
                                <div class="content_mr">
                                    <img src="${larges[i]}" class="_modal-gllrys">
                                </div>

                                <button class="btn-prev prev">&#60;</button>
            					<button class="btn-next next">&#62;</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		`

		lightboxElement.className = 'container_gllrys';
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
	})
}


// Navegar en el modal
const navigateLightbox = (lightboxElement, i, larges, descriptions) => {
	let prevButton = lightboxElement.querySelector('.prev'),
		nextButton = lightboxElement.querySelector('.next'),
		image = lightboxElement.querySelector('img'),
		description = lightboxElement.querySelector('p'),
		counter = lightboxElement.querySelector('span'),
		closeButton = lightboxElement.querySelector('.close-x_gllrys');

	window.addEventListener('keyup', e => {
		if (e.key === 'ArrowRight') nextButton.click();
		if (e.key === 'ArrowLeft') prevButton.click();
		// if (e.key === 'Escape') closeButton.click();
		// if (e.keyCode == 32 || e.code == "Space") closeButton.click();
	});

	let bodyHtml = document.querySelector(".page-category");
	bodyHtml.style.overflow = "hidden";



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

		// description.textContent = descriptions[i];
		// counter.textContent = `Imagen ${i + 1} de ${larges.length}`;

	})
};


const lightbox = container => {
	let images = getImages(container),
		larges = getLargeImages(images),
		descriptions = getDescriptions(images);
		openLightboxEvent(container, images, larges, descriptions);
};