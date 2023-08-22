<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sistema</title>
    <style>
        body
        {
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
        }
       .form
       {
        border-radius: 15px;
        left: 50%;
        transform: translate(-50%, 10%);
        width: 40%;
        position: absolute;
        background-color: none;
        
       }
      
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">THE PATH</a>
            <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="sistema.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="novidades.php">Novidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="livros.php">Livros</a>
        </li>
        <li class="nav-item dropdown">
          
        </li>
      </ul>
    </div>
  </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="admin.php" class="btn btn-outline-dark me-3">Admin</a>
            <br>
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <br>
    <div class="form">
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Pesquisa..." aria-label="Search">
      <button type="button" class="btn btn-dark">Buscar</button>
    </form>
  </div>
    
</body>
</html>