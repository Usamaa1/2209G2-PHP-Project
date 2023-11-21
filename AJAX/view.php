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
    <h1 class="text-center">All Products!</h1>

    <div class="container">
        <div class="row" id="container">








        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script>

        $(document).ready(() => {




            let container = document.getElementById('container');




            function viewProducts() {
          
                    let oldData;

                    $.ajax({
                        url: 'query/viewQuery.php',
                        type: 'POST',
                        data: {},
                        success: (prod) => {

                            if (oldData != prod) {
                                // console.log(prod);
                                container.innerHTML = prod;

                                let deleteBtn = document.querySelectorAll('.deleteBtn');

                                deleteBtn.forEach(delBtn => {
                                    delBtn.addEventListener('click',function (){
                                        
                                        console.log(this.getAttribute('del'));

                                        delId = this.getAttribute('del');


                                        $.ajax({
                                            url: 'query/delete.php',
                                            type: 'POST',
                                            data: {
                                                delId: delId
                                            },
                                            success: (data)=>{
                                                console.log(data);
                                                viewProducts();
                                            }
                                        })










                                    })
                                }); 


                            }

                            oldData = prod;


                        }
                    })
            



            }

            viewProducts()
            setInterval(viewProducts, 1000);












        })



























    </script>
</body>

</html>