<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .odd{
            background-color:red; 
        }
    </style>
</head>
<body>
    
    <h1>
        List User Blade Template
    </h1>   
    {{$test}}
    {{$a ?? 'a'}}
    @verbatim
        {{$name}}
    @endverbatim
    @php
        $content = "<script>alert('123')</script>";
        //echo htmlspecialchars($content);
    @endphp

    {{$content}}

    <table border="1">
        <tr>
            <td>STT</td>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td
        </tr>
        @foreach ($arrayProduct as $key => $product) 
            <tr class="{{$key % 2 != 0 ? 'odd' : ''}}">
                <td><?=$key+1?></td>
                <td><?= $product['id'] ?></td>
                <td><?= $product['name'] ?></td>
                <td><?= number_format($product['price'],2) ?></td>
            </tr>
        @endforeach
        @if (!count($arrayProduct)) 
            <tr>
                <td colspan="4">No Product</td>
            </tr>
        @endif
    </table> 

    <table border="1">
        <tr>
            <td>STT</td>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
        </tr>
        @forelse ($arrayProduct as $key => $product) 
            <tr class="<?=$loop->odd ? 'odd' : '' ?>">
                <td>{{$loop->iteration}}</td>
                <td>{{ $product['id'] }}</td>
                <td>{!! $product['name'] !!}</td>
                <td>{{ number_format($product['price'],2) }}</td>
            </tr>
            @empty
                <tr>
                    <td colspan="4">No Product</td>
                </tr>
        @endforelse
    </table>
</body>
</html>