<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        ul li {
            color:red
        }
    </style>
</head>
<body>
{{--    <h1>{{'About us'}}</h1>--}}
{{--    @if(5 < 2)--}}
{{--        <h2>Hello</h2>--}}
{{--    @else--}}
{{--        <h2>Bye</h2>--}}
{{--    @endif--}}
{{--    <ul>--}}
{{--        @for($i = 1; $i < 10; $i++)--}}
{{--            <li>{{ $i  }}</li>--}}
{{--        @endfor--}}
{{--    </ul>--}}


{{--    <ul>--}}
{{--        @for($i = 1; $i < 10; $i++)--}}
{{--            @if($i % 3 == 0)--}}
{{--                <li>{{ $i  }}</li>--}}
{{--            @endif--}}
{{--        @endfor--}}
{{--    </ul>--}}

{{--@php--}}
{{--    $users = [--}}
{{--        ["id" => 1, "name" => "John Smith"],--}}
{{--        ["id" => 2, "name" => "John Doe"],--}}
{{--        ["id" => 3, "name" => "Mike Smith"],--}}
{{--        ["id" => 4, "name" => "Jane Smith"],--}}
{{--        ["id" => 5, "name" => "John Smith"]--}}
{{--    ];--}}
{{--@endphp--}}

<table border="1" cellpadding="15" cellspacing="0">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
        </tr>
    </thead>
    <tbody>
        @for($i = 0; $i < count($users); $i++)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $users[$i]['name'] }}</td>
            </tr>
        @endfor
    </tbody>


</table>
</body>
</html>
