<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto px-4 mt-20">
    <h1 class="text-2xl font-bold mb-4 text-center">Edit Produk</h1>

   <form action="{{ route('produk.update', $produk->id) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div>
                <label class="block mb-1 font-semibold">Nama Produk</label>
                <input type="text" name="nama" value="{{ old('nama', $produk->nama) }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Deskripsi</label>
                <input type="text" name="deskripsi" value="{{ old('deskripsi', $produk->deskripsi) }}" class="w-full p-2 border rounded" required>
            </div>

            <div>
                <label class="block mb-1 font-semibold">Harga</label>
                <input type="number" name="harga" value="{{ old('harga', $produk->harga) }}" class="w-full p-2 border rounded" required>
            </div>
        </div>

        <div class="mt-6 text-center">
            <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
            {{-- Ganti route ini ke produk.index atau route lain yang tidak butuh parameter --}}
         <a href="{{ route('listproduk') }}" class="ml-4 text-blue-600 underline">Kembali</a>


        </div>
    </form>
</div>

</body>
</html>
