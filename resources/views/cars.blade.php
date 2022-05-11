<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->mileage }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
