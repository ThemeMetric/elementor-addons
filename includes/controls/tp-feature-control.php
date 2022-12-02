<?php
/**
 * Elementor currency control.
 *
 * A control for displaying a select field with the ability to choose currencies.
 *
 * @since 1.0.0
 */
class Elementor_tp_feature_Control extends \Elementor\Base_Data_Control {

	/**
	 * Get currency control type.
	 *
	 * Retrieve the control type, in this case `currency`.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Control type.
	 */
	public function get_type() {
		return 'feature';
	}


	

	/**
	 * Render currency control output in the editor.
	 *
	 * Used to generate the control HTML in the editor using Underscore JS
	 * template. The variables for the class are available using `data` JS
	 * object.
	 *
	 * @since 1.0.0
	 * @access public
	 */
	public function content_template() {
		$control_uid = $this->get_control_uid();
		?>

        <div class="tp-feature__item theme-bg mb-30 wow fadeInRight">
                     <div class="tp-feature__icon">
                        <span><i class="flaticon-site-map"></i></span>
                     </div>
                     <div class="tp-feature__content">
                     <# if ( data.tp_title ) { #>
                        <h3 class="tp-feature__title mb-25">{{{ data.tp_title }}} </h3>
                        <# } #>

                        <# if ( data.tp_description ) { #>
                        <p>
                        {{{ data.tp_description }}}
                        
                        </p>
                        <# } #>
                     </div>
                  </div>



		<?php
	}

}
