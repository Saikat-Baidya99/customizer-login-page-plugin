<?php
  // Changing Login form logo
  function clp_login_logo_change(){
    ?>
      <style>
        #login h1 a, .login h1 a{
         background-image: url(<?php print get_option('clp-logo-image-url'); ?>) !important;
        }
        #login form p.submit input {
         background: <?php print get_option('clp-logo-image-url'); ?>;
        }
        .login #login_error,
        .login .message,
        .login .success {
          border-left: 4px solid <?php print get_option('clp-primary-color'); ?> !important;
        }
        input#user_login,
        input#user_pass {
         border-left: 4px solid <?php print get_option('clp-primary-color'); ?> !important;
        }
        .login #backtoblog a {
          background: <?php print get_option('clp-sec-color'); ?> !important;
        }
         body.login {
          background-image: url(<?php print get_option('clp-custom-bg-image'); ?>) !important;
        }
        body.login::after {
         opacity: <?php print get_option('clp-custom-bg-brightness'); ?> !important;
        }
      </style>
    <?php
  }
  add_action( 'login_enqueue_scripts', 'clp_login_logo_change');
?>