<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
  
</head>

<body>
    <x-navbar></x-navbar>
    <section class=" mx-28 flex justify-start w-max mt-8 ">
        <div class=" p-4 flex w-max bg-zinc-300 flex-row rounded-lg ">
            <a class="flex flex-row  " href="">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                    <path fill-rule="evenodd"
                        d="M9.53 2.47a.75.75 0 0 1 0 1.06L4.81 8.25H15a6.75 6.75 0 0 1 0 13.5h-3a.75.75 0 0 1 0-1.5h3a5.25 5.25 0 1 0 0-10.5H4.81l4.72 4.72a.75.75 0 1 1-1.06 1.06l-6-6a.75.75 0 0 1 0-1.06l6-6a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
                <span
                    class="self-center text-2xl font-bold whitespace-nowrap pr-4 border-r-2 border-black ">Kembali</span>
            </a>
            <a class="self-center text-2xl font-bold whitespace-nowrap ml-4" href="">Keranjang</a>
        </div>
    </section>
    <section class="mx-28 mt-6">
        <div class=" bg-amber-50 sm:rounded-md p-3">
            <table class="w-full text-sm text-center  ">
                <thead class=" text-2xl border-y-2 border-black py-8">
                    <tr class=" ">
                        <th scope="col" class=" py-5 self-center text-center">
                            Gambar
                        </th>
                        <th scope="col" class="py-5 self-center text-center">
                            Nama
                        </th>
                        <th scope="col" class="py-5 self-center text-center">
                            Jumlah
                        </th>
                        <th scope="col" class="py-5 self-center text-center">
                            Harga
                        </th>
                        <th scope="col" class="py-5 self-center text-center">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td class=" px-6 py-4 flex justify-center">
                            <img src="img/mejapiknik.jpg" class="w-16 md:w-32 max-w-full max-h-full" alt="meja piknik">
                        </td>
                        <td class="px-6 py-4 font-semibold text-xl  dark:text-white">
                            Meja Piknik
                        </td>
                        <td class="px-6 py-4 mx-auto my-auto">
                            <div class="flex justify-center items-center">
                                <div class="border-black flex border-2 w-max ">
                                    <button onclick="decrementQuantity(this)"
                                        class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium size-10 border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Kurangi jumlah</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="first_product"
                                            class="bg-transparent w-10 border-transparent text-gray-900 text-xl font-bold block px-2.5 text-center dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                            value="1" required />
                                    </div>
                                    <button onclick="incrementQuantity(this)"
                                        class="inline-flex items-center justify-center size-10 p-1 ms-3 text-sm font-medium rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Tambah jumlah</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-10">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </td>
                    </tr>
                    <tr class="">
                        <td class=" px-6 py-4 flex justify-center">
                            <img src="img/mejapiknik.jpg" class="w-16 md:w-32 max-w-full max-h-full" alt="meja piknik">
                        </td>
                        <td class="px-6 py-4 font-semibold text-xl  dark:text-white">
                            Meja Piknik
                        </td>
                        <td class="px-6 py-4 mx-auto my-auto">
                            <div class="flex justify-center items-center">
                                <div class="border-black flex border-2 w-max ">
                                    <button onclick="decrementQuantity(this)"
                                        class="inline-flex items-center justify-center p-1 me-3 text-sm font-medium size-10 border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Kurangi jumlah</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 2">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1h16" />
                                        </svg>
                                    </button>
                                    <div>
                                        <input type="number" id="first_product"
                                            class="bg-transparent w-10 border-transparent text-gray-900 text-xl font-bold block px-2.5 text-center dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                                            value="1" required />
                                    </div>
                                    <button onclick="incrementQuantity(this)"
                                        class="inline-flex items-center justify-center size-10 p-1 ms-3 text-sm font-medium rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                                        type="button">
                                        <span class="sr-only">Tambah jumlah</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 18 18">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M9 1v16M1 9h16" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                    class="size-10">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z"
                                        clip-rule="evenodd" />
                                </svg>

                            </a>
                        </td>
                    </tr>
                    <tr class=" border-t-2 border-black">
                        <td class=" px-6 py-4">
                            <div class="flex items-center justify-center">
                                <input class="bg-transparent  border-2 size-6" type="checkbox" id="select-all">
                                <label for="select-all" class=" text-xl font-bold ml-3">Pilih Semua <span>(0)</span></label>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-semibold text-xl  dark:text-white">

                        </td>
                        <td class="px-6 py-4 mx-auto ">
                            <p class="text-xl font-bold flex items-center ">total <span>(0 produk)</span> </p>
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.0
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium ">
                                <button class=" rounded-full text-xl font-bold bg-yellow-200 py-4 px-8">
                                    Booking
                                </button>

                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</body>
<script>
    function incrementQuantity(button) {
        const input = button.parentElement.querySelector('input[type="number"]');
        const value = parseInt(input.value);
        input.value = value + 1;
    }

    function decrementQuantity(button) {
        const input = button.parentElement.querySelector('input[type="number"]');
        const value = parseInt(input.value);
        if (value > 1) {
            input.value = value - 1;
        }
    }
</script>

</html>
