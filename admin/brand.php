<?php 
    include 'template/header.php';
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Brand Tables</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="brand-tambah.php" class="btn btn-primary btn-icon-split">
                                <span class="icon">
                                    <i class="fas fa-plus-square"></i>
                                </span>
                                <span class="text">Tambah Brand</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th width="1%">ID</th>
                                            <th>Name</th>
                                            <th class="text-center" width="12%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>Royal Canin</th>
                                            <th>
                                             <div class="dropdown mb-4">
                                                <button class="btn btn-info dropdown-toggle" type="button"
                                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu animated--fade-in"
                                                    aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="brand-edit.php">Edit</a>
                                                    <a class="dropdown-item" href="brand-hapus.php">Hapus</a>
                                                </div>
                                             </div>       
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php 
    include 'template/footer.php';
?>