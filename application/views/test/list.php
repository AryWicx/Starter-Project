<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Starter Project</title>
</head>
<body>
<div class="container">
<div class="col-sm-10 offset-1 mt-5">
<h1>Silahkan buat modul CRUD,</h1>
<p>Menggunakan Database. <br> Menggunakan codeigniter 3 struktur MVC (Model-View-Controller). </p>


<a class="btn btn-primary" href="<?= base_url('starter/add') ?>">Add</a>
<table class="table mt-3">
<tr>
    <th scope="col">No</th>
    <th scope="col">Nama</th>
    <th scope="col">Email</th>
    <th scope="col">Password</th>
    <th scope="col">Action</th>
</tr>
<tr>
    <td scope="row">1. </td>
    <td>Agrin Fauzi</td>
    <td>agrin@email.com</td>
    <td>adf0a7d0f6gad948haaioae</td>
    <td><a class="btn btn-success" href="<?= base_url('starter/edit') ?>">Edit</a>&nbsp;&nbsp;<a class="btn btn-danger" href="<?= base_url('starter/delete') ?>">Delete</a></td>
</tr>
</table>
</div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>