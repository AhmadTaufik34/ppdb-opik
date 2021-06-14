<x-front-layout>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4">
                        <x-front-widget posisi="Samping"></x-front-widget>
                    </div>
                    <div class="col-md-8">

                        <h5 class="text-primary page-title">Cetak Formulir</h5>

                        <!-- iframe untuk menampilkan  PDF -->
                        <iframe src="/formulir-pdf" style="width: 100%; height: calc(100vh - 230px);" id="pdf"></iframe>

                        <a href="/dashboard" class="btn btn-secondary text-white float-start">
                            <i class="fas fa-chevron-left"></i> Kembali
                        </a>
                        <!-- membuat tombol yang dapat print dokumen pada iframe -->
                        <a class="btn btn-primary text-white float-end" onclick="
                            pdf = document.getElementById('pdf').contentWindow;
                            pdf.focus();
                            pdf.print();"
                        >
                            <i class="fas fa-print"></i> Cetak
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="footer">
        <x-front-widget posisi="Bawah"></x-front-widget>
    </x-slot>
</x-front-layout>