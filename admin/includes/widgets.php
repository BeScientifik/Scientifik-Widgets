<?php 


//include( plugin_dir_path( __FILE__ ) . 'ipn/paypal-ipn.php');

/*----------------------------------------------------------------------------*
 * MOBILE
 *
 *
 *
 * MOBILE
 * MOBILE (landscape)
 * iPhone 5 or iPod Touch 5th generation 
 * PHABLET Sized Devices
 * Tablet (standard) ---- MAY NEED TO BE OMITED!!!
 * Tablet (portrait)
 * Tablet (landscape)
 * iPad Portrait
 * iPad Landscape
 * Retina Only Devices
 * Desktop 
 * Large Monitor
 * Print only
 *
 *----------------------------------------------------------------------------*/

/*----------------------------------------------------------------------------*
 
  Checkboxes values end up sitewide.

  Use PHP https://github.com/serbanghita/Mobile-Detect =  no media queries....
      Make global here
      Execute the public echo content if (isdevice()) { echo }




  Addin modernizer classes to my display none classes.



 *----------------------------------------------------------------------------*/






/*----------------------------------------------------------------------------*
 * MOBILE
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_mobile_only_widget");
function load_mobile_only_widget(){
register_widget( 'mobile_text_unwrapped' );
}

class mobile_text_unwrapped extends WP_Widget {
  function mobile_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Only Content', 'description' => __( 'Base mobile device screens','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'mobile_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'mobile_text_unwrapped', 'Mobile', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text']; 

    // if checked hide iphone5 widget content
    if ($instance['disable-iphone5'] == 'on'){ echo "<style>.iphone5-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped mobile-only">'.do_shortcode($text).'</div>'; 
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    /* Strip tags (if needed) and update the widget settings. */
    $instance['text'] = $new_instance['text'];
    $instance['disable-iphone5'] = $new_instance['disable-iphone5'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-iphone5' ); ?>"><?php _e( 'Disable iPhone 5 widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-iphone5' ); ?>" name="<?php echo $this->get_field_name( 'disable-iphone5' ); ?> " <?php if ($instance['disable-iphone5'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>
    <?php
  }
}



/*----------------------------------------------------------------------------*
 * MOBILE (landscape)
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_mobile_landscape_only_widget");
function load_mobile_landscape_only_widget(){
register_widget( 'mobile_landscape_text_unwrapped' );
}

class mobile_landscape_text_unwrapped extends WP_Widget {
  function mobile_landscape_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Landscape Only Content', 'description' => __( 'Displays for base mobile device screens while in landscape','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'mobile_landscape_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'mobile_landscape_text_unwrapped', 'Mobile (landscape)', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['disable-mobile'] == 'on'){ echo "<style>.mobile-only{ display:none; }</style>"; }
    elseif ($instance['disable-iphone5'] == 'on'){ echo "<style>.iphone5-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped mobile-landscape-only">'.do_shortcode($text).'</div>';
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
      /* Strip tags (if needed) and update the widget settings. */
      $instance['text'] = $new_instance['text'];
      $instance['disable-iphone5'] = $new_instance['disable-iphone5'];
      $instance['disable-mobile'] = $new_instance['disable-mobile'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-mobile' ); ?>"><?php _e( 'Disable the base Mobile widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-mobile' ); ?>" name="<?php echo $this->get_field_name( 'disable-mobile' ); ?> " <?php if ($instance['disable-mobile'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-iphone5' ); ?>"><?php _e( 'Disable iPhone 5 widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-iphone5' ); ?>" name="<?php echo $this->get_field_name( 'disable-iphone5' ); ?> " <?php if ($instance['disable-iphone5'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>
    <?php
  }
}



