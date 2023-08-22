<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create the product</h1>
    <div>
        @if($erros->any())
        <ul>
            @foreach($erros->all() as $error)
            <li>{{$error}}</li>
        </ul>
        @endif
    
    </div>
    <form action="post" action="{{route('product.store'}}">
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Qty</label>
            <input type="text" name="qty" placeholder="Qty">
        </div>
        <div>
            <label>Price</label>
            <input type="text" name="price" placeholder="Price">1
        </div>
        <div>
            <label>Description</label>
            <input type="text" name="description" placeholder="Description">
        </div>
        <div>
            <input type="submit" value="Save a New Product">
        </div>
    </form>
</body>
</html>