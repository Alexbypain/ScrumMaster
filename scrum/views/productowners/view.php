<?php require "views/shared/header.php" ?>

<div class="container">
  <h1 class="text-center my-5"><?= $data['titulo'] ?></h1>
  <p>
    <span class="fw-bold">ID del Product Owner:</span>
    <?= $data['productowner']['idProduct'] ?>
  </p>
  <p>
    <span class="fw-bold">Nombre del Product Owner:</span>
    <?= $data['productowner']['nombreUsuario'] ?>
  </p>
  <p>
    <span class="fw-bold">Experiencia del Product Owner:</span>
    <?= $data['productowner']['experiencia'] ?>
  </p>

  <a href="index.php?controlador=productowner" class="btn btn-primary">Volver</a>
</div>

<?php require "views/shared/footer.php" ?>