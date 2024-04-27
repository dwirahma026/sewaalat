<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            <a class="self-center text-2xl font-bold whitespace-nowrap ml-4" href="">Pembayaran</a>
        </div>
    </section>
    <section class="mx-28 mt-6">
        <div class=" bg-amber-50 sm:rounded-md p-3">
            <div class="container mx-auto w-full flex flex-row  text-xl font-semibold border-y-2 py-4 border-black">
                <div class=" mx-20 w-1/2">
                    <h6>
                        Kode Booking :
                    </h6>
                    <h6>
                        Nama :
                    </h6>
                </div>
                <div class=" w-1/2">
                    <h6>
                        Nomor Hp :
                    </h6>
                    <h6>
                        Alamat :
                    </h6>
                </div>
            </div>
            <table class="w-full text-sm text-center  ">
                <thead class=" text-2xl  py-8">
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
                            Total
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
                            <div class="flex justify-center items-center tex">
                                <p class="text-xl font-bold">1</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
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
                            <div class="flex justify-center items-center tex">
                                <p class="text-xl font-bold">1</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
                        </td>
                        <td class="px-6 py-4 font-bold text-xl dark:text-white">
                            Rp.200.000
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="px-24 py-4 w-full flex flex-row justify-between border-t-2 border-black bg-amber-50"
            id="pembayaran">
            <div class="w-1/2">
                <div class="border-2 flex flex-row w-full justify-between px-5 border-black">
                    <div class=" flex flex-row items-center w-1/10">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class=" size-9">
                            <path d="M12 7.5a2.25 2.25 0 1 0 0 4.5 2.25 2.25 0 0 0 0-4.5Z" />
                            <path fill-rule="evenodd"
                                d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 0 1 1.5 14.625v-9.75ZM8.25 9.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM18.75 9a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V9.75a.75.75 0 0 0-.75-.75h-.008ZM4.5 9.75A.75.75 0 0 1 5.25 9h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H5.25a.75.75 0 0 1-.75-.75V9.75Z"
                                clip-rule="evenodd" />
                            <path
                                d="M2.25 18a.75.75 0 0 0 0 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 0 0-.75-.75H2.25Z" />
                        </svg>
                        <span class="text-xl font-bold ">Metode Pembayaran</span>
                    </div>
                    <div>
                        <p class="text-xl font-bold">Dana</p>
                    </div>
                </div>
                <div class="border-2 mt-3  w-full px-5 border-black">
                    <div class=" flex flex-row items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-9">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                        </svg>
                        <span class="text-xl font-bold ">Rincian Pembayaran</span>
                    </div>
                    <p class="px-9 font-medium">Sub Total produk :<span> Rp.400.000 </span></p>
                    <p class="px-9 font-medium">DP Booking :<span> Rp.200.000 </span></p>
                </div>
            </div>
            <div class=" flex flex-col justify-between">
                <div>
                    <p class="text-xl font-bold ">Total Pembayaran : Rp.200.000</p>
                </div>
                <div class="flex justify-end">
                    <button class=" rounded-full text-xl font-bold bg-yellow-200 py-4 px-8">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>


</html>
