<footer class="mt-5 footer-bg" id="contactanos">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5 ml-3">

                <div class="row justify-content-center">
                    <div class="md-10">
                        <h2 class="footer-title">Contáctanos</h2>
                        <p class="footer-informacion">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            <span>5571900575</span>
                        </p>
                        <p class="footer-informacion">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>56846886 - 68312564</span>
                        </p>
                        <p class="footer-informacion">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span>rafael.barrera@gmail.com</span>
                        </p>
                        <p class="footer-informacion">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>Calzada del Hueso 331<br>Colonia Floresta Coyoacán.<br>Ciudad de México</span>
                        </p>
                    </div>
                    <div class="md-10 mt-4">
                        <h2 class="footer-title">Redes Sociales</h2>
                        <div class="iconos-redes">
                            <a href="#" target="_blank">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                            <a href="#" target="_blank">
                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div class="footer-contacto">
                    <p class="py-2 color-white footer-title-contact">Envianos tus dudas o comentarios completando este breve formulario</p>
                    <form class="row g-3" method="POST" action="./public/mail/mail.php" autocomplete="off">
                        <input hidden value="send" name="send" id="send">

                        <div class="col-md-12">
                            <label for="inputNombres" class="form-label color-white">Nombres completos</label>
                            <input type="text" class="form-control" id="inputNombres" name="inputNombres" required>
                        </div>
                        <div class="col-md-12">
                            <label for="inputEmail" class="form-label color-white">Correo electrónico</label>
                            <input type="email" class="form-control" id="inputEmail" name="inputEmail" required>
                        </div>
                        <div class="col-12">
                            <label for="inputTel" class="form-label color-white">Número Telefónico</label>
                            <input type="text" class="form-control" id="inputTel" name="inputTel" required>
                        </div>
                        <div class="col-12">
                            <label for="inputTextArea" class="form-label color-white">Mensaje</label>
                            <textarea class="form-control" id="inputTextArea" name="inputTextArea" rows="3" required></textarea>
                        </div>
                        <div class="d-grid gap-3">
                            <button class="btn btn-secondary" type="submit">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <span class="footer-linea"></span>
    <div class="container fluid">
        <div class="d-flex-footer text-center color-white mt-2">
            <div>Cirugia Plástica</div>
            <div>Todos los Derechos Reservados</div>
            <div>
                &copy;
                <script>
                    copyright = new Date();
                    document.write(copyright.getFullYear())
                </script>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/bb6fec3165.js"></script>
<script src="public/js/main.js"></script>

<?php if (isset($_GET['r']) && !empty($_GET['r'])) {
    if ($_GET['r'] === '1' || $_GET['r'] === '2') { ?>
        <script src="public/js/toast.js"></script>
<?php }
} ?>

</body>

</html>