<?php 

/*----------------------------------------------------------------------------*
 * DESKTOP ONLY WIDGET
 *----------------------------------------------------------------------------*/

add_action("widgets_init", "load_desktop_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_desktop_only_widget(){
register_widget( 'desktop_only_widget' );
}

//UNWRAPPED TEXT
class desktop_only_widget extends WP_Widget {
  function desktop_only_widget() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Desktop Only Content', 'description' => __( 'A blank canvas for Desktop only content','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'desktop_only_widget' );
    /* Create the widget. */
    $this->WP_Widget( 'desktop_only_widget', 'Desktop Only Content', $widget_ops, $control_ops );
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
 * PHABLET SCREEN SIZE ONLY WIDGET
 *----------------------------------------------------------------------------*/
// on widget init call the function to begin
add_action("widgets_init", "load_phablet_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_phablet_only_widget(){
register_widget( 'phablet_text_unwrapped' );
}

//UNWRAPPED TEXT
class phablet_text_unwrapped extends WP_Widget {
  function phablet_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => '\"Phablet\" Only Content', 'description' => __( 'For large mobile device screens 481px+','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'phablet_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'phablet_text_unwrapped', 'Phablet Sized Screens Only', $widget_ops, $control_ops );
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
 * TABLET SCREEN SIZE ONLY WIDGET
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "load_tablet_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_tablet_only_widget(){
register_widget( 'tablet_only_widget' );
}

//UNWRAPPED TEXT
class tablet_only_widget extends WP_Widget {
  function tablet_only_widget() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Tablet Only Content', 'description' => __( 'Tablet sized screens 768px to 1030px','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'tablet_only_widget' );
    /* Create the widget. */
    $this->WP_Widget( 'tablet_only_widget', 'Tablet Only Content', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped tablet-only">'.do_shortcode($text).'</div>';  
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
 * MOBILE ONLY WIDGET
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "load_mobile_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_mobile_only_widget(){
register_widget( 'mobile_text_unwrapped' );
}

//UNWRAPPED TEXT
class mobile_text_unwrapped extends WP_Widget {
  function mobile_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Only Content', 'description' => __( 'A blank canvas for mobile only content','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'mobile_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'mobile_text_unwrapped', 'Mobile Only Content', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped mobile-only">'.do_shortcode($text).'</div>';  
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
 * MOBILE LANDSCAPE ONLY WIDGET
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "load_mobile_landscape_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_mobile_landscape_only_widget(){
register_widget( 'mobile_landscape_text_unwrapped' );
}

//UNWRAPPED TEXT
class mobile_landscape_text_unwrapped extends WP_Widget {
  function mobile_landscape_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Landscape Only Content', 'description' => __( 'Displays for mobile landscape screens','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'mobile_landscape_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'mobile_landscape_text_unwrapped', 'Mobile Landscape Only Content', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped mobile-landscape-only">'.do_shortcode($text).'</div>';  
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
 * iPhone 5 or iPod Touch 5th generation 
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "load_iphone5_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function load_iphone5_only_widget(){
register_widget( 'iphone5_text_unwrapped' );
}

//UNWRAPPED TEXT
class iphone5_text_unwrapped extends WP_Widget {
  function iphone5_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Mobile Landscape Only Content', 'description' => __( 'Displays for mobile landscape screens','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'iphone5_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'iphone5_text_unwrapped', 'iPhone 5 or iPod Touch 5th gen only', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped iphone5-only">'.do_shortcode($text).'</div>';  
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
 * Retina Only Devices
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "retina_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function retina_only_widget(){
register_widget( 'retina_text_unwrapped' );
}

//UNWRAPPED TEXT
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
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped retina-only">'.do_shortcode($text).'</div>';  
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
 * iPad Portrait
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "ipad_portrait_widget");

// the function called by the hook "add_action" which registers your widget name.
function ipad_portrait_widget(){
register_widget( 'ipad_portrait_text_unwrapped' );
}

//UNWRAPPED TEXT
class ipad_portrait_text_unwrapped extends WP_Widget {
  function ipad_portrait_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'iPad in Portrait', 'description' => __( 'Specifically targets retina iPads in portrait orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'ipad_portrait_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'ipad_portrait_text_unwrapped', 'iPad in Portrait only', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped scientifik-ipad-portrait-widget">'.do_shortcode($text).'</div>';  
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
 * iPad Landscape
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "ipad_landscape_widget");

// the function called by the hook "add_action" which registers your widget name.
function ipad_landscape_widget(){
register_widget( 'ipad_landscape_text_unwrapped' );
}

//UNWRAPPED TEXT
class ipad_landscape_text_unwrapped extends WP_Widget {
  function ipad_landscape_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'iPad in Landscape', 'description' => __( 'Specifically targets retina iPads in landscape orientation','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'ipad_landscape_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'ipad_landscape_text_unwrapped', 'iPad in Landscape only', $widget_ops, $control_ops );
  } 
  function widget( $args, $instance ) {
    extract( $args );
    $text = $instance['text'];  
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped scientifik-ipad-landscape-widget">'.do_shortcode($text).'</div>';  
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

// on widget init call the function to begin
add_action("widgets_init", "large_screen_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function large_screen_only_widget(){
register_widget( 'large_screen_text_unwrapped' );
}

//UNWRAPPED TEXT
class large_screen_text_unwrapped extends WP_Widget {
  function large_screen_text_unwrapped() {
    /* Widget settings. */
    $widget_ops = array( 'classname' => 'Large Screen Content', 'description' => __( 'Monitors 1240px / 77.500em wide','bones') );
    /* Widget control settings. */
    $control_ops = array( 'width' => 400, 'height' => 350, 'id_base' => 'large_screen_text_unwrapped' );
    /* Create the widget. */
    $this->WP_Widget( 'large_screen_text_unwrapped', 'Large Screen Content', $widget_ops, $control_ops );
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
 * tablet (landscape) screens 768px wide - max 1024px
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "tablet_landscape_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function tablet_landscape_only_widget(){
register_widget( 'tablet_landscape_text_unwrapped' );
}

//UNWRAPPED TEXT
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
      	<label for="<?php echo $this->get_field_id( 'text' ); ?>"><?php _e( 'Text/HTML','bones'); ?></label><br />
        <textarea class="widefat" rows="20" cols="75" id="<?php echo $this->get_field_id( 'text' ); ?>" name="<?php echo $this->get_field_name( 'text' ); ?>"><?php echo $instance['text']; ?></textarea>
    	</p>
    <?php
  }
}




/*----------------------------------------------------------------------------*
 * tablet (portrait) screens 768px wide - max 1023px
 *----------------------------------------------------------------------------*/

// on widget init call the function to begin
add_action("widgets_init", "tablet_portrait_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function tablet_portrait_only_widget(){
register_widget( 'tablet_portrait_text_unwrapped' );
}

//UNWRAPPED TEXT
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
    /* show the widget content without any headers or wrappers */
    echo '<div class="unwrapped tablet-portrait">'.do_shortcode($text).'</div>';
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

// on widget init call the function to begin
add_action("widgets_init", "print_only_widget");

// the function called by the hook "add_action" which registers your widget name.
function print_only_widget(){
register_widget( 'print_text_unwrapped' );
}

//UNWRAPPED TEXT
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