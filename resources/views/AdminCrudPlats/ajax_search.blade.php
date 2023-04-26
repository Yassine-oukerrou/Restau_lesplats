<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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

</body>
</html>
