<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="dark:bg-black dark:text-white relative">
    <header class="h-auto sticky top-0 z-50 ">
        <nav class="border-gray-200 px-4 lg:px-6 py-3 bg-white dark:bg-black relative">
            <div class="lg:grid grid-cols-7 place-content-center lg:mx-auto lg:px-10">





                <div class="hidden col-span-3  justify-between items-center w-full lg:flex lg:w-auto" id="">
                    <ul class="flex flex-row flex-wrap gap-2">
                        <li id="homes">
                            <a href="index.php"
                                class="block py-2 px-3 text-base font-medium hover:bg-gray-100 dark:hover:bg-gray-700 duration-300 rounded-md">Home</a>
                        </li>
                        <li id="tops">
                            <a href="tops.php"
                                class="block py-2 px-3 text-base font-medium hover:bg-gray-100 dark:hover:bg-gray-700 duration-300 rounded-md">Tops</a>
                        </li>
                        <li id="bottoms">
                            <a href="bottoms.php"
                                class="block py-2 px-3 text-base font-medium hover:bg-gray-100 dark:hover:bg-gray-700 duration-300 rounded-md">Bottoms</a>
                        </li>
                        <li id="accessories">
                            <a href="accessories.php"
                                class="block py-2 px-3 text-base font-medium hover:bg-gray-100 dark:hover:bg-gray-700 duration-300 rounded-md">Accessories</a>
                        </li>
                        <li id="footwears">
                            <a href="footwears.php"
                                class="block py-2 px-3 text-base font-medium hover:bg-gray-100 dark:hover:bg-gray-700 duration-300 rounded-md">Footwears</a>
                        </li>

                    </ul>
                </div>

                <div class="grid place-content-center">
                    <a href="index.php" class="flex items-center w-fit">
                        <!-- <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" /> -->
                        <span
                            class="self-center text-4xl font-semibold whitespace-nowrap dark:text-white">Clothing</span>
                    </a>
                </div>

                <!-- social media icons -->
                <div class="col-span-3 hidden lg:flex items-center justify-end space-x-4">

                    <!-- facebook  -->
                    <div>
                        <a href="#"
                            class="relative flex h-10 w-10 text-2xl items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </div>

                    <!-- instagram  -->
                    <div>
                        <a href="#"
                            class="relative flex h-10 w-10 text-2xl items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>

                    <!-- tiktok  -->
                    <div>
                        <a href="#"
                            class="relative flex h-10 w-10 text-xl items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark">
                            <i class="fa-brands fa-tiktok"></i> </a>
                    </div>

                    <!-- messenger  -->
                    <div>
                        <a href="#"
                            class="relative flex h-10 w-10 text-xl items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff] text-dark">
                            <i class="fa-brands fa-facebook-messenger"></i> </a>
                    </div>

                    <!-- call  -->
                    <div class="items-center pr-1 xl:flex">
                        <a href="#"
                            class="mr-3 flex h-10 w-10 items-center justify-center rounded-full border-[.5px] border-[#e7e7e7] bg-[#f4f7ff]">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.8343 12.6844C19.7655 11.8938 19.1124 11.3438 18.3218 11.3438H3.67804C2.88742 11.3438 2.26867 11.9281 2.16554 12.6844L1.44367 19.9031C1.40929 20.3156 1.54679 20.7625 1.82179 21.0719C2.09679 21.3812 2.50929 21.5531 2.95617 21.5531H19.078C19.4905 21.5531 19.903 21.3812 20.2124 21.0719C20.4874 20.7625 20.6249 20.35 20.5905 19.9031L19.8343 12.6844ZM19.2843 20.2812C19.2499 20.3156 19.1812 20.3844 19.0437 20.3844H2.95617C2.85304 20.3844 2.74992 20.3156 2.71554 20.2812C2.68117 20.2469 2.61242 20.1781 2.64679 20.0406L3.36867 12.7875C3.36867 12.6156 3.50617 12.5125 3.67804 12.5125H18.3562C18.528 12.5125 18.6312 12.6156 18.6655 12.7875L19.3874 20.0406C19.353 20.1438 19.3187 20.2469 19.2843 20.2812Z"
                                    fill="#212B36"></path>
                                <path
                                    d="M11 14.0254C9.65937 14.0254 8.59375 15.091 8.59375 16.4316C8.59375 17.7723 9.65937 18.8379 11 18.8379C12.3406 18.8379 13.4062 17.7723 13.4062 16.4316C13.4062 15.091 12.3406 14.0254 11 14.0254ZM11 17.6348C10.3469 17.6348 9.79688 17.0848 9.79688 16.4316C9.79688 15.7785 10.3469 15.2285 11 15.2285C11.6531 15.2285 12.2031 15.7785 12.2031 16.4316C12.2031 17.0848 11.6531 17.6348 11 17.6348Z"
                                    fill="#212B36"></path>
                                <path
                                    d="M2.26875 6.73769C2.3375 8.25019 3.67812 8.86894 4.36562 8.86894H6.77188C6.80625 8.86894 6.80625 8.86894 6.80625 8.86894C7.8375 8.80019 8.86875 8.11269 8.86875 6.73769V5.91269C10.0031 5.91269 12.6156 5.91269 13.75 5.91269V6.73769C13.75 8.11269 14.7812 8.80019 15.8125 8.86894H15.8469H18.2188C18.9062 8.86894 20.2469 8.25019 20.3156 6.73769C20.3156 6.63457 20.3156 6.25644 20.3156 5.91269C20.3156 5.63769 20.3156 5.39707 20.3156 5.36269C20.3156 5.32832 20.3156 5.29394 20.3156 5.29394C20.2125 4.33144 19.8687 3.54082 19.2844 2.92207L19.25 2.88769C18.3906 2.09707 17.3594 1.6502 16.5688 1.3752C14.2656 0.481445 11.3781 0.481445 11.2406 0.481445C9.2125 0.51582 7.90625 0.687695 5.94687 1.3752C5.19062 1.61582 4.15938 2.06269 3.3 2.85332L3.26562 2.88769C2.68125 3.50644 2.3375 4.29707 2.23438 5.25957C2.23438 5.29394 2.23438 5.32832 2.23438 5.32832C2.23438 5.39707 2.23438 5.60332 2.23438 5.87832C2.26875 6.18769 2.26875 6.60019 2.26875 6.73769ZM4.125 3.71269C4.8125 3.09394 5.67188 2.71582 6.39375 2.44082C8.18125 1.78769 9.35 1.65019 11.3094 1.61582C11.4469 1.61582 14.1281 1.6502 16.1906 2.44082C16.9125 2.71582 17.7719 3.05957 18.4594 3.71269C18.8375 4.12519 19.0781 4.67519 19.1469 5.32832C19.1469 5.43144 19.1469 5.60332 19.1469 5.87832C19.1469 6.22207 19.1469 6.60019 19.1469 6.70332C19.1125 7.49394 18.3562 7.66582 18.2531 7.66582H15.8813C15.5375 7.63144 14.9875 7.49394 14.9875 6.73769V5.32832C14.9875 5.05332 14.8156 4.84707 14.575 4.74394C14.3688 4.67519 8.35313 4.67519 8.14688 4.74394C7.90625 4.81269 7.73438 5.05332 7.73438 5.32832V6.73769C7.73438 7.49394 7.18437 7.63144 6.84062 7.66582H4.46875C4.36562 7.66582 3.60937 7.49394 3.575 6.70332C3.575 6.60019 3.575 6.22207 3.575 5.87832C3.575 5.60332 3.575 5.46582 3.575 5.36269C3.50625 4.67519 3.74688 4.12519 4.125 3.71269Z"
                                    fill="#212B36"></path>
                            </svg>
                        </a>
                        <div>
                            <p class="hidden lg:block text-sm font-medium text-black">
                                Contact Us ?
                                <br />
                                +001 123 456 789
                            </p>
                        </div>
                    </div>
                </div>


                <!-- socail media dropdown for mobile -->
                <div class="absolute right-3 bottom-2 lg:hidden">
                    <div class="relative text-left">
                        <button type="button" class="text-xl p-2"
                            id="menu-button">
                            <svg
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  xmlns="http://www.w3.org/2000/svg"
>
  <path d="M17 9H7V7H17V9Z" fill="currentColor" />
  <path d="M7 13H17V11H7V13Z" fill="currentColor" />
  <path
    fill-rule="evenodd"
    clip-rule="evenodd"
    d="M2 18V2H22V18H16V22H14C11.7909 22 10 20.2091 10 18H2ZM12 16V18C12 19.1046 12.8954 20 14 20V16H20V4H4V16H12Z"
    fill="currentColor"
  />
