<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELAPIK</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div>
        <button class="flex items-center bg-gray-300 w-28 h-16 font-bold rounded-lg ml-10 mt-5 shadow-lg hover:shadow-xl transition duration-500">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 ml-2">
                <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25Zm-4.28 9.22a.75.75 0 0 0 0 1.06l3 3a.75.75 0 1 0 1.06-1.06l-1.72-1.72h5.69a.75.75 0 0 0 0-1.5h-5.69l1.72-1.72a.75.75 0 0 0-1.06-1.06l-3 3Z" clip-rule="evenodd" />
              </svg>Kembali</button>
    </div>
    <div class="flex flex-col items-center mt-5">
        <div class="bg-yellow-100 w-4/5 px-4 py-5 shadow-2xl">
            <div class="border-black border-b-2 border-t-2 mt-3 mb-3">
                <div class="font-bold text-3xl mt-3 mb-3">
                    <h1>Rincian Pesanan</h1>
                </div>
            </div>
            <div class="flex justify-between border-black border-b-2">
                <div>
                    <table class="table-auto">
                        <tr>
                            <td class="px-10 py-2">Kode Reservasi : </td>
                            <td class="px-10 py-2"></td>
                            <td class="px-20 py-2">Tanggal Reservasi : </td>
                            <td class="px-10 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-10 py-2">Nama : </td>
                            <td class="px-10 py-2"></td>
                            <td class="px-20 py-2">Durasi : </td>
                            <td class="px-10 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-10 py-2">Nomor Hp : </td>
                            <td class="px-10 py-2"></td>
                            <td class="px-10 py-2"></td>
                            <td class="px-10 py-2"></td>
                        </tr>
                        <tr>
                            <td class="px-10 py-2">Alamat : </td>
                            <td class="px-10 py-2"></td>
                            <td class="px-10 py-2"></td>
                            <td class="px-10 py-2"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="border-black border-b-2">
                <table class="table-auto">
                    <thead>
                        <th class="px-10 py-2">Gambar</th>
                        <th class="px-10 py-2">Nama</th>
                        <th class="px-20 py-2">Jumlah</th>
                        <th class="px-20 py-2">Harga</th>
                        <th class="px-20 py-2">Total</th>
                    </thead>
                    <tbody>
                        <tr align="center">
                            <td class="px-10 py-2"><img src="tenda.jpeg" width="250" height="250"></td>
                            <td class="px-10 py-2">Tenda Kap Singel 
                                Layer 
                                3-4 Orang
                            </td>
                            <td class="px-20 py-2">1</td>
                            <td class="px-20 py-2">Rp.30.000</td>
                            <td class="px-20 py-2">Rp.30.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="ml-80">
                <table>
                    <thead>
                        <th class="px-20 py-2"></th>
                        <th class="px-20 py-2"></th>
                        <th class="px-20 py-2"></th>
                        <th class="px-20 py-2"></th>
                        <th class="px-20 py-2"></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-20 py-2"></td>
                            <td class="px-20 py-2"></td>
                            <td class="px-20 py-2"></td>
                            <td class="px-20 py-2"></td>
                            <td class="px-20 py-2">Total : Rp.30.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
