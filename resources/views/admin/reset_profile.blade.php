<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet">


</head>

<body>
    <div id="app">
        <div class="main-wrapper">

            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                                    class="fas fa-search"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-link">
                        <a href="" target="_blank" class="btn btn-warning">Front End</a>
                    </li>
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="uploads/user.jpg" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">John Doe</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Edit Profile
                            </a>
                            <a href="login.html" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>



            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">Admin Panel</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html"></a>
                    </div>

                    <ul class="sidebar-menu">

                        <li class="active"><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i>
                                <span>Dashboard</span></a></li>

                        <li class="nav-item dropdown active">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item
                                        1</a></li>
                                <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a>
                                </li>
                            </ul>
                        </li>

                        <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i>
                                <span>Setting</span></a></li>

                        <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i>
                                <span>Form</span></a></li>

                        <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i>
                                <span>Table</span></a></li>

                        <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i>
                                <span>Invoice</span></a></li>

                    </ul>
                </aside>
            </div>

            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <img src="uploads/user.jpg" alt="" class="profile-photo w_100_p">
                                                    <input type="file" class="form-control mt_10" name="photo">
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="mb-4">
                                                        <label class="form-label">Name *</label>
                                                        <input type="text" class="form-control" name="name"
                                                            value="John Doe">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Email *</label>
                                                        <input type="text" class="form-control" name="email"
                                                            value="john@gmail.com">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Password</label>
                                                        <input type="password" class="form-control" name="new_password">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Retype Password</label>
                                                        <input type="password" class="form-control"
                                                            name="retype_password">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label"></label>
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <script src="dist/js/scripts.js"></script>
    <script src="dist/js/custom.js"></script>

</body>

</html>