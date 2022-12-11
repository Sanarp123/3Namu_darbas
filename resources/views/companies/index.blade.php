<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Companies</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Country</th>
            <th>City</th>
            <th>Zipcode</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->code}}</td>
                <td>{{$company->address}}</td>
                <td>{{$company->phone}}</td>
                <td>{{$company->country}}</td>
                <td>{{$company->city}}</td>
                <td>{{$company->zipcode}}</td>

            </tr>    
        @endforeach


    </table>
</body>
</html>