/*----------------------------------------------------------------------------*
 * iPhone 5 or iPod Touch 5th generation 
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_iphone5_only_widget");
function load_iphone5_only_widget(){
register_widget( 'iphone5_text_unwrapped' );
}

class iphone5_text_unwrapped extends WP_Widget {
  function iphone5_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Landscape Only Content', 'description' => __( 'iPhone 5 or iPod Touch 5th generation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'iphone5_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'iphone5_text_unwrapped', 'iPhone 5', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['disable-mobile'] == 'on'){ echo "<style>.mobile-only{ display:none; }</style>"; }
    elseif ($instance['disable-mobile-landscape'] == 'on'){ echo "<style>.mobile-landscape-only{ display:none; }</style>"; }
    elseif ($instance['retina'] == 'on'){ echo "<style>.retina-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped iphone5-only">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
      /* Strip tags (if needed) and update the widget settings. */
      $instance['text'] = $new_instance['text'];
      $instance['disable-mobile'] = $new_instance['disable-mobile'];
      $instance['disable-mobile-landscape'] = $new_instance['disable-mobile-landscape'];
      $instance['retina'] = $new_instance['retina'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-mobile' ); ?>"><?php _e( 'Disable the Mobile widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-mobile' ); ?>" name="<?php echo $this->get_field_name( 'disable-mobile' ); ?> " <?php if ($instance['disable-mobile'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-mobile-landscape' ); ?>"><?php _e( 'Disable Mobile (landscape) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-mobile-landscape' ); ?>" name="<?php echo $this->get_field_name( 'disable-mobile-landscape' ); ?> " <?php if ($instance['disable-mobile-landscape'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'retina' ); ?>"><?php _e( 'Disable Retina (2x) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'retina' ); ?>" name="<?php echo $this->get_field_name( 'retina' ); ?> " <?php if ($instance['retina'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>
    <?php
  }
}



/*----------------------------------------------------------------------------*
 * Phablet Sized Devices
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_phablet_only_widget");
function load_phablet_only_widget(){
register_widget( 'phablet_text_unwrapped' );
}

class phablet_text_unwrapped extends WP_Widget {
  function phablet_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => '\"Phablet\" Only Content', 'description' => __( 'For large mobile device screens 481px+','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'phablet_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'phablet_text_unwrapped', 'Phablet Sized Devices', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped phablet">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    /* Strip tags (if needed) and update the widget settings. */
    $instance['text'] = $new_instance['text'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
	    <p>
	      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
	      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
	    </p>
    <?php
  }
}


/*----------------------------------------------------------------------------*
 * Tablet (portrait) screens 768px wide - max 1023px
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "tablet_portrait_only_widget");
function tablet_portrait_only_widget(){
register_widget( 'tablet_portrait_text_unwrapped' );
}

class tablet_portrait_text_unwrapped extends WP_Widget {
  function tablet_portrait_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Tablet (Landscape)', 'description' => __( 'Displays on 768px to max 1023px screens in portrait orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'tablet_portrait_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'tablet_portrait_text_unwrapped', 'Tablet (portrait)', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text']; 

    if ($instance['disable-ipad-portrait'] == 'on'){ echo "<style>.scientifik-ipad-portrait-widget{ display:none; }</style>"; } 
    elseif ($instance['retina'] == 'on') { echo "<style>.retina-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped tablet-portrait">'.do_shortcode($text).'</div>';




  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
      /* Strip tags (if needed) and update the widget settings. */
      $instance['text'] = $new_instance['text'];
      $instance['retina'] = $new_instance['retina'];
      $instance['disable-ipad-portrait'] = $new_instance['disable-ipad-portrait'];

    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'disable-ipad-portrait' ); ?>"><?php _e( 'Disable iPad in portrait widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-ipad-portrait' ); ?>" name="<?php echo $this->get_field_name( 'disable-ipad-portrait' ); ?> " <?php if ($instance['disable-ipad-portrait'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'retina' ); ?>"><?php _e( 'disable Retina (2x) when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'retina' ); ?>" name="<?php echo $this->get_field_name( 'retina' ); ?> " <?php if ($instance['retina'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>

    <?php
  }
}


/*----------------------------------------------------------------------------*
 * Tablet (landscape) screens 768px wide - max 1024px
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "tablet_landscape_only_widget");
function tablet_landscape_only_widget(){
register_widget( 'tablet_landscape_text_unwrapped' );
}

class tablet_landscape_text_unwrapped extends WP_Widget {
  function tablet_landscape_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Tablet (landscape)', 'description' => __( 'Displays on 768px to max 1024px screens in landscape orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'tablet_landscape_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'tablet_landscape_text_unwrapped', 'Tablet (landscape)', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['disable-ipad-landscape'] == 'on'){ echo "<style>.scientifik-ipad-landscape-widget{ display:none; }</style>"; } 
    elseif ($instance['retina'] == 'on') { echo "<style>.retina-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped tablet-landscape">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
      /* Strip tags (if needed) and update the widget settings. */
      $instance['text'] = $new_instance['text'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-ipad-landscape' ); ?>"><?php _e( 'Disable iPad (landscape) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-ipad-landscape' ); ?>" name="<?php echo $this->get_field_name( 'disable-ipad-landscape' ); ?> " <?php if ($instance['disable-ipad-landscape'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'retina' ); ?>"><?php _e( 'Disable Retina (2x) when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'retina' ); ?>" name="<?php echo $this->get_field_name( 'retina' ); ?> " <?php if ($instance['retina'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>
    <?php
  }
}


