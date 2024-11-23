<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="text-muted">
        <h1>Product</h1>
    </div>
<div><div> <a href="/mylogin" class="btn btn-primary">Login</a></div></div>
    
    <div class="container text-info">
        <h2>Product Form</h2>
        <form action="{{route('upload')}}" method="post" enctype="multipart/form-data">
           
        @csrf
            <div class="form-group">
                <label for="name"> Product Name:</label>
                <input type="text" class="form-control" name="productname" placeholder="">
            </div>

            <div class="form-group">
                <label for="name"> Product Price:</label>
                <input type="text" class="form-control" name="productprice" placeholder="">
            </div>
            <div class="form-group">
                <label for="name">Product Section</label>
                <select class="form-control" name="productsection" id="productsection" onchange="updateOptions()">
                    <option value="">Select Here</option>
                    <option value="electronic">Electronic</option>
                    <option value="furniture">Furniture</option>
                    <option value="home">Home</option>
                    <option value="cloths">Cloths</option>
                    <option value="footwear">Footwear</option>
                </select>
            </div>

            <div class="form-group">
                <label for="name">Product Options</label>
                <select class="form-control" name="productquantity" id="productquantity">
                    <!-- Options will be dynamically populated based on the selection above -->
                </select>
            </div>

            <script>
                function updateOptions() {
                    const section = document.getElementById('productsection').value;
                    const quantitySelect = document.getElementById('productquantity');
                    
                    // Clear existing options
                    quantitySelect.innerHTML = '';

                    let options = [];

                    // Define options based on the product section
                    if (section === 'electronic') {
                        options = [
                            'select',
                            'Laptop',
                            'Mobile Phone',
                            'Tablet',
                            'Headphones'
                        ];
                    } else if (section === 'furniture') {
                        options = [
                            'select',
                            'Sofa',
                            'Table',
                            'Chair',
                            'Wardrobe'
                        ];
                    } else if (section === 'home') {
                        options = [
                            'select',
                            'Curtains',
                            'Cushions',
                            'Rugs',
                            'Decorative items'
                        ];
                    } else if (section === 'cloths') {
                        options = [
                            'select',
                            'T-shirt',
                            'Jeans',
                            'Jacket',
                            'Sweater'
                        ];
                    } else if (section === 'footwear') {
                        options = [
                            'select',
                            'Sneakers',
                            'Boots',
                            'Slippers',
                            'Sandals'
                        ];
                    }

                    // Add the new options to the dropdown
                    options.forEach(option => {
                        const opt = document.createElement('option');
                        opt.value = option.toLowerCase().replace(' ', '_');
                        opt.text = option;
                        quantitySelect.appendChild(opt);
                    });
                }

                // Initialize options for the default selected section
                window.onload = updateOptions;
            </script>


            <div class="form-group">
                <label for="img"> Product img:</label>
                <input type="file" class="form-control" name="productimage" >
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>