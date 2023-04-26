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
<!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <!--ADD plats success-->
    @if (Session::has('success'))
        <script>
            Swal.fire(
                'Good job!',
                '{{ Session::get('success') }}',
                'success'
            )
        </script>
    @endif
    <div class="drop-shadow-md" style="margin: 20px">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <button class="b">Homm </button>
                <button class="b">Admin</button>
                <button class="b">Menu</button>
                <button class="b">Category</button>
                <a href="{{route('Crudcombobox')}}" class="b">Crud/combobox</a>
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
            <div class="col-md-8 text-center">
                <div class="grid  divide-x divide-gray-400">
                    <div class="text-center">
                            <input  class="form-control me-2" type="text" id="searchbyplats" placeholder="Search"
                                aria-label="Search" style="width: 40% ;margin: 20px">
                            <div id="ajax_search_result">
                            <table class="table table-bordered 	 ul-10 shadow-xl " style="width: 95%">
                                <thead style="text-align: center">
                                    <tr>
                                        <th>ID</th>
                                        <th>photo</th>
                                        <th>Name</th>
                                        <th>Components</th>
                                        <th>new_price</th>
                                        <th>old_price</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Updet</th>
                                        <th>Delet</th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center">
                                    @if (!@empty($data))
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($data as $info)
                                            <tr>
                                                <td>{{ $info->id }}</td>
                                                <td>
                                                    <img style="width: 60px; heigh:50px"
                                                        src="imgCrud/{{ $info->photo }}">
                                                </td>
                                                <td>{{ $info->name }}</td>
                                                <td>{{ $info->components }}</td>
                                                <td>{{ $info->new_price }}DH</td>
                                                <td>{{ $info->old_price }}DH</td>
                                                <td>{{ $info->category }}</td>
                                                <td>
                                                    @if ($info->available == 1)
                                                        ready
                                                    @else
                                                        not ready
                                                    @endif
                                                </td>
                                                <td><a type="submit" href="{{ route('edit', $info->id) }}"
                                                        class="text-sky-300">edit <i
                                                            class="fa-solid fa-pen-to-square"></i></td>
                                                <td><a href="{{ route('delete', $info->id) }}"
                                                        class="text-red-700 ">delet <i class="fa-solid fa-trash"></i>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    @else
                                    @endif
                                </tbody>
                            </table>
                            <div class="grid grid-cols-2 divide-x">
                                <div>
                                    <nav aria-label="Page navigation example "
                                        style="position: relative;top: 20px;left: 30px;">
                                        {{ $data->links() }}
                                </div>
                                <div><button type="submit " onclick="swal()" class="btn btn-outline-secondary"
                                        style="position: relative;top: 20px;left: 30px;">Add a new plats</button></div>

                            </div>


                            </nav>




                        </div>



                    </div>

                </div>


            </div>



        </div>
        <!-- form .....-->
        <script>
            function swal() {
                Swal.fire({
                    title: 'Add a new plats',
                    html: `
            <div class="grid  divide-x divide-gray-400" style="margin: 20px">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('store') }}" method="post" enctype='multipart/form-data'>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="photo">
                    photo
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="photo" type="file" name="photo">
                @error('photo')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    name
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="name" type="text" name="name">
                @error('name')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror

            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="components">
                    components
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="components" type="text" name="components">
                @error('components')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="new_price">
                    new_price
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="new_price" type="text" name="new_price">
                @error('new_price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="old_price">
                    old_price
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="old_price" type="text" name="old_price">
                @error('old_price')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="category">
                    category
                </label>
                <input
                    class="shadow appearance-none border border-ga-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                    id="category" type="text" name="category">
                @error('category')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="available">
                    Statuts
                </label>
                <select name="available" id="available"
                    class="shadow  border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">slact status</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                @error('available')
                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex items-center justify-center">
                <button
                    class="bg-blue-500  hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit" onclick="swa()">
                    Add a new plats
                </button>

            </div>
            </form>
            </div>


            `,
                    showCancelButton: false,
                    showConfirmButton: false
                });
            };
        </script>
        <script>
            //jquery search ....

            $(document).on('input', "#searchbyplats", function() {
                var searchbyplats = $(this).val();
                jQuery.ajax({
                    url: "{{ route('ajax_search') }}",
                    type: 'post',
                    datatype: 'html',
                    cache: false,
                    data: {
                        searchbyplats: searchbyplats,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        $("#ajax_search_result").html(data);
                    },
                    error: function() {
                        ///
                    }

                });
            });
        </script>
</body>

</html>
