<x-layout>
    <section class="p-4 h-[90dvh] flex justify-center items-center">
        <div class="flex flex-col text-center gap-4 md:gap-6 lg:gap-8">
            <h1 class="font-bold max-md:text-4xl text-6xl text-gray-700">elec<span class="text-primary">tro</span></h1>
            <p class="mx-auto max-w-[80ch] text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis et beatae quae iure assumenda sunt
            </p>
            <div class="flex items-center justify-center gap-2 md:gap-4 lg:gap-6 max-lg:scale-75">
                @auth
                    {{-- @if (auth()->user()->hasRole('admin'))
                        <a href="{{ route('dashboard') }}" class="btn">Tableau de bord</a>
                    @else
                        <a href="#contact" class="btn">Nous contacter</a>
                    @endif --}}
                    <a href="#contact" class="btn">Nous contacter</a>
                @else
                    <a href="#contact" class="btn-hover">Nous contacter</a>
                @endauth
            </div>
        </div>
    </section>
    <section class="text-center p-8" id="about">
        <h1 class="text-lg font-bold uppercase text-gray-800">Qui sommes nous</h1>
        <p class="p-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quasi fugit laudantium, necessitatibus ab,
            magni dicta odit consectetur esse voluptate ratione incidunt reiciendis, doloribus nesciunt distinctio ullam
            quod similique ipsam.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis et beatae quae iure assumenda sunt
            deleniti pariatur voluptates enim doloribus? Architecto doloribus error fugit vel voluptates quidem quia
            reprehenderit dolorum?
        </p>
    </section>
    <section class="p-4" id="services">
        <h1 class="text-center text-lg font-bold uppercase text-gray-800 p-4">Nos services</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 md:gap-4 max-md:gap-y-4 p-2 lg:p-8">
            <div class="min-h-32 rounded-md max-md:order-1 flex justify-center items-center">
                <img src="https://img.freepik.com/photos-gratuite/panneaux-solaires-toit-cellule-photovoltaique_335224-1324.jpg?w=1480&t=st=1716370382~exp=1716370982~hmac=8ceacaf03b3aca88c6f01e774cc1f287a474d6cc96bffa9535ca128e9288ac41"
                    alt="">
            </div>
            <div class="text-card max-md:order-2">
                <h1 class="font-medium text-xl lg:text-2xl uppercase py-4 pr-4">Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit.</h1>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, deleniti.
                    Dolores labore consequuntur, eum voluptatem, doloribus illo velit quasi ex optio praesentium
                    obcaecati rem deserunt, incidunt debitis quam exercitationem iure?</p>
            </div>
            <div class="text-card max-md:order-4">
                <h1 class="font-medium text-xl lg:text-2xl uppercase py-4 pr-4">Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit.</h1>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, deleniti.
                    Dolores labore consequuntur, eum voluptatem, doloribus illo velit quasi ex optio praesentium
                    obcaecati rem deserunt, incidunt debitis quam exercitationem iure?</p>
            </div>
            <div class="min-h-32 rounded-md max-md:order-3 flex justify-center items-center">
                <img src="https://i.pinimg.com/564x/62/c2/9e/62c29e2fc39d518055ba9581ac4db2c9.jpg"
                    alt="">
            </div>
            <div class="min-h-32 rounded-md max-md:order-5 flex justify-center items-center">
                <img src="https://i.pinimg.com/564x/7f/07/19/7f07191d4893d6eeb35a244b26280159.jpg"
                    alt="">
            </div>
            <div class="text-card max-md:order-6">
                <h1 class="font-medium text-xl lg:text-2xl uppercase py-4 pr-4">Lorem ipsum dolor, sit amet consectetur
                    adipisicing elit.</h1>
                <p class="">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos, deleniti.
                    Dolores labore consequuntur, eum voluptatem, doloribus illo velit quasi ex optio praesentium
                    obcaecati rem deserunt, incidunt debitis quam exercitationem iure?</p>
            </div>
        </div>
    </section>
    <section class="p-4" id="avis">
        <h1 class="text-center text-lg font-bold uppercase text-gray-800">Les avis sur nous</h1>
        <div class="flex overflow-auto gap-4 p-4 lg:px-8" id="avis-card-container">
            @foreach ($avis as $item)
                <livewire:avis-card :item="$item"/>
            @endforeach
        </div>
        <livewire:avis-form />
    </section>
    <footer class="p-4 lg:p-8" id="contact">
        <x-application-logo route="#footer" />
        <section class="grid grid-cols-1 md:grid-cols-3 p-4 pb-0">
            <div class="max-md:order-2">
                <h2 class="font-medium text-lg">Suivez nous</h2>
                <div class="grid grid-cols-1 items-center gap-4 p-4 w-full border-b-[.1px] md:border-b-0 mt-1">
                    <li class="list-none flex items-center justify-start">
                        <a href="" target="_blank" class="flex items-center gap-0.5">
                            <span class="text-2xl flex items-center">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </span>
                            Facebook
                        </a>
                    </li>
                    <li class="list-none flex items-center justify-start">
                        <a href="" target="_blank" class="flex items-center gap-0.5">
                            <span class="text-2xl flex items-center">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </span>
                            Linkedin
                        </a>
                    </li>
                </div>
            </div>
            <div class="max-md:order-3">
                <h2 class="font-medium text-lg">Contact</h2>
                <div class="grid grid-cols-1 items-center gap-4 p-4 w-full border-b-[.1px] md:border-b-0 mt-1">
                    <li class="list-none flex items-center justify-start">
                        <a href="tel:0022890000001" class="flex items-center gap-2">
                            <span class="text-2xl flex items-center">
                                <ion-icon name="call-outline"></ion-icon>
                            </span>
                            (+228) 90000001
                        </a>
                    </li>
                    <li class="list-none flex items-center justify-start">
                        <a href="https://wa.me/0022893053218" target="_blank" class="flex items-center gap-2">
                            <span class="text-2xl flex items-center">
                                <ion-icon name="logo-whatsapp"></ion-icon>
                            </span>
                            Whatsapp
                        </a>
                    </li>
                    <li class="list-none flex items-center justify-start">
                        <a href="mailto:voixduclient@gmail.com" class="flex items-center gap-2">
                            <span class="text-2xl flex items-center">
                                <ion-icon name="mail-outline"></ion-icon>
                            </span>
                            {{env('APP_NAME')}}@gmail.com
                        </a>
                    </li>
                </div>
            </div>
            <div class="max-md:order-1">
                <h2 class="text-lg font-medium">Contacter nous par mail</h2>
                <livewire:mail-form />
            </div>
        </section>
        <section class="text-center">
            <p>Copyright &copy; 2024 <a href="" class="font-bold">{{ env('APP_NAME') }}</a></p>
        </section>
        <span class="hidden rounded-full h-10 w-10 border border-slate-500 bg-slate-400 items-center justify-center shadow-xl fixed top-[90%] right-4 text-lg font-bold" onclick="scrollToTop()"><ion-icon name="arrow-up-outline"></ion-icon></span>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        function scrollToTop(){
            document.documentElement.scrollTop = 0; // Pour les navigateurs Chrome, Firefox, IE et Opera
        }

        window.onscroll = function() {
            var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
            var btnScrollToTop = document.querySelector('span[onclick="scrollToTop()"]');
            
            if (scrollPosition > 0) {
                btnScrollToTop.classList.remove('hidden');
                btnScrollToTop.classList.add('flex');
            } else {
                btnScrollToTop.classList.add('hidden');
                btnScrollToTop.classList.remove('flex');
            }
        };

        function scrolElementToRight(complaintsContainer){
            let interval1 = setInterval(() => {
                complaintsContainer.scrollLeft+=100;   
                
                if(complaintsContainer.scrollLeft+window.innerWidth>=complaintsContainer.scrollWidth){
                    clearInterval(interval1);
                    scrollElementToLeft(complaintsContainer);
                }
            }, 1000);
        }

        function scrollElementToLeft(complaintsContainer){
            let interval1 = setInterval(() => {
                complaintsContainer.scrollLeft-=100;   
                
                if(complaintsContainer.scrollLeft<=0){
                    clearInterval(interval1);
                    scrolElementToRight(complaintsContainer)
                }
            }, 1000);
        }

        
        let element = document.getElementById('avis-card-container');

        scrolElementToRight(element);
    </script>
</x-layout>