/*----------------------------------------------------------------------------*
 * iPad Portrait
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "ipad_portrait_widget");
function ipad_portrait_widget(){
register_widget( 'ipad_portrait_text_unwrapped' );
}

class ipad_portrait_text_unwrapped extends WP_Widget {
  function ipad_portrait_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'iPad (portrait)', 'description' => __( 'Specifically targets retina iPads in portrait orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'ipad_portrait_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'ipad_portrait_text_unwrapped', 'iPad (portrait)', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['disable-tablet-portrait'] == 'on'){ echo "<style>.tablet-portrait{ display:none; }</style>"; } 
    if ($instance['retina'] == 'on') { echo "<style>.retina-only{ display:none; }</style>"; }

    echo '<div class="unwrapped scientifik-ipad-portrait-widget">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
	    /* Strip tags (if needed) and update the widget settings. */
	    $instance['text'] = $new_instance['text'];
      $instance['disable-tablet-portrait'] = $new_instance['disable-tablet-portrait'];
      $instance['retina'] = $new_instance['retina'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '');
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-tablet-portrait' ); ?>"><?php _e( 'Disable Tablet (portrait) when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-tablet-portrait' ); ?>" name="<?php echo $this->get_field_name( 'disable-tablet-portrait' ); ?> " <?php if ($instance['disable-tablet-portrait'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'retina' ); ?>"><?php _e( 'Disable Retina (2x) when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'retina' ); ?>" name="<?php echo $this->get_field_name( 'retina' ); ?> " <?php if ($instance['retina'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
    	<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
  	</p>
  <?php
  }
}

/*----------------------------------------------------------------------------*
 * iPad Landscape
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "ipad_landscape_widget");
function ipad_landscape_widget(){
  register_widget( 'ipad_landscape_text_unwrapped' );
}

class ipad_landscape_text_unwrapped extends WP_Widget {
  function ipad_landscape_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'iPad in Landscape', 'description' => __( 'Specifically targets retina iPads in landscape orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'ipad_landscape_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'ipad_landscape_text_unwrapped', 'iPad (landscape)', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['disable-tablet-landscape'] == 'on'){ echo "<style>.tablet-landscape{ display:none; }</style>"; }
    if ($instance['retina'] == 'on'){ echo "<style>.retina-only{ display:none; }</style>"; }

    echo '<div class="unwrapped scientifik-ipad-landscape-widget">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
	    /* Strip tags (if needed) and update the widget settings. */
	    $instance['text'] = $new_instance['text'];
      $instance['retina'] = $new_instance['retina'];
      $instance['disable-tablet-landscape'] = $new_instance['disable-tablet-landscape'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'retina' ); ?>"><?php _e( 'Disable Retina (2x) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'retina' ); ?>" name="<?php echo $this->get_field_name( 'retina' ); ?> " <?php if ($instance['retina'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
      <label for="<?php echo $this->get_field_id( 'disable-tablet-landscape' ); ?>"><?php _e( 'Disable standard Tablet (landscape) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'disable-tablet-landscape' ); ?>" name="<?php echo $this->get_field_name( 'disable-tablet-landscape' ); ?> " <?php if ($instance['disable-tablet-landscape'] == 'on'){ echo 'checked'; }?> ></input>
    </p>
    <p>
    	<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
  	</p>
    <?php
  }
}

/*----------------------------------------------------------------------------*
 * Retina Only Devices
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "retina_only_widget");

function retina_only_widget(){
register_widget( 'retina_text_unwrapped' );
}

class retina_text_unwrapped extends WP_Widget {
  function retina_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Retina Screens', 'description' => __( 'iPhone(4s+), iPad(2+) and many more!','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'retina_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'retina_text_unwrapped', 'Retina (2x) resolution screens', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  

    if ($instance['ipad-portrait'] == 'on'){ echo "<style>.scientifik-ipad-portrait-widget{ display:none; }</style>"; }
    elseif ($instance['ipad-landscape'] == 'on'){ echo "<style>.scientifik-ipad-landscape-widget{ display:none; }</style>"; }
    elseif ($instance['iphone5'] == 'on'){ echo "<style>.iphone5-only{ display:none; }</style>"; }

    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped retina-only">'.do_shortcode($text).'</div>'; 
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
      /* Strip tags (if needed) and update the widget settings. */
      $instance['text'] = $new_instance['text'];
      $instance['ipad-portrait'] = $new_instance['ipad-portrait'];
      $instance['ipad-landscape'] = $new_instance['ipad-landscape'];
      $instance['iphone5'] = $new_instance['iphone5'];

    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>

    <p>
      <label for="<?php echo $this->get_field_id( 'ipad-portrait' ); ?>"><?php _e( 'Disable iPad (portrait) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'ipad-portrait' ); ?>" name="<?php echo $this->get_field_name( 'ipad-portrait' ); ?> " <?php if ($instance['ipad-portrait'] == 'on'){ echo 'checked'; }?> ></input>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'ipad-landscape' ); ?>"><?php _e( 'Disable iPad (landscape) widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'ipad-landscape' ); ?>" name="<?php echo $this->get_field_name( 'ipad-landscape' ); ?> " <?php if ($instance['ipad-landscape'] == 'on'){ echo 'checked'; }?> ></input>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'iphone5' ); ?>"><?php _e( 'Disable iPhone 5 widget when being displayed','bones'); ?></label><br />
      <input class="widefat" rows="20" cols="75" type="checkbox" id="<?php echo $this->get_field_id( 'iphone5' ); ?>" name="<?php echo $this->get_field_name( 'iphone5' ); ?> " <?php if ($instance['iphone5'] == 'on'){ echo 'checked'; }?> ></input>
    </p>

    <p>
      <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
      <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    </p>

    <?php
  }
}


