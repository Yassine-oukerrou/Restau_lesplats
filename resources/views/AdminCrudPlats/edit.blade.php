<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud</title>
    <!-- switalert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!--icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--boot..-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <!--tiw css-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--js-->
    <script src="{{ asset('js/jquery-3.6.4.min.js') }}"></script>
    <style>
        .b {
            z-index: 1;
            position: relative;
            font-size: inherit;
            font-family: inherit;
            color: rgb(0, 0, 0);
            padding: 0.5em 1em;
            outline: none;
            border: none;
            overflow: hidden;
            transition: color 0.4s ease-in-out;
        }

        .b::before {
            content: '';
            z-index: -1;
            position: absolute;
            bottom: 100%;
            right: 100%;
            width: 1em;
            height: 1em;
            border-radius: 50%;
            background-color: #82cdf0;
            transform-origin: center;
            transform: translate3d(50%, 50%, 0) scale3d(0, 0, 0);
            transition: transform 0.45s ease-in-out;
        }

        .b:hover {
            cursor: pointer;
            color: #575454;
        }

        .b:hover::before {
            transform: translate3d(50%, 50%, 0) scale3d(15, 15, 15);
        }
    </style>
</head>

<body>
    <div class="drop-shadow-md" style="margin: 20px">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                <button class="b">Homm </button>
                <button class="b">Admin</button>
                <button class="b">Menu</button>
                <button class="b">Category</button>
                <button class="b"><i class="fa-regular fa-envelope"></i></button>
                <button class="b"><i class="fa-regular fa-bell"></i></button>
            </div>
        </nav>
        <div class="row my-5 ">
            <div class="col-md-4">
                <div class="grid  divide-x divide-gray-400" style="margin: 20px">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <p class="block text-neutral-800 text-sm font-bold mb-2" for="available">
                                special place
                            </p>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sky-300 text-sm font-bold mb-2" for="available">
                                Category
                            </label>
                            <select name="available" id="available"
                                class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">slact Category</option>
                                <option value="#">....</option>
                                <option value="#">....</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sky-300 text-sm font-bold mb-2" for="available">
                                Menu
                            </label>
                            <select name="available" id="available"
                                class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">slact Menu</option>
                                <option value="#">....</option>
                                <option value="#">....</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sky-300 text-sm font-bold mb-2" for="available">
                                slider
                            </label>
                            <select name="available" id="available"
                                class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">slact slider</option>
                                <option value="#">....</option>
                                <option value="#">....</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sky-300 text-sm font-bold mb-2" for="available">
                                Blog
                            </label>
                            <select name="available" id="available"
                                class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option value="">slact Blog</option>
                                <option value="#">....</option>
                                <option value="#">....</option>
                            </select>
                        </div>


                    </form>
                </div>

            </div>
            <div class="col-md-8">
                <div class="grid  divide-x divide-gray-400" style="margin: 20px">
                    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                        action="{{ route('update', $data['id']) }}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
                                    photo
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="photo" type="file" name="photo">
                                @error('photo')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror



                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    name
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="name" type="text" name="name" value="{{ $data['name'] }}">
                                @error('name')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror



                                <label class="block text-gray-700 text-sm font-bold mb-2" for="components">
                                    components
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="components" type="text" name="components"
                                    value="{{ $data['components'] }}">
                                @error('components')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_price">
                                    new_price
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="new_price" type="text" name="new_price" value="{{ $data['new_price'] }}">
                                @error('new_price')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="col-md-6">

                                <label class="block text-gray-700 text-sm font-bold mb-2" for="old_price">
                                    old_price
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="old_price" type="text" name="old_price" value="{{ $data['old_price'] }}">
                                @error('old_price')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror


                                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                                    category
                                </label>
                                <input style="width: 70%"
                                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                    id="category" type="text" name="category" value="{{ $data['category'] }}">
                                @error('category')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror

                                <label class="block text-gray-700 text-sm font-bold mb-2" for="available">
                                    Statuts
                                </label>
                                <select style="width: 70%" name="available" id="available"
                                    class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="">slact status</option>
                                    <option @if ($data['available'] == 1) selected @endif value="1">Yes
                                    </option>
                                    <option @if ($data['available'] == 0) selected @endif value="0">No
                                    </option>
                                </select>
                                @error('available')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>





                        <div class="flex items-center justify-center" style="margin: 10px">
                            <button
                                class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                type="submit">
                                edit plats
                            </button>

                        </div>
                    </form>
                </div>
                </div>

</body>

</html>
