<x-layout>
    <section class="p-4 h-[90dvh] flex justify-center items-center">
        <div class="flex flex-col text-center gap-4 md:gap-6 lg:gap-8">
            <h1 class="font-bold max-md:text-4xl text-6xl text-gray-700">elec<span class="text-primary">tro</span></h1>
            <p class="mx-auto max-w-[80ch] text-xl">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis et beatae quae iure assumenda sunt
                deleniti pariatur voluptates enim doloribus? Architecto doloribus error fugit vel voluptates quidem quia
                reprehenderit dolorum?
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
                <img src="https://img.freepik.com/photos-premium/travailleur-centrale-electrique-alternative-uniforme-nettoyant-panneaux-solaires-balai-bel-afro-americain-s-occupant-equipement_255667-61620.jpg?w=1380"
                    alt="">
            </div>
            <div class="min-h-32 rounded-md max-md:order-5 flex justify-center items-center">
                <img src="https://img.freepik.com/photos-gratuite/man-panneau-solaire_1048-1647.jpg?w=1060&t=st=1716370612~exp=1716371212~hmac=74a00c32c7be17f1d9b2149c1b0ddf1c7dcb69ec83167db80d6b8024e1bdfa31"
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
        <div class="flex overflow-auto gap-4 p-4 lg:px-8">
            @foreach ($avis as $item)
                <livewire:avis-card :item="$item"/>
            @endforeach
        </div>
        <livewire:avis-form />
    </section>
    <footer class="p-4 lg:p-8" id="contact">
        <x-application-logo route="#footer" />
        <section class="grid grid-cols-1 md:grid-cols-3 p-4 pb-0">
            <div class="">
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
            <div class="">
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
                            voixduclient@gmail.com
                        </a>
                    </li>
                </div>
            </div>
            <div class="">
                <h2 class="text-lg font-medium">Contacter nous par mail</h2>
                <livewire:mail-form />
            </div>
        </section>
        <section class="text-center">
            <p>Copyright &copy; 2024 {{ env('APP_NAME') }}</p>
        </section>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</x-layout>
