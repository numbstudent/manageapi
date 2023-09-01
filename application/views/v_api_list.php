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
                            <h1 class="m-0">API History List</h1>
                        </div>
                    </div>
                </div>
            </div>


            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table" id="tblApiList">
                                <tr>
                                    <th>URL</th>
                                    <th>Parameters</th>
                                    <th>Request Type</th>
                                    <th>Description</th>
                                </tr>
                                <tr>
                                    <td><a href="<?php echo base_url().'runapi'?>"><?php echo base_url().'runapi'?></a></td>
                                    <td>
                                        <ol>
                                            <li>url (ex: <code>http://103.179.56.140:7771/api/getnumber.php</code>)</li>
                                            <li>parameters (ex: <code>user:jsu;pass:77jsu77;limit:50</code>)</li>
                                            <li>request_type (ex: <code>GET</code> / <code>POST</code>)</li>
                                        </ol>
                                    </td>
                                    <td>POST</td>
                                    <td>Running API from other source and save the result.</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <script>
        $('#tblApiList').dataTable();
    </script>
</body>