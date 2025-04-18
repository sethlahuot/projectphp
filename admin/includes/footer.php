<footer class="footer pt-5">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="col-lg-12">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link pe-0 text-muted" target="_blank">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
    </main>
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script src="assets/js/smooth-scrollbar.min.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Alertify JS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    <script>
        <?php 
            if(isset($_SESSION['message']))
            { 
                ?>
                alertify.set('notifier','position', 'top-center');
                alertify.success('<?=$_SESSION['message']; ?>');
            <?php
                unset($_SESSION['message']);
            }
        ?>
    </script>

    </body>
</html>
<?php ob_end_flush(); ?>
