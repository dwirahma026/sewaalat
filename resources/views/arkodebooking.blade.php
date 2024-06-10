<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kode Booking</title>
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
            <a class="self-center text-2xl font-bold whitespace-nowrap ml-4" href="">Kode Booking</a>
        </div>
    </section>
    <section class="mx-28 mt-6">
        <div class=" bg-amber-50 sm:rounded-md p-3">
            <div class="container mx-auto w-full text-2xl font-semibold border-y-2 py-4 my-2 border-black">
                <div class="  mx-20">
                    <h6>Nama :</h6>
                    <h6>Nomor Hp :</h6>
                    <h6>Alamat :</h6>
                </div>
            </div>
            <div class="container mx-auto w-full text-2xl font-semibold border-b-2 border-black py-4">
                <div class="mx-20">
                    <h6 class=" text-gray-500">Waktu</h6>
                    <h6 class="font-bold">22 Maret 2024, 12.00 - 23 Maret 2024 12.00</h6>
                    <h6 class=" text-gray-500">Durasi</h6>
                    <h6 class="font-bold">24 Jam</h6>
                </div>
            </div>
        </div>
        <div class="px-24 py-4 w-full justify-between border-black bg-amber-50">
            <div class="text-2xl font-semibold">
                <h6 class=" text-gray-500">Kode Booking</h6>
                <h6 class=" bg-yellow-200 rounded-full drop-shadow-md w-fit py-4 px-8 my-4">A1245L</h6>
                <div class=" flex flex-row items-center ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-9">
                        <path fill-rule="evenodd"
                            d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="text-xl font-bold ml-2">Selapik.Id</span>
                </div>
                <p class="px-11 text-xl text-gray-500 font-medium">Taman Raya Square - Batam Center</p>
            </div>
        </div>
    </section>
</body>


</html>
