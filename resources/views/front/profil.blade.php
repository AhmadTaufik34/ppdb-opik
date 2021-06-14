<x-front-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">

        <div class="row">
            <!--Menampilkan widget dengan posisi samping -->
            <div class="col-md-4 sidebar-widget">
                <x-front-widget posisi="Samping"></x-front-widget>
            </div>
            <div class="col-md-8">
                <h5 class="page-title">Profile User</h5>

                <livewire:front.profil-user />
            </div>
        </div>
            </div>
        </div>
    </div>

    <!-- Menampilkan widget dengan posisi bawah -->
    <x-slot name="footer">
        <x-front-widget posisi="Bawah"></x-front-widget>
    </x-slot>
</x-front-layout>