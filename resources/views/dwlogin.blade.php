<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="bg-lime-400 w-full h-18">
        <div>
            <div class="flex items-center">
                <div class="font-bold px-4 py-5">
                    <a href="">Daftar</a>
                </div>
                <div class="font-bold px-4 py-5">
                    <a href="">Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center h-screen flex-col">
    <img src="img/logoPBL.png" alt="Logo" width="150" class="mx-auto d-block my-5">
    <div class="bg-yellow-100 w-1/4 p-2 shadow-2xl">
        <div class="py-3 font-serif text-center text-xl">MASUK</div>
        <div>
            <form action="" class="flex flex-col items-center">
                <div class="flex bg-transparent text-black focus:outline-none border-black border-b-2 border-t-2 border-l-2 border-r-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                      </svg>
                  <input class="bg-transparent" type="text" placeholder="Username">
                </div> </br>
                <div class="flex bg-transparent text-black focus:outline-none border-black border-b-2 border-t-2 border-l-2 border-r-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-6">
                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                      </svg>                    
                    <input class="bg-transparent" type="password" placeholder="password">
                </div>
                <div>
                    <input type="checkbox"> Ingat Saya
                </div> </br>
                <button class="bg-yellow-300 w-40 text-black rounded-r-full rounded-l-full shadow-lg hover:shadow-xl transition duration-500 font-bold py-3" type="submit">MASUK</button> </br>
            </form>
        </div>
    </div>
    </div>
</body>
</html>