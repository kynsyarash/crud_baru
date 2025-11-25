<section class="w-full bg-white">

    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">

            <!-- Kiri -->
            <div class="w-full md:w-1/2 flex items-center justify-center">
                <img src="{{ asset('storage/' . $produk->path_img) }}" alt="{{ $produk->nama_produk }}"
                    class="w-full max-w-md rounded-xl shadow-lg object-cover">
            </div>

            <!-- Kanan - Form -->
            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Form Profile</h4>
                    <p class="text-lg text-gray-500">Lengkapi informasi perusahaan</p>

                    <div class="relative w-full mt-10 space-y-8">
                        <form action="{{ route('produk.form.submit', $produk->id) }}" method="post">
                            @csrf
                            <!-- Nama -->
                            <div>
                                <label class="block text-lg font-medium text-gray-800">Nama</label>
                                <input type="text"
                                    class="w-full mt-2 px-4 py-3 bg-gray-100 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none"
                                    placeholder="Nama lengkap anda"
                                    name="nama_pembeli">
                            </div>
    
                            <!-- Alamat -->
                            <div>
                                <label class="block text-lg font-medium text-gray-800">Alamat</label>
                                <input type="text"
                                    class="w-full mt-2 px-4 py-3 bg-gray-100 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none"
                                    placeholder="Alamat anda"
                                    name="alamat">
                            </div>
    
                            <!-- Email / No Telp -->
                            <div>
                                <label class="block text-lg font-medium text-gray-800">No Telp</label>
                                <input type="number"
                                    class="w-full mt-2 px-4 py-3 bg-gray-100 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none"
                                    placeholder="Nomor telepon"
                                    name="no_telp">
                            </div>
    
                            <!-- Deskripsi -->
                            <div>
                                <label class="block text-lg font-medium text-gray-800">Deskripsi Kustom</label>
                                <textarea rows="5"
                                    class="w-full mt-2 px-4 py-3 bg-gray-100 rounded-lg focus:ring-2 focus:ring-gray-500 focus:outline-none"
                                    placeholder="Tuliskan permintaan atau pesan anda"
                                    name="deskripsi_kustom">
                                </textarea>
                            </div>
    
                            <!-- Tombol -->
                            <div>
                                <button type="submit"
                                    class="w-full bg-[#889063] text-white py-3 rounded-lg text-lg font-semibold hover:bg-gray-900 transition">
                                    Kirim Form
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>