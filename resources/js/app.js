// noinspection JSCheckFunctionSignatures,ES6CheckImport

import Alpine from 'alpinejs';
import GLightbox from 'glightbox';
import {modal as TingleModal} from 'tingle.js/src/tingle';

import './bootstrap';

window.Alpine = Alpine;

Alpine.start();

const fetchWrapper = (url, options = {headers: {}}) => {
    options = {
        ...options,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            ...options.headers
        },
    };

    return fetch(url, options)
        .then(async (response) => {
            if (!response.ok) {
                const error = new Error(response.statusText);

                response.data = await response.json();
                error.response = response;

                console.log('app.js:21', response.data);

                return Promise.reject(error);
            }

            return Promise.resolve(response.json());
        });
}

const initLightBox = () => {
    GLightbox({
        selector: '.glightbox',
    });
};

const initSlider = () => {
    const elm = document.querySelector('.slider');
    if (!elm) return;

    const container = elm.querySelector('.slider-content-list');
    if (!container) return;

    Array.from(container.children).forEach((target) => target.addEventListener('click', () => {
        Array.from(container.children).forEach((item) => item.classList.remove('active'));

        target.classList.add('active');
    }));
};

const initGetOffer = () => {
    const elmTrigger = document.querySelector('.get-offer-trigger');
    if (!elmTrigger) return;

    elmTrigger.addEventListener('click', async (e) => {
        e.preventDefault();

        const viewData = await fetchWrapper('/iletisim');

        const elmForm = document.createElement('form');
        elmForm.classList.add('contact-form')
        elmForm.innerHTML = await viewData.html;

        const modal = new TingleModal({
            footer: true,
            stickyFooter: false,
            closeMethods: ['overlay', 'button', 'escape'],
            closeLabel: "Kapat",
            cssClass: ['get-offer-modal'],
            onClose: () => {
                modal.modal.remove();
            }
        });

        modal.setContent(elmForm);

        const elmLoading = document.createElement('div');
        elmLoading.classList.add('flex', 'gap-4', 'items-center', 'hidden');
        elmLoading.innerHTML = `
            <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"></path>
                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"></path>
            </svg>
            <span>Bilgileriniz gönderiliyor...</span>
        `;

        const elmSubmit = modal.addFooterBtn('Teklif Al', 'tingle-btn tingle-btn--black', async () => {
            const invalidInputs = elmForm.querySelectorAll(':invalid');
            if (invalidInputs.length > 0) {
                return Swal.fire({
                    title: 'Dikkat!',
                    text: 'Lütfen tüm alanları doldurunuz.',
                    icon: 'warning',
                });
            }

            elmLoading.classList.remove('hidden');

            try {
                elmSubmit.disabled = true;

                const data = await fetchWrapper('/iletisim', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': viewData?.['csrf_token'],
                    },
                    body: new FormData(elmForm)
                });

                Swal.fire({
                    title: 'Tebrikler!',
                    html: data.message,
                    icon: 'success',
                });

                modal.close();
            } catch (err) {
                window.xerr = err;
                Swal.fire({
                    title: 'Bir hata oluştu!',
                    html: err.response.data.message,
                    icon: 'error',
                });
            } finally {
                elmSubmit.disabled = false;
                elmLoading.classList.add('hidden');
            }
        });

        const elmLoadingWrapper = document.createElement('div');
        elmLoadingWrapper.append(elmLoading);
        modal.modalBoxFooter.insertBefore(elmLoadingWrapper, elmSubmit);

        modal.open();
    });

};

initSlider();
initLightBox();
initGetOffer();
