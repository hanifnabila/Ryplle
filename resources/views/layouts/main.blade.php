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

<body class="bg-gray-900">
    {{-- Top Navbar --}}
    <div class="w-full fixed left-0 top-0 drop-shadow-2xl">
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
                            class="rounded-full w-7" onclick="OpenProfileAccount()" alt=""></button>
                    <div class="profile absolute right-6 mt-2 w-48 hidden bg-gray-700 rounded-md shadow-lg text-white">
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
    {{-- End Top Navbar --}}

    {{-- Side Bar --}}
    <div class="fixed top-[60px] bg-gray-700 h-full flex flex-col items-center px-2" >
        <div class="hover:bg-gray-500">
            <ion-icon name="arrow-round-forward" class="text-white text-lg mt-2 cursor-pointer" onclick="OpenSideBar()"></ion-icon>
        </div>
        <div class="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
            <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-8 mt-3 rounded-full" alt="">
        </div>
    </div>
    <div class="w-[216px] sidebar fixed top-[60px] bottom-0 left-[-300px] h-screen overflow-y-auto">
        <div class="bg-gray-600 h-full" id="sideBarMenu">
            <div class="flex text-left text-white pt-4 pb-4 pl-2 items-center">
                <p class="text-[15px] font-bold">FOLLOWED RYPPLER</p>
                <ion-icon name="arrow-back" class="ml-8 cursor-pointer text-[18px] hover:bg-gray-500" id="arrowBack" onclick="OpenSideBar()"></ion-icon>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div>
            <div class="text-left text-white pt-4 pb-4 pl-2">
                <p class="text-[15px] font-bold">RECOMMENDED RYPPLER</p>
            </div>
            <div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div><div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div><div class="flex items-center">
                <img src="{{ asset('images/logos/valo2.jpg') }}" class="w-10 ml-2 mt-2 rounded-full" alt="">
                <div class="justify-center items-center ml-2">
                    <p class="text-[12px] font-semibold text-white">VALORANT</p>
                    <p class="text-[10px] text-white">VALORANT</p>
                </div>
                <div class="flex items-center">
                    <ion-icon name="radio-button-on" class="ml-6 text-red-500"></ion-icon>
                    <p class="text-[15px] text-white ml-1">6.6K</p>
                </div>
            </div>
        </div>
    </div

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.0/dist/alpine.js" defer></script>

    <script>
        function OpenSideBar(){
            document.querySelector('.sidebar').classList.toggle('left-[-300px]');
        }

        function OpenProfileAccount(){
            document.querySelector('.profile').classList.toggle('hidden');
        }
    </script>
</body>

</html>
