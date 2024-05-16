<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Momkin</title>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark mb-3">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="./img/header-img.png" width="auto" height="30">

            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div>
                <a href="login.php" class="btn btn-outline me-2" style="color: #ffff; border-color: #A0DEFF;">Sign in</a>
                <a href="register.php" class="btn btn-primary" style="background-color: #A0DEFF; color: #000; border-color: #000;">Sign up</a>
            </div>
        </div>
    </nav>

    <section class="h-100 ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">

                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Customers registration </h3>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">First name</label>
                                                <input type="text" id="firstname" class="form-control" placeholder="First name" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div data-mdb-input-init class="form-outline">
                                                <label class="form-label" for="form3Example1n">Last name</label>
                                                <input type="text" id="form3Example1n" class="form-control" placeholder="Last name" />
                                            </div>
                                        </div>
                                    </div>

                                    <div data-mdb-input-init class="form-outline mb-4">
                                        <label class="form-label">Email</label>
                                        <input type="text" id="email" class="form-control" placeholder="Entre your Email" />
                                    </div>

                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Your password" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation">Confirm password</label>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm password" id="password_confirmation">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" style="background-color: #A0DEFF; color:#000" class="btn btn-success btn-block mb-3">Register</button>
                                        <a href="login.php">Already have an account? login here</a>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="img/save.jpg" class="img-fluid" style="border-top-left-radius: .35rem; border-bottom-left-radius: .25rem;" width="400px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-light text-black py-5 mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="footer-logo">
                        <img src="your-logo.png" alt="Company Logo">
                        <span class="text-uppercase font-weight-bold">Product</span>
                        <div class="social-icons mt-3">
                            <span>
                                <i class="fab fa-instagram mr-2" style="color: #A0DEFF;"></i>
                            </span>
                            <span class="p-4">
                                <i class="fab fa-facebook mr-2" style="color: #A0DEFF;"></i>
                            </span>
                            <span>
                                <i class="fa-brands fa-twitch" style="color: #A0DEFF;"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-black"><b>Resource</b></a></li>
                        <li><a href="#" class="text-black">About Us</a></li>
                        <li><a href="#" class="text-black">Contact</a></li>
                        <li><a href="#" class="text-black">FAQ</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4">
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-black"><b>Legal</b></a></li>
                        <li><a href="#" class="text-black">Disclaimer</a></li>
                        <li><a href="#" class="text-black">Privacy Policy</a></li>
                        <li><a href="#" class="text-black">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="newsletter">
                        <h4 class="font-weight-bold">Stay Updated</h4>
                        <form action="#" method="post">
                            <input type="email" class="form-control mb-4 mt-4" placeholder="Enter your email">
                            <button type="button" class="btn" style="background-color: #A0DEFF; border-color: #000; color: #000;">Sign up Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 text-center">
                    <p>Made With Love By Figmaland All Right Reserved</p>
                </div>
            </div>
        </div>
    </footer>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/8168c97e79.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>