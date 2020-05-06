<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <style>

            .nav-item {
                font-size: large;
            }

            #side-nav {
                height: 100vh;
                width: 10%;
                position: fixed;
                left: 0;
            }

            #properties-container {
                margin-top: 2%;
                width: 70%;
                margin-left: 15%;
                margin-right: 5%;
            }


        </style>
        
    </head>
    <body>

        <header>
            <nav class="navbar navbar-expand-lg container-fluid navbar-light bg-white">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="#home">
                        <img src="logo.png" alt="College Rental Pro">
                    </a>
                </ul>
            
                <ul class="navbar-nav mr-0">
                    <li class="nav-item">
                        <a class="nav-link">Landlord Company</a>
                    </li>
                </ul>
            </nav>
        </header>

        <nav class="navbar container-fluid navbar-light bg-light" id="side-nav">
            <ul class="navbar-nav flex-column" id="side-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Properties <button type="button" class="btn btn-primary" id="add-property">Add Property</button> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Listings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Maintenance</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Expenses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            </ul>
        </nav>

        
        <div class="container-fluid" id="properties-container">
            <div class="row">
                <div class="col-sm-6"> 
                    <div class="card">
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" id="add-property-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Property</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{URL::to('add-property')}}">

                        <div class="modal-body">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="address">Address</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Address" name="address">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="city">City</span>
                                </div>
                                <input type="text" class="form-control" aria-label="City" name="city">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="state">State</span>
                                </div>
                                <input type="text" class="form-control" aria-label="State" name="state">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="zip">Zip</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Zip" name="zip">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="beds">Bedrooms</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Bedrooms" name="beds">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="baths">Bathrooms</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Bathrooms" name="baths">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="rent">Rent</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Rent" name="rent">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="rent-type">Rent Type</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Rent Type" name="rent-type">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="save-property">Add Property</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>

    <script>

        $(document).ready(function(){

            let url = "{{URL::to()}}";
            console.log(url);

            $("#add-property").click(function(){

                $("#add-property-modal").modal("show");
                
                let data = {
                    address: $("#address").val(),
                    city: $("#city").val(),
                    state: $("#state").val(),
                    zip: $("#zip").val(),
                    bedrooms: $("#beds").val(),
                    bathrooms: $("#baths").val(),
                    rent: $("#rent").val(),
                    rent_type: $("rent-type").val()
                };

                $("#save-property").click(function(){
                    $.post("add-property", data);
                        $.done(function(){
                            console.log(data);
                        });
                });   
            });

        });
    </script>

</html>