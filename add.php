<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Add Item Product</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body class="bg-gradient-primary">


        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        
                        <div class="col-lg-10">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Add Item Produk</h1>
                                </div>
                                <form class="user" method="POST" action="add_data.php" name="updatedata" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <p> ID Item </p>
                                            <input type="text" class="form-control form-control-user" id="iditem" 
                                                placeholder="Automatic Fill" name="iditem" readonly="readonly">
                                        </div>
                                       
                                        <div class="col-sm-6">
                                        <p> Nama Item </p>
                                            <input type="text" class="form-control form-control-user" id="itemname" 
                                                placeholder="Nama Item" name="namaitem">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                       
                                        <div class="col-sm-6">
                                        <p> Kategori Skin </p>
                                        <select name="idkategori_skin" class="form-control ">
                                        <?php
                                            
                                            include 'koneksi.php';
                                            $query = mysqli_query($conn,"SELECT * FROM kategori_skin ORDER BY idkategori_skin");
                                            while($kategori = mysqli_fetch_array($query)){
                                                echo "<option value='".$kategori['idkategori_skin']."'>".$kategori['namakategori_skin']."</option>";

                                            }

                                        ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <p> Deskripsi</p>
                                        <input type="textarea" class="form-control form-control-user" id="deskripsiitem"
                                            placeholder="Deskripsi Item" name="deskripsi"
                                            height="200px" size="100%">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                        <p> Upload File</p>
                                            <input type="file" name="fileupload"
                                                id="uploadfile" placeholder="Input Gambar Item">
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Submit">
                                        
                                    `<hr>
                                    
                                </form>
                                <hr>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

    </body>

    </html>