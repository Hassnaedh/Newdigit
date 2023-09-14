@extends('layouts.guest')

@section('content')

<main class="max-w-7xl mx-auto">
<!--Header section-->
    <header class="py-4 bg-white sm:py-5" x-data="{expanded: false}">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl" >
            <nav class="flex items-center justify-between shadow-lg  ring-opacity-80 rounded-lg">
                <div class="flex shrink-0">
                    <a href="#" title="" class="flex">
                        <p class="text-blue-500 text-3xl font-bold pl-5" >Digit-On</p>
                    </a>
                </div>

                <div class="hidden md:flex md:items-center md:justify-end md:space-x-4 lg:space-x-6 pr-4 py-4">
                    <a href="#acceuil" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600"> Acceuil </a>

                    <a href="#services" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600"> Nos services </a>

                    <a href="#realisations" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600"> Nos réalisations </a>

                    <a href="#equipe" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600"> Notre Equipe </a>

                    <a href="#blog" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600"> Blog </a>

                    <a href="#contact" title="" class="text-base font-medium text-gray-900 transition-all duration-200 hover:text-blue-600">  Contact US </a>
                </div>
            </nav>

            <nav x-show="expanded" x-collapse>
                <div class="px-1 pt-8 pb-4">
                    <div class="grid gap-y-6">
                        <a href="#acceuil" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Acceuil </a>

                        <a href="#services" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Nos services </a>

                        <a href="#realisations" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Nos réalisations </a>

                        <a href="#equipe" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Notre Equipe </a>

                        <a href="#blog" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Blog </a>

                        <a href="#contact" title="" class="flex items-center text-base font-medium text-gray-900 transition-all duration-200 focus:outline-none focus:ring-0"> Contact Us </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

<!--Hero section-->

    <section class="pb-12 bg-white sm:pb-16 lg:pb-20">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="relative py-12 overflow-hidden bg-blue-600 rounded-xl sm:py-16 lg:py-20">
                <div class="relative max-w-5xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="relative">
                        <div class="absolute"></div>

                        <div class="relative grid grid-cols-1 lg:grid-cols-5 gap-y-12 gap-x-16 xl:gap-x-20">
                            <div class="flex flex-col justify-between lg:col-span-3">
                                <div>
                                    <h1 class="text-4xl font-bold text-black sm:text-5xl">
                                        Pourquoi
                                        <span class="relative inline text-white">
                                            <img class="absolute top-0 w-auto h-8 -right-8" src="https://landingfoliocom.imgix.net/store/collection/clarity-blog/images/hero/3/design-element.svg" alt="" />
                                            Digit-On </span
                                        ><br />
                            
                                    </h1>
                                    <p class="mt-6 text-xl font-normal leading-7 text-white text-opacity-85"> A travers la stratégie et le leadership digital, on vous offre des méthodes performantes, fluides, progressives afin de réussir votre transformation digitale.</p>
                                </div>

                                <div class="mt-8 lg:mt-auto">
                               <button type="button"
                                class="inline-flex items-center justify-center px-6 py-3 text-base font-semibold leading-5 text-white transition-all duration-200 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 hover:bg-blue-500 hover:text-white">
                                Rendez-vous En ligne
                                <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                                </button>
                                </div>
                            </div>

                            <div class="lg:col-span-2">
                                <img class="w-full h-full" src="{{ asset('img/Marketing consulting-pana (2).png') }}" alt="SVG Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--features section-->

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="w-full mb-4" id="youtube-video"></div>
    
        <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
        <h1 class="title-font sm:text-5xl text-2xl mb-4 font-medium text-blue-500 ">Découvrez notre service 
        <br class="hidden lg:inline-block">d'automatisation marketing
        </h1>
        <p class="mb-8 leading-relaxed text-gray-700 font-semibold">Générer des clients quotidiennement grâce à notre plateforme digitale
                Commencer à gagner des vrais clients avec un systéme de marketing avancé</p>
        <div class="flex justify-center">
        <button class="inline-flex text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-700 rounded-full shadow-md text-md font-semibold">Découvrez le service génération de leads</button>
        </div>
        </div>
        </div>
    </section>

