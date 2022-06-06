<div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-5 shadow">
      <div class="modal-header p-5 pb-4 border-bottom-0">
        <!-- <h5 class="modal-title">Modal title</h5> -->
        <h2 class="text">Recuperación de contraseña</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-5 pt-0">
        <form method='POST' action="login.php?accion=olvido" class="">
          <div class="form-floating mb-3">
            <input name='correo' type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Correo de recuperación</label>
          </div>
          <button class="btn btn-outline-danger" type="submit">Enviar correo de recuperación</button>
          <br>
          </br>
          <div class="text-left">
            <a href="../admin/login.php">Atrás</a>
          </div>
          