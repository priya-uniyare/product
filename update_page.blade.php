<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    
<div><h1 class="text-muted">Product</h1></div>

<a href="/view" class="btn btn-primary">Back</a>
 
  <div class="container text-info">
   <form action="{{url('update',$product->id)}}" method="post" enctype="multipart/form-data" class="" >
    @csrf
    <h1 class="">update page</h1>
    <br>
    <div  class="form-group">
        <label for="" class="">product name:</label>
        <br>
        <input type="text" name="productname" class="form-control" value="{{$product->productname}}">
    </div>
    <div  class="form-group">
        <label for="">product price</label>
        <br>
        <input type="text" name="productprice" class="form-control" value="{{$product->productprice}}">
    </div>
    <div  class="form-group">
        <label for="">product Quantity</label>
        <br>
        <input type="text" name="productquantity" class="form-control" value="{{$product->productquantity}}">
    </div>
    <div  class="form-group">
        <label for="">old image</label>
        <br>
         <img height="120" width="120" name="productimage" class="" src="/layouts/{{$product->productimage}}">
    </div>
     
    <div class="form-group">
        <label for="" >change the image</label>
       <input type="file" name="file" class="form-control" >
    </div>

    <div>
        <input  class=" btn btn-primary" type="submit" value="update">
    </div>
   </form>
   </div>
</body>
</html>