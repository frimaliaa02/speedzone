<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Flowbite CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
</head>
<body class="bg-gray-50">

    <div class="container mx-auto px-4 mt-20">
        <h1 class="text-3xl font-bold mb-6 text-center">Daftar Produk</h1>

        <h2 class="text-xl font-semibold mb-2 text-gray-700">Input Produk</h2>
        <form action="{{ route('produk.simpan') }}" method="POST" class="mb-10 bg-gray-100 p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <input type="text" name="nama" placeholder="Nama Produk" class="p-2 border rounded" required>
                <input type="text" name="deskripsi" placeholder="Deskripsi Produk" class="p-2 border rounded" required>
                <input type="number" name="harga" placeholder="Harga Produk" class="p-2 border rounded" required>
            </div>
            <button type="submit" class="mt-4 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
        </form>

        <table class="w-full text-sm text-left text-gray-700 border border-gray-300 shadow-md rounded-lg overflow-hidden">
            <thead class="text-xs text-white uppercase bg-blue-600">
                <tr>
                    <th scope="col" class="px-6 py-3">No</th>
                    <th scope="col" class="px-6 py-3">Nama Produk</th>
                    <th scope="col" class="px-6 py-3">Deskripsi Produk</th>
                    <th scope="col" class="px-6 py-3">Harga Produk</th>
                    <th scope="col" class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $index => $item)
                <tr class="bg-white border-b hover:bg-blue-50">
                    <td class="px-6 py-4">{{ $index + 1 }}</td>
                    <td class="px-6 py-4">{{ $item->nama }}</td>
                    <td class="px-6 py-4">{{ $item->deskripsi }}</td>
                    <td class="px-6 py-4">Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td class="px-6 py-4 flex gap-2">
                        
             <a href="{{ route('produk.edit', $item->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600">Edit</a>
                 <form action="{{ route('produk.delete', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                 @csrf
                 @method('DELETE')
                  <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">Hapus</button>
                </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Flowbite JS (letakkan di paling bawah sebelum penutup body) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>