<!--Domaines d'expertise section-->

    <section class="py-12 bg-white sm:py-16 lg:py-20">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-3xl font-bold leading-tight text-blue-700 sm:text-4xl xl:text-5xl font-pj">Domaines d'expertise</h2>       
        </div>

        <div class="grid grid-cols-1 mt-10 text-center sm:mt-16 sm:grid-cols-2 sm:gap-x-12 gap-y-12 md:grid-cols-3 md:gap-0 xl:mt-24 shadow-lg bg-gradiant-gray rounded-lg">
            <a href="{{ route('services') }}" class="block md:p-8 lg:p-14 shadow-lg bg-gradiant-gray rounded-lg">
                <img class="w-2xl mx-auto" src="{{ asset('img/5911565_2953991.svg') }}" alt="SVG Image">
                <h3 class="mt-12 text-xl font-bold text-blue-600 font-pj">Conseil et formation</h3>
                <p class="mt-5 font-semibold text-base text-gray-700 font-pj">Premièrement, planifier et mettre
                en place une stratégie réussite,
                efficace et cohérente avec votre
                secteur d'activité</p>
            </a>

            <a href="{{ route('services') }}" class="block md:p-8 lg:p-14 md:border-l md:border-gray-200 shadow-lg bg-gradiant-gray rounded-lg">
                <img class="w-xl mx-auto" src="{{ asset('img/Designer girl-cuate.svg') }}" alt="SVG Image">
                <h3 class="mt-12 text-xl font-bold text-blue-600 font-pj">Design graphique</h3>
                <p class="mt-5 text-base text-gray-700 font-semibold font-pj">Deuxièmement, dessiner votre
                    marque, pour bâtir votre image et
                    ancrer votre présence dans
                    l'esprit de vos clients</p>
            </a>

            <a href="{{ route('services') }}" class="block md:p-8 lg:p-14 md:border-l md:border-gray-200 shadow-lg bg-gradiant-gray rounded-lg">
                <img class="w-2xl mx-auto" src="{{ asset('img/Mobile Marketing-pana.svg') }}" alt="SVG Image">
                <h3 class="mt-12 text-xl font-bold text-blue-600 font-pj">Marketing digital</h3>
                <p class="mt-5 text-base text-gray-700 font-semibold font-pj">Pour Finir, ajouter un coup de boost par une communication digitale efficace dont l'objectif est de savoir attirer l'attention de vos internautes</p>
            </a>

        </div>
    </div>
    </section>
<!--Realisations section-->
    <div class="text-center pb-16">
        <h2 class="text-3xl font-bold leading-tight text-blue-700 sm:text-4xl xl:text-5xl font-pj">Nos réalisations<h2>       
    </div>
    <div x-data="{
        imageGalleryOpened: false,
        imageGalleryActiveUrl: null,
        imageGalleryImageIndex: null,
        imageGallery: [
            {
                'photo': '/img/realisations1.jpg',
                'alt': 'Photo of Mountains'
            },
            {
                'photo': '/img/realisations2.jpg',
                'alt': 'Photo of Mountains 02'
            },
            {
                'photo': '/img/realisations3.jpg',
                'alt': 'Photo of Mountains 03'
            },
            {
                'photo': '/img/realisations4.jpg',
                'alt': 'Photo of Mountains 04'
            },
            {
                'photo': '/img/diadesign.png',
                'alt': 'Photo of Mountains 04'
            }
            
        ],
        imageGalleryOpen(event) {
            this.imageGalleryImageIndex = event.target.dataset.index;
            this.imageGalleryActiveUrl = event.target.src;
            this.imageGalleryOpened = true;
        },
        imageGalleryClose() {
            this.imageGalleryOpened = false;
            setTimeout(() => this.imageGalleryActiveUrl = null, 300);
        },
        imageGalleryNext(){
            this.imageGalleryImageIndex = (this.imageGalleryImageIndex == this.imageGallery.length) ? 1 : (parseInt(this.imageGalleryImageIndex) + 1);
            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
        },
        imageGalleryPrev() {
            this.imageGalleryImageIndex = (this.imageGalleryImageIndex == 1) ? this.imageGallery.length : (parseInt(this.imageGalleryImageIndex) - 1);
            this.imageGalleryActiveUrl = this.$refs.gallery.querySelector('[data-index=\'' + this.imageGalleryImageIndex + '\']').src;
            
        }
    }" 
    @image-gallery-next.window="imageGalleryNext()" 
    @image-gallery-prev.window="imageGalleryPrev()" 
    @keyup.right.window="imageGalleryNext();" 
    @keyup.left.window="imageGalleryPrev();"
    class="w-full h-full select-none">
    <div class="max-w-6xl mx-auto duration-1000 delay-300 opacity-0 select-none ease animate-fade-in-view" style="translate: none; rotate: none; scale: none; opacity: 1; transform: translate(0px, 0px);">
        <ul x-ref="gallery" id="gallery" class="grid grid-cols-2 gap-5 lg:grid-cols-5">
            <template x-for="(image, index) in imageGallery">
                <li><img x-on:click="imageGalleryOpen" :src="image.photo" :alt="image.alt" :data-index="index+1" class="object-cover select-none w-full h-auto bg-gray-200 rounded cursor-zoom-in aspect-[5/6] lg:aspect-[2/3] xl:aspect-[3/4]"></li>
            </template>
        </ul>
    </div>
    <template x-teleport="body">
        <div 
            x-show="imageGalleryOpened" 
            x-transition:enter="transition ease-in-out duration-300" 
            x-transition:enter-start="opacity-0" 
            x-transition:leave="transition ease-in-in duration-300" 
            x-transition:leave-end="opacity-0" 
            @click="imageGalleryClose" 
            @keydown.window.escape="imageGalleryClose" 
            x-trap.inert.noscroll="imageGalleryOpened"
            class="fixed inset-0 z-[99] flex items-center justify-center bg-black bg-opacity-50 select-none cursor-zoom-out" x-cloak>
            <div class="relative flex items-center justify-center w-11/12 xl:w-4/5 h-11/12"> 
                <div @click="$event.stopPropagation(); $dispatch('image-gallery-prev')" class="absolute left-0 flex items-center justify-center text-white translate-x-10 rounded-full cursor-pointer xl:-translate-x-24 2xl:-translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" /></svg>
                </div>
                <img 
                    x-show="imageGalleryOpened" 
                    x-transition:enter="transition ease-in-out duration-300" 
                    x-transition:enter-start="opacity-0 transform scale-50" 
                    x-transition:leave="transition ease-in-in duration-300" 
                    x-transition:leave-end="opacity-0 transform scale-50" 
                    class="object-contain object-center w-full h-full select-none cursor-zoom-out" :src="imageGalleryActiveUrl" alt="" style="display: none;">
                <div @click="$event.stopPropagation(); $dispatch('image-gallery-next');" class="absolute right-0 flex items-center justify-center text-white -translate-x-10 rounded-full cursor-pointer xl:translate-x-24 2xl:translate-x-32 bg-white/10 w-14 h-14 hover:bg-white/20">
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" /></svg>
                </div>
            </div>
        </div>
    </template>
    <div class="container py-10 px-10 mx-0 min-w-full flex items-center justify-center">
        <button type="button" class="inline-flex items-center justify-center px-6 py-3 text-sm font-semibold leading-5 text-white transition-all duration-200 bg-blue-600 border border-transparent rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 hover:bg-blue-700 shadow-md">
                En savoir plus
            <svg class="w-6 h-6 ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </button>    
    </div>

