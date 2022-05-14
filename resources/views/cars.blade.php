<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite()
    <title>Cars</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('name')</th>
                <th>@lang('Price')</th>
                <th>@lang('Mileage')</th>
                <th>@lang('Year')</th>
                <th>@lang('Description')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
            <tr class="hover:bg-gray-400 p-2">
                <td class="mx-4 px-2">{{ $loop->iteration }}</td>
                <td class="mx-4 px-2">{{ $car->name }}</td>
                <td class="mx-4 px-2">{{ $car->price }}</td>
                <td class="mx-4 px-2">{{ $car->mileage }}</td>
                <td class="mx-4 px-2">{{ $car->year }}</td>
                <td class="mx-4 px-2">{{ $car->teaser }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="6">{{ $cars->links() }}</td>
            </tr>
        </tbody>
    </table>
</body>

</html>
