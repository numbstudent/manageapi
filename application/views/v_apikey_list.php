<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
                </li>
            </ul>
        </nav>

        <?php echo $sidebar; ?>

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">GENERATE API KEY LIST</h1>
                        </div>
                        <div class="col-sm-6">
                            <form action="<?php echo base_url().'generateapikey';?>">
                            <input class="btn btn-primary float-right" type="submit" value="Generate API">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $table; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script>
        $('#tblApiKeyList').dataTable();
    </script>
</body>