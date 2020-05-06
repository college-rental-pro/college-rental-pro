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

            nav {
                /* padding-left:15% !important; */
                padding-right: 15% !important;
            }

            #landlord-cards {
                margin-top: 10%;
            }

            
            
        </style>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg container-fluid navbar-light bg-white">
                <a class="navbar-brand" href="Main_Page.html">
                    <img src="logo.png" alt="College Rental Pro">
                </a>
            
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="Landlord_Login-Signup.html">Managers and Landlords</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Student_Login-Signup.html">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About Us</a>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="container" id="landlord-cards">
            <div class="row">

                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body" id="landlord-login-card">
                            <h5 class="card-title">Landlord Login</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                              
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Password</span>
                                    </div>
                                <input type="text" class="form-control" aria-label="Password" aria-describedby="basic-addon2">
                            </div>

                            <button type="button" class="btn btn-outline-primary" id="landlord-login">Login</button>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card" id="landlord-signup-card">
                        <div class="card-body">
                            <h5 class="card-title">Landlord Sign Up</h5>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">First and last name</span>
                                </div>
                                <input type="text" class="form-control">
                                <input type="text" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Email" aria-describedby="basic-addon1">
                            </div>
                              
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Password</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Password" aria-describedby="basic-addon2">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">Confirm Password</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Confirm-Password" aria-describedby="basic-addon3">
                            </div>

                            <button type="button" class="btn btn-outline-success" id="landlord-signup">Sign Up</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </body>

    <script>



    </script>
</html>