</div>
<!--Article section-->
<section class="py-12 bg-white sm:py-16 lg:py-20 max-w-7xl">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="max-w-md mx-auto text-center">
        <h2 class="text-3xl font-bold leading-tight text-blue-700 sm:text-4xl  font-pj">Nos derniers articles<h2>       
        </div>
        <div class="grid max-w-3xl grid-cols-1 mx-auto mt-8 text-center sm:mt-16 sm:text-left sm:grid-cols-2 gap-y-8 gap-x-8 lg:gap-x-20">
            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125" src="{{ asset('img/article1.jpg') }}" alt="" />
                </div>
                <p class="mt-6 text-base font-semibold text-blue-600 font-pj hover:underline"><a href="#blog">C'est quoi L'inbound marketing?</a></p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">L'inbound marketing est une stratégie du marketing digital qui permet aux entreprises...</p>
                <a href="#blog" title="" class="underline pt-6 text-center text-blue-800">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    Lire la suite
                </a>
            </div>

            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125" src="{{ asset('img/article2.jpg') }}" alt="" />
                </div>
                <p class="mt-6 text-base font-semibold text-blue-600 font-pj"><a href="#blog">C'est quoi l' e-commerce ?</a></p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">On peut définir l'e-commerce comme étant l'ensemble de transactions commerciales... </p>
                <a href="#" title="" class="underline pt-6 text-center text-blue-800">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    Lire la suite
                </a>
            </div>

            <div class="relative group">
                <div class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9">
                    <img class="object-cover w-full h-full transition-all duration-300 transform group-hover:scale-125" src="{{ asset('img/article3.jpg') }}" alt="" />
                </div>
                <p class="mt-6 text-base font-semibold text-blue-600 font-pj"><a href="#blog">Passer de la vente à la vision marketing</a></p>
                <p class="mt-4 text-xl font-bold text-gray-900 font-pj">Si depuis quelques années ou même quelques siècles, la notion de vendre dépendait... </p>
                <a href="#" title="" class="underline pt-6 text-center text-blue-800">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    Lire la suite
                </a>
            </div>
        </div>
    </div>
</section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Remplacez 'PvyJ-V3fKRI' par l'ID de la vidéo YouTube
    const videoId = 'PvyJ-V3fKRI';
    const iframe = document.createElement('iframe');
    iframe.setAttribute('src', `https://www.youtube.com/embed/${videoId}`);
    iframe.setAttribute('width', '100%'); // Largeur de la vidéo
    iframe.setAttribute('height', '400'); // Hauteur de la vidéo
    iframe.setAttribute('frameborder', '0');
    iframe.setAttribute('allowfullscreen', 'true');
    document.getElementById('youtube-video').appendChild(iframe);
});
</script>

@push('scripts')

@endpush

@endsection