/*----------------------------------------------------------------------------*
 * DESKTOP ONLY WIDGET
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_desktop_only_widget");
function load_desktop_only_widget(){
  register_widget( 'desktop_only_widget' );
}
class desktop_only_widget extends WP_Widget {
  function desktop_only_widget() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Desktop Only Content', 'description' => __( 'Desktop (1030px+ wide monitors)','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'desktop_only_widget' );
    /* Create the widget. */
    $this->WP_Widget( 'desktop_only_widget', 'Desktop', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped desktop-only">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
    /* Strip tags (if needed) and update the widget settings. */
    $instance['text'] = $new_instance['text'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
      <p>
        <label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
        <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
      </p>
    <?php
  }
}


/*----------------------------------------------------------------------------*
 * Large Monitor Widget 1240px / 77.500em
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "large_screen_only_widget");
function large_screen_only_widget(){
register_widget( 'large_screen_text_unwrapped' );
}

class large_screen_text_unwrapped extends WP_Widget {
  function large_screen_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Large Screen Content', 'description' => __( 'Screens 1240px+ wide','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'large_screen_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'large_screen_text_unwrapped', 'Large', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped large-screen-widget">'.do_shortcode($text).'</div>';  
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
	    /* Strip tags (if needed) and update the widget settings. */
	    $instance['text'] = $new_instance['text'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
      <p>
      	<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
        <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    	</p>
    <?php
  }
}


/*----------------------------------------------------------------------------*
 * Displays for print only
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "print_only_widget");
function print_only_widget(){
register_widget( 'print_text_unwrapped' );
}

class print_text_unwrapped extends WP_Widget {
  function print_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Print Only', 'description' => __( 'Displays on printed page only','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'print_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'print_text_unwrapped', 'Print only', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped print-query">'.do_shortcode($text).'</div>';
  }
  function update( $new_instance, $old_instance ) {
    $instance = $old_instance;
	    /* Strip tags (if needed) and update the widget settings. */
	    $instance['text'] = $new_instance['text'];
    return $instance;
  }
  function form( $instance ) {
    /* Set up some default widget settings. */
    $defaults = array( 'text' => '' );
    $instance = wp_parse_args( (array) $instance, $defaults ); ?>
      <p>
      	<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
        <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    	</p>
    <?php
  }
}