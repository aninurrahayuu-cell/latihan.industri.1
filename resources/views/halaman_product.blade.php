<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background-color: #96f092ff;
    }
    td {
        background-color: beige;
        width: 90px;
        height: 40px;
    }
    tr {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #bceb96ff;
        height: 40px;
        background-color: #78c760ff;
    }
    table {
            margin: 30px auto;
            border-collapse: collapse;
            width: 90%;
            height: 100px;
            background: #fffef5;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border-radius: 10px;
            overflow: hidden;
    }
    </style>
</head>
<body>
    <center>
    <h2>Product</h2>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
        @foreach($product as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->description}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->stock}}</td>
        </tr>
        @endforeach
    </table>
    </center>
</body>
</html>