<x-default-layout>
    <x-slot:head>
        @vite(['resources/css/pages/textile.css'])
    </x-slot:head>

    <x-header header-over-main="true" variant="white"/>

    <main class="page page-textile">
        <div class="section section-jumbotron">
            <img src="{{ asset('assets/brand/cefest-tekstil.png') }}" alt="CeFest Tekstil">
        </div>

        <div class="section section-under-construction">
            <div class="section-under-construction-wrap">
                <h2>Yapım Aşamasında..</h2>
            </div>
        </div>
    </main>

    <x-footer/>
</x-default-layout>
