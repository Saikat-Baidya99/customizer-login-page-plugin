<?php
 // Plugin Callback
 function clp_create_page(){
    ?>
      <div class="clp_main_area">
        <div class="clp_body_area clpwp_common">
          <h3 id="title"><?php print esc_attr( 'Login Page Customizar' ); ?></h3>
          <form action="options.php" method="post">
            <?php wp_nonce_field('update-options'); ?>

            <!-- Primary Color -->
            <label for="clp-primary-color" name="clp-primary-color"><?php print esc_attr( 'Primary Color' ); ?></label>
            <small>Add your Primary Color</small>
            <input type="color" name="clp-primary-color" value="<?php print get_option('clp-primary-color') ?>">

            <!-- Secondary Color -->
            <label for="clp-sec-color" name="clp-sec-color"><?php print esc_attr( 'Secondary Color' ); ?></label>
            <small>Add your Secondary Color</small>
            <input type="color" name="clp-sec-color" value="<?php print get_option('clp-sec-color') ?>">

            <!-- Main Logo -->
            <label for="clp-logo-image-url" name="clp-logo-image-url"><?php print esc_attr( 'Upload your logo' ); ?></label>
            <small>Paste your logo URL here, 80x80 Recomanded</small>
            <input type="text" name="clp-logo-image-url" value="<?php print get_option('clp-logo-image-url') ?>" placeholder="Paste your Logo URL here">

            <!-- Background Image -->
            <label for="clp-custom-bg-image" name="clp-custom-bg-image"><?php print esc_attr( 'Upload your Bacground Image' ); ?></label>
            <small>Paste your Background Image URL here</small>
            <input type="text" name="clp-custom-bg-image" value="<?php print get_option('clp-custom-bg-image') ?>" placeholder="Paste your Background Image URL here">

            <!-- Bacground Brightness -->
            <label for="clp-custom-bg-brightness" name="clp-custom-bg-brightness"><?php print esc_attr( 'Bacground Brightness {Between 0.1 to 0.9}' ); ?></label>
            <small>Set your Bacground Brightness here. Number Only (Between 0.1 to 0.9)</small>
            <input type="text" name="clp-custom-bg-brightness" value="<?php print get_option('clp-custom-bg-brightness') ?>" placeholder="Between 0.1 to 0.9">


            <input type="hidden" name="action" value="update">
            <input type="hidden" name="page_options" value="clp-primary-color, clp-logo-image-url, clp-custom-bg-image, clp-sec-color, clp-custom-bg-brightness">
            <input type="submit" name="submit" value="<?php _e('Save Changes', 'clp') ?>">
            </form>
            </div>
            <div class="clp_sidebar_area clp_common">
            <h3 id="title"><?php print esc_attr( 'About Author' ); ?></h3>
           <p><img src="<?php print plugin_dir_url(__FILE__) . '/img/author.png' ?>" alt=""></p>
          <p>I'm <strong><a href="https://saikat.com/" target="_blank">Saikat</a></strong> a Front End Web developer who is passionate about making error-free websites with 100% client satisfaction. I have a passion for learning and sharing my knowledge with others as publicly as possible. I love to solve real-world problems.</p>
        </div>
      </div>
    <?php
  }
?>