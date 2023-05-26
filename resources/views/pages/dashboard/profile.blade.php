<x-app-layout>
    <div class="profile">
        <div class="container">
            <div class="profile__block flex">
                @include('components.dashboard.sidebar')
               <livewire:profile/>
            </div>
        </div>
    </div>
</x-app-layout>
