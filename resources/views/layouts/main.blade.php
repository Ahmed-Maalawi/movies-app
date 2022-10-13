<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies-App</title>
    @vite('resources/css/app.css')
</head>
<body class="text-white bg-gray-900 font-sans">

    <nav class="border-b border-gray-800">
        <div class="container flex-col md:flex-row mx-auto flex items-center justify-between px-10 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li class="text-2xl text-bold">
                    <a href="#" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="50" height="50"
                            viewBox="0 0 100 100"
                            style=" fill:#000000;"><polygon fill="#78a1d1" points="91,66 91,73 92,75 93.801,76 95,74 95,66 93,57 91.694,53 88,45 84,40 79.582,35.001 75,31 70,29 64.539,26.447 63,27 62,29 64,31 68.38,32.5 73.934,35.001 80,41 84,47 88,53 90,59"></polygon><polygon fill="#78a1d1" points="5,75 7,76 9,75 9,64 11.245,56 16,45 23,38 31,32 40,29 45,28.051 46,25 43,24 32,28 20,35 16,40 9,49 6,58.354 5,69"></polygon><polygon fill="#78a1d1" points="64,48 63,45 66,41 69,45 68,48"></polygon><polygon fill="#78a1d1" points="29.5,55 29.723,51.197 36,51 37.67,52.161 40.383,51 73,51 75.298,55"></polygon><polygon fill="#78a1d1" points="43.454,47.774 44,45 58.423,45 59,48"></polygon><polygon fill="#78a1d1" points="43,42 43.454,39.396 45,37 47.005,39.044 51.697,39.044 52.702,37.988 57.178,37.918 59,40 58.59,42.236"></polygon><polygon fill="#78a1d1" points="52.414,30.061 57.586,30.061 58.59,32.082 57.465,35.001 52.606,35.001 51.194,32.082"></polygon><polygon fill="#78a1d1" points="51.908,27.165 55,20.606 58,27"></polygon><polygon fill="#78a1d1" points="28.191,48 32,41.646 36,48"></polygon><polygon fill="#78a1d1" points="19,55 22,49 25,55"></polygon><polygon fill="#78a1d1" points="52.5,58 56,62 81,62 77.532,58"></polygon><rect width="24" height="4" x="17" y="72" fill="#78a1d1"></rect><rect width="23" height="4" x="57" y="72" fill="#78a1d1"></rect><rect width="23" height="4" x="57" y="65" fill="#78a1d1"></rect><rect width="24" height="4" x="17" y="65" fill="#78a1d1"></rect><polygon fill="#78a1d1" points="42,62 15,62 19,58 45,58"></polygon><path fill="#1f212b" d="M36,49h-8c-0.356,0-0.686-0.189-0.865-0.498c-0.179-0.309-0.18-0.688-0.003-0.998l4-7 c0.355-0.623,1.381-0.623,1.736,0l4,7c0.177,0.31,0.176,0.689-0.003,0.998C36.686,48.811,36.356,49,36,49z M29.723,47h4.554 L32,43.016L29.723,47z"></path><path fill="#1f212b" d="M58,28h-6c-0.336,0-0.65-0.169-0.835-0.449c-0.185-0.281-0.217-0.636-0.084-0.944l3-7 C54.238,19.238,54.6,19,55,19s0.762,0.238,0.919,0.606l3,7c0.133,0.309,0.101,0.663-0.084,0.944C58.65,27.831,58.336,28,58,28z M53.517,26h2.967L55,22.539L53.517,26z"></path><path fill="#1f212b" d="M25,56h-6c-0.336,0-0.65-0.169-0.835-0.449c-0.185-0.281-0.217-0.636-0.084-0.944l3-7 C21.238,47.238,21.6,47,22,47s0.762,0.238,0.919,0.606l3,7c0.133,0.309,0.101,0.663-0.084,0.944C25.65,55.831,25.336,56,25,56z M20.517,54h2.967L22,50.539L20.517,54z"></path><path fill="#1f212b" d="M58,36h-6c-0.552,0-1-0.447-1-1v-1.586l-0.707-0.707c-0.391-0.391-0.391-1.023,0-1.414L51,30.586 V30c0-0.553,0.448-1,1-1h6c0.552,0,1,0.447,1,1v0.586l0.707,0.707c0.391,0.391,0.391,1.023,0,1.414L59,33.414V35 C59,35.553,58.552,36,58,36z M53,34h4v-1c0-0.266,0.105-0.52,0.293-0.707L57.586,32l-0.293-0.293C57.105,31.52,57,31.266,57,31h-4 c0,0.266-0.105,0.52-0.293,0.707L52.414,32l0.293,0.293C52.895,32.48,53,32.734,53,33V34z"></path><path fill="#1f212b" d="M59,43H43c-0.552,0-1-0.447-1-1v-2c0-0.155,0.036-0.309,0.105-0.447l2-4 c0.16-0.318,0.477-0.528,0.833-0.551c0.357-0.014,0.696,0.147,0.894,0.443L47.535,38H51c0-0.553,0.448-1,1-1h6 c0.552,0,1,0.447,1,1c0.552,0,1,0.447,1,1v3C60,42.553,59.552,43,59,43z M44,41h14v-1c-0.552,0-1-0.447-1-1h-4 c0,0.553-0.448,1-1,1h-5c-0.334,0-0.646-0.167-0.832-0.445l-1.044-1.566L44,40.236V41z"></path><path fill="#1f212b" d="M22,45.627v-1.255c0-0.189-0.178-0.328-0.361-0.282l-2.51,0.627c-0.294,0.073-0.294,0.491,0,0.564 l2.51,0.627C21.822,45.956,22,45.817,22,45.627z"></path><path fill="#1f212b" d="M32,38.627v-1.255c0-0.189-0.178-0.328-0.361-0.282l-2.51,0.627c-0.294,0.073-0.294,0.491,0,0.564 l2.51,0.627C31.822,38.956,32,38.817,32,38.627z"></path><path fill="#1f212b" d="M45,33.627v-1.255c0-0.189-0.178-0.328-0.361-0.282l-2.51,0.627c-0.294,0.073-0.294,0.491,0,0.564 l2.51,0.627C44.822,33.956,45,33.817,45,33.627z"></path><path fill="#1f212b" d="M66,37.627v-1.255c0-0.189-0.178-0.328-0.361-0.282l-2.51,0.627c-0.294,0.073-0.294,0.491,0,0.564 l2.51,0.627C65.822,37.956,66,37.817,66,37.627z"></path><path fill="#1f212b" d="M55,17.627v-1.255c0-0.189-0.178-0.328-0.361-0.282l-2.51,0.627c-0.294,0.073-0.294,0.491,0,0.564 l2.51,0.627C54.822,17.956,55,17.817,55,17.627z"></path><path fill="#1f212b" d="M60,49H44c-1.103,0-2-0.897-2-2v-1c0-1.103,0.897-2,2-2h15c0.431,0,0.813,0.275,0.949,0.684l1,3 c0.102,0.305,0.05,0.641-0.138,0.901S60.321,49,60,49z M44,46L44,46v1h14.613l-0.333-1H44z"></path><path fill="#1f212b" d="M76,56H29c-0.552,0-1-0.447-1-1v-4c0-0.553,0.448-1,1-1h8c0.552,0,1,0.447,1,1h1 c0-0.553,0.448-1,1-1h34c0.379,0,0.725,0.214,0.895,0.553l2,4c0.155,0.31,0.138,0.678-0.044,0.973S76.347,56,76,56z M30,54h44.382 l-1-2H41c0,0.553-0.448,1-1,1h-3c-0.552,0-1-0.447-1-1h-6V54z"></path><path fill="#1f212b" d="M68,49h-4c-0.552,0-1-0.447-1-1v-1c-0.347,0-0.668-0.18-0.851-0.475s-0.199-0.663-0.044-0.973l3-6 c0.339-0.678,1.45-0.678,1.789,0l3,6c0.155,0.31,0.138,0.678-0.044,0.973S69.347,47,69,47v1C69,48.553,68.552,49,68,49z M65,47h2 v-1c0-0.354,0.184-0.664,0.461-0.843L66,42.236l-1.461,2.921C64.816,45.336,65,45.646,65,46V47z"></path><path fill="#1f212b" d="M79,77H57c-0.552,0-1-0.447-1-1v-4c0-0.553,0.448-1,1-1h22c1.103,0,2,0.897,2,2v2 C81,76.103,80.103,77,79,77z M58,75h21v-2H58V75z"></path><path fill="#1f212b" d="M40,77H18c-1.103,0-2-0.897-2-2v-2c0-1.103,0.897-2,2-2h22c1.103,0,2,0.897,2,2v2 C42,76.103,41.103,77,40,77z M18,73v2h22v-2H18z"></path><path fill="#1f212b" d="M79,70H57c-0.552,0-1-0.447-1-1v-2c0-0.567-0.078-1.156-0.23-1.751 c-0.077-0.299-0.012-0.617,0.178-0.861C56.137,64.143,56.429,64,56.738,64H79c1.103,0,2,0.897,2,2v2C81,69.103,80.103,70,79,70z M58,68h21v-2H57.941C57.98,66.336,58,66.67,58,67V68z"></path><path fill="#1f212b" d="M41,70H18c-1.103,0-2-0.897-2-2v-2c0-1.103,0.897-2,2-2h23.262c0.309,0,0.601,0.143,0.791,0.388 c0.189,0.244,0.255,0.563,0.178,0.861C42.078,65.844,42,66.433,42,67v2C42,69.553,41.552,70,41,70z M18,66v2h22v-1 c0-0.33,0.02-0.664,0.059-1H18z"></path><path fill="#1f212b" d="M81.8,61.4l-3-4C78.611,57.148,78.315,57,78,57H49H18c-0.315,0-0.611,0.148-0.8,0.4l-3,4 c-0.228,0.303-0.264,0.708-0.095,1.047S14.621,63,15,63h27.761c0.303,0,0.59-0.138,0.78-0.374c0.252-0.314,0.485-0.638,0.716-0.96 C45.326,60.177,46.17,59,49,59s3.674,1.177,4.743,2.666c0.231,0.322,0.464,0.646,0.716,0.96c0.19,0.236,0.477,0.374,0.78,0.374H81 c0.379,0,0.725-0.214,0.895-0.553S82.027,61.703,81.8,61.4z M42.632,60.5c-0.12,0.167-0.24,0.334-0.363,0.5H17l1.5-2h25.317 C43.363,59.481,42.99,60.001,42.632,60.5z M55.731,61c-0.123-0.166-0.243-0.333-0.363-0.5c-0.358-0.499-0.731-1.019-1.185-1.5H77.5 l1.5,2H55.731z"></path><g><path fill="#1f212b" d="M43.686,25.394c0.491,0,0.929,0.36,0.998,0.865c0.075,0.547-0.308,1.051-0.855,1.126 c-1.568,0.214-3.138,0.521-4.666,0.913C20.814,33.001,8,49.533,8,68.5V74c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5.5 c0-19.881,13.433-37.209,32.665-42.14c1.602-0.411,3.248-0.733,4.893-0.958C43.601,25.397,43.644,25.394,43.686,25.394 M43.686,23.394c-0.126,0-0.254,0.008-0.382,0.024c-1.737,0.237-3.46,0.574-5.136,1.005C18.051,29.581,4,47.706,4,68.5V74 c0,1.654,1.346,3,3,3s3-1.346,3-3v-5.5c0-18.053,12.196-33.789,29.659-38.265c1.45-0.372,2.943-0.665,4.44-0.869 c1.64-0.225,2.791-1.741,2.567-3.378C46.464,24.51,45.183,23.394,43.686,23.394L43.686,23.394z"></path></g><g><path fill="#1f212b" d="M64.392,27.323c0.108,0,0.218,0.018,0.325,0.054c1.308,0.452,2.61,0.974,3.871,1.551 C84.025,35.995,94,51.528,94,68.5V74c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5.5c0-16.192-9.517-31.012-24.244-37.754 c-1.202-0.551-2.443-1.048-3.69-1.479c-0.522-0.181-0.799-0.75-0.619-1.271C63.59,27.582,63.978,27.323,64.392,27.323 M64.393,25.323L64.393,25.323c-1.279,0-2.419,0.812-2.836,2.02c-0.54,1.563,0.292,3.275,1.856,3.815 c1.188,0.41,2.37,0.884,3.511,1.407C80.942,38.982,90,53.088,90,68.5V74c0,1.654,1.346,3,3,3s3-1.346,3-3v-5.5 c0-17.752-10.433-33.999-26.579-41.391c-1.316-0.603-2.679-1.149-4.05-1.623C65.052,25.377,64.724,25.323,64.393,25.323 L64.393,25.323z"></path></g></svg>
                     <span class="capitalize ml-2">movies app</span></a></li>
                <li class="ml-0 md:ml-16 mt-2 md:mt-0"><a href="#" class="hover:text-gray-300">Movies</a></li>
                <li class="ml-0 md:ml-16 mt-2 md:mt-0"><a href="#" class="hover:text-gray-300">TV-Shows</a></li>
                <li class="ml-0 md:ml-16 mt-2 md:mt-0"><a href="#" class="hover:text-gray-300">Actors</a></li>
            </ul>

            <div class="flex flex-col md:flex-row items-center">
                <div class="relative mt-4 md:mt-0">
                    <div class="absolute top-0">
                        <svg class="fill-current text-gray-500 w-5 mt-1 ml-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                    </div>
                    <input
                        class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1 focus:outline-none foucus:shadow-outline"
                        placeholder="search"
                        type="search" name="search" id="search">
                </div>
                <div class="md:ml-4 mt-4 md:mt-0">
                    <a>
                        <img class="w-10 h-10 rounded-full mx-auto" src="{{ asset('img/user.jpg') }}" alt="avatar">
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

</body>
</html>
