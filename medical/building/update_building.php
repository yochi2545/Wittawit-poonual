<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB Admin</title>
    <link href="../css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="../index.php">Data Bulding</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            All Data
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Update Data</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../index.php">All Data Building</a></li>
                        <li class="breadcrumb-item active">Update Data</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p class="mb-0">

                            <div class="row">
                                <!-- left column -->
                                <div class="col-md-12">
                                    <!-- general form elements -->
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                            <h3 class="box-title">Update Data Building</h3>
                                        </div>
                                        <!-- /.box-header -->

                                        <!-- Update INTO books (bulding_id, bulding_type, bulding_name)
                                            VALUES ("1", "Surgery Buyilding", "Yoshi Tower"); -->
                                        <?php
                                            $building_id = $_GET['bulding_id'];
                                            require_once("../dbConnect.php");
                                            $strQuery = "SELECT * FROM building where building_id = " . $bulding;
                                            $resQuery = mysqli_query($connect, $strQuery);
                                            $data = mysqli_fetch_assoc($resQuery);
                                        ?>

                                        <!-- form start -->
                                        <form role="form" action="sql_building.php" method="post"
                                            enctype="multipart/form-data">
                                            <div class="box-body">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">building_id</label>
                                                    <input type="text" class="form-control" name="building_id" value="<?php echo $data['building_id']; ?>"
                                                        placeholder="Enter Bulding ID">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">buillding_type</label>
                                                    <input type="text" class="form-control" name="buillding_type" value="<?php echo $data['buillding_type']; ?>"
                                                         placeholder="Enter Building Type">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">building_room</label>
                                                    <input type="text" class="form-control" id="building_room"  value="<?php echo $data['building_room']; ?>"
                                                        name="building_room" placeholder="Enter Bulding Room">

                                                <div class="form-group">
                                                    

                                                    <!-- update -->
                                                    <input type="hidden" class="form-control" id="phone"
                                                        name="insert_or_update" value="update" readonly>
                                                    <!-- update id -->
                                                    <input type="hidden" name="bulding_id" value="<?php echo $data['bulding_id']; ?>">
                                                </div>
                                            </div>
                                            <!-- /.box-body -->
                                            <div class="box-footer">
                                                <br>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.box -->
                                </div>
                            </div>

                            </p>
                        </div>
                    </div>
                    <div style="height: 100vh"></div>
                    <div class="card mb-4">
                        <div class="card-body">When scrolling, the navigation stays at the top of the page. This is the
                            end of the static navigation demo.</div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/scripts.js"></script>
    <?php
    if ($_GET['alert_status'] == "complete") {
        ?>
        <script>
            Swal.fire({
                title: "Good job!",
                text: "Your Data has been saved",
                icon: "success"
            });
        </script>
    <?php }
    if ($_GET['alert_status'] == "notcomplete") {
        ?>
        <script>
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Something went wrong!"
            });
        </script>
    <?php } ?>
</body>

</html>