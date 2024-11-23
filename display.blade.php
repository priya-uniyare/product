<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div>
        <h1 class="text-muted">Product</h1>
    </div>
    <div class="container d-flex justify-content-between align-items-center">
        <a href="/register" class="btn btn-primary">Logout</a>
        <a href="/page" class="btn btn-primary">Back</a>
        <a href="/page" class="btn btn-primary">New Product</a>
    </div>
    <br>

  <div class="container">  
      <div class="form-group text-info">
                <label for="name">Product Section</label>
                <select class="form-control sm-3" name="productsection" id="productsection" onchange="updateOptions()" >
                    <option value="">Select Here</option>
                    <option value="electronic">Electronic</option>
                    <option value="furniture">Furniture</option>
                    <option value="home">Home</option>
                    <option value="cloths">Cloths</option>
                    <option value="footwear">Footwear</option>
                </select>
    </div>
    </div>
    <br>
    <div class="container">
    <form action="{{url('search')}}" method="get" align="center" width="" class="">
        <div class="form-group d-flex" style="display: flex; align-items: center;">
            <input type="search" name="search" placeholder="Search for something" class="form-control" style="flex:1; margin-right:10px; width: 50%;">
            <input class="btn btn-primary" type="submit" value="Search" name="" id="">
        </div>
    </form>
    </div>
    <br>
    <br>
    <div>
        <table align='center' width="1000px" hight="300px">
            <div class="text-info">

                <tr class="text-info">
                    <td>Product Name</td>
                    <td>Product price</td>
                    <td>Product Section</td>
                    <td>Product img</td>
                    <td>product Delete</td>
                    <td>product update</td>

                </tr>
            </div>
            @foreach($data as $product)
            <tr>
                <td>{{ $product ->productname}}</td>
                <td>{{ $product ->productprice}}</td>
                <td>{{ $product ->productquantity}}</td>
                <td>
                    <img hieght="150" width="150" src="layouts/{{$product->productimage}}" alt="">
                </td>

                <td>
                    <a class=" btn btn-danger" href="{{url('delete',$product->id)}}">Delete</a>
                </td>
                <td>
                    <a class="btn btn-success" href="{{url('update_view',$product->id)}}">Update</a>
                </td>
            </tr>

            @endforeach
        </table>
    </div>

</body>

</html>