</svg>
                        </button>
                    </div>

                    <!-- Dropdown menu, initially hidden -->
                    <div class="absolute right-0 z-10 mt-2 origin-top-right rounded-md bg-white dark:bg-gray-900 shadow-lg hidden">
                        <div class="p-1">
                            <a href="#" class="block px-4 py-2 whitespace-nowrap space-x-3"><span><i class="fa-brands fa-facebook"></i></span><span>Facebook</span></a>
                            <a href="#" class="block px-4 py-2 whitespace-nowrap space-x-3"><span><i class="fa-brands fa-instagram"></i></span><span>Instagram</span></a>
                            <a href="#" class="block px-4 py-2 whitespace-nowrap space-x-3"><span><i class="fa-brands fa-facebook-messenger"></i></span><span>Messenger</span></a>
                            <a href="#" class="block px-4 py-2 whitespace-nowrap space-x-3"> <span><i class="fa-brands fa-tiktok"></i></span><span>TikTok</span></a>
                        </div>
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        // Get references to the button and the dropdown menu
                        const menuButton = document.getElementById("menu-button");
                        const dropdownMenu = document.querySelector(".absolute.right-0");

                        // Function to toggle the dropdown menu's visibility
                        function toggleDropdown() {
                            dropdownMenu.classList.toggle("hidden");
                        }

                        // Add a click event listener to the button
                        menuButton.addEventListener("click", toggleDropdown);

                        // Add a click event listener to close the dropdown when clicking outside of it
                        document.addEventListener("click", function (event) {
                            if (
                                !menuButton.contains(event.target) &&
                                !dropdownMenu.contains(event.target)
                            ) {
                                dropdownMenu.classList.add("hidden");
                            }
                        });
                    });
                </script>

            </div>
        </nav>
    </header>