<!DOCTYPE html>
<html>
<head>
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo BASEURL;?>">Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?php echo BASEURL;?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?php echo BASEURL.'/about';?>">About</a>
                <a class="nav-item nav-link" href="<?php echo BASEURL.'/mahasiswa';?>">Mahasiswa</a>
            </div>
        </div>
        </nav>
    </div>