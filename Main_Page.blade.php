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

            #main-search {
                position: fixed;
                top: 50%;
                left: 50%;
                margin-top: -50px;
                margin-left: -100px;
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

        <div class="container-fluid" id="main-container">
            <form class="form-inline" id="main-search">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
        </div>
    </body>

    <script>



    </script>
</html>