<?php
session_start();
if (isset($_SESSION['mensagem'])) : ?>
    <div id="alert-message" class="alert alert-dark alert-dismissible fade show" role="alert">
        <?php echo $_SESSION['mensagem']; ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        var fadeTimeout = 3000; 
        setTimeout(function() {
            var alertMessage = document.getElementById('alert-message');
            if (alertMessage) {
                alertMessage.remove();
            }
        }, fadeTimeout);
    </script>
<?php
endif;
session_unset();