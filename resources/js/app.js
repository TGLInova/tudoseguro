import Swiper from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation'
import 'swiper/css/pagination'
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { Alpine, Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';

Alpine.data('swiper', function (options = {}) {

    const el = this.$el;

    el.classList.add('swiper', 'swiper-container')


    const swiper = new Swiper(el, {
        modules: [Navigation, Pagination, Autoplay],

        on: {
            init: () => {
                this.$el.classList.remove('swiper-cloak')
            },
        },


        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        pagination: {
            el: el.querySelector('.swiper-pagination'),
            clickable: true,
            type: 'custom',
            renderCustom: (swiper, current, total) => `<div class="swiper-pagination-container">${current} de ${total}</div>`
        },



        slidesPerView: 6,
        spaceBetween: 30,
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,

        },
        loop: false,
        // freeMode: true,
        paginationClickable: true,
        watchSlidesProgress: true,
        ...options,
    });

    return {
        swiper
    }
})



Livewire.start()
