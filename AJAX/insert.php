<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Add Products!</h1>

    <div class="container">
        <div class="row">
            <form class="row g-3" id="reset">

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" placeholder="Enter Product Name">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Price</label>
                    <input type="text" class="form-control" id="productPrice" placeholder="Enter Product Price">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Product Description</label>
                    <input type="text" class="form-control" id="productDesc" placeholder="Enter Product Description">
                </div>

                <div class="col-12">
                    <button type="submit" id="addBtn" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

        $(document).ready(() => {

            let addBtn = document.getElementById('addBtn');
            let reset = document.getElementById('reset');

            addBtn.addEventListener('click', (e) => {
                e.preventDefault();

                let productName = document.getElementById('productName').value;
                let productPrice = document.getElementById('productPrice').value;
                let productDesc = document.getElementById('productDesc').value;

                // console.log(productName)


                $.ajax({
                    url: 'query/insertQuery.php',
                    type: 'POST',
                    data: {
                        prodName: productName,
                        prodPrice: productPrice,
                        prodDesc: productDesc
                    },
                    success: () => {
                        console.log('Data inserted Successfully');
                        reset.reset();
                    }
                })








            })






        })








    </script>
</body>

</html>