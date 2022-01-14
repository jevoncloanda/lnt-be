<?php require_once '../process/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Books Collection</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- NAVBAR -->
    <?php require_once '../views/navbar.php'; ?>

    <!-- CONTACT BANNER -->
    <div class="container bg-light banner">
        <h1>Feel Free to Contact Us 📞😊</h1>
        <p class="mb-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking</p>
        <a href="#" class="btn btn-success">Whatsapp Call</a>
    </div>

    <!-- BOOK CONTENT -->
    <div class="container">
        <div class="col-md-5 py-3">
            <form>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Email</label>
                        <input type="email" class="form-control" placeholder="ex: muhamad.ndaru@gmail.com">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" placeholder="ex: Muhamad Ndaru">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Pesan / Keluhan</label>
                        <textarea class="form-control" placeholder="Masukkan pesan disini" rows="5"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark btn-sm">Send Now</button>
            </form>
        </div>
    </div>

    <script src="../js/bootstrap.min.js"></script>
</body>

</html>