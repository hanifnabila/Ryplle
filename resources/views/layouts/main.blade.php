<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="w-full fixed left-0 top-0">
        <div class="flex px-7 bg-gray-800 items-center justify-between">
            <div class="cursor-pointer flex">
                <span class="mr-2 pt-0">
                    <img src="{{ asset('images/logos/ryplle.png') }}" width="60" alt="LogoRyplle">
                </span>
            </div>
            <div class="flex bg-gray-600 rounded-full md:w-2/5">
                <input type="text" class="outline-none ml-5 bg-gray-600 text-white w-full" placeholder="Telusuri">
                <button class="bg-gray-400 p-1 rounded-r-full">
                    <ion-icon name="search" class="mx-2"></ion-icon>
                </button>
            </div>
            <div class="flex items-center">
                <button class="mr-2">
                    <ion-icon name="settings" class="text-gray-300 text-2xl"></ion-icon>
                </button>
                <div>
                    <button id="profilButton"><img src="{{ asset('images/logos/accountProfile.png') }}"
                            class="rounded-full w-7" alt=""></button>
                    <div class="absolute right-6 mt-2 w-48 hidden bg-gray-700 rounded-md shadow-lg text-white"
                        id="profileDropdownMenu">
                        <div class="flex items-center">
                            <img src="{{ asset('images/logos/accountProfile.png') }}" width="40"
                                class="rounded-full mt-2 ml-2" alt="">
                            <h2 class="ml-3">Guest #2391</h2>
                        </div>
                        <a href="" class="block px-4 py-2 text-center">Sign Up</a>
                        <a href="" class="block px-4 py-2 text-center">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var profilButton = document.querySelector('#profilButton');
            var profileDropdownMenu = document.querySelector('#profileDropdownMenu');

            profilButton.addEventListener('click', function() {
                profileDropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
