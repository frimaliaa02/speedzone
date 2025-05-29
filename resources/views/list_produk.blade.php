<div class="container mx-auto px-4 mt-20">
    <h1 class="text-3xl font-bold mb-6 text-center">Daftar Produk</h1>

    <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg overflow-hidden">
        <thead class="bg-blue-600 text-white">
        <script src="https://cdn.tailwindcss.com"></script>

            <tr>
                <th class="py-3 px-4 text-left">No</th>
                <th class="py-3 px-4 text-left">Nama Produk</th>
                <th class="py-3 px-4 text-left">Deskripsi Produk</th>
                <th class="py-3 px-4 text-left">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $item)
            <tr class="border-t hover:bg-blue-50">
                <td class="py-3 px-4">{{ $index + 1 }}</td>
                <td class="py-3 px-4">{{ $item->nama }}</td>
                <td class="py-3 px-4">{{ $item->deskripsi }}</td>
                <td class="py-3 px-4">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
