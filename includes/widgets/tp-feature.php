<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor Currency Widget.
 *
 * Elementor widget that uses the currency control.
 *
 * @since 1.0.0
 */
class Elementor_Feature_Widget extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve currency widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'feature';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve currency widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Noxia Feature', 'noxia' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve currency widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-editor-list-ol';
	}

	/**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://developers.elementor.com/docs/widgets/';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the currency widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'noxia-category' ];
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the currency widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'feature', 'features' ];
	}

	/**
	 * Register currency widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'TP Feature', 'noxia' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'icon',
			[
				'label' => esc_html__( 'Icon', 'textdomain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-circle',
					'library' => 'fa-solid',
				],
				'recommended' => [
					'fa-solid' => [
						'circle',
						'dot-circle',
						'square-full',
					],
					'fa-regular' => [
						'circle',
						'dot-circle',
						'square-full',
					],
				],
			]
		);

        $this->add_control(
			'tp_title',
			[
				'label' => esc_html__( 'Title', 'noxia' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'One-click Installation', 'noxia' ),
				'placeholder' => esc_html__( 'Title is Here', 'noxia' ),
			]
		);
		$this->add_control(
			'tp_description',
			['label' => esc_html__( 'Description', 'noxia' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'rows' => 10,
            'default' => esc_html__( ' Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit,', 'noxia' ),
            'placeholder' => esc_html__( ' Default description', 'noxia' ),
			]
		);



		$this->end_controls_section();

	}

	/**
	 * Render currency widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
         
        ?>
                  <div class="tp-feature__item theme-bg mb-30 wow fadeInRight">
                     <div class="tp-feature__icon">				
                        <span> <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?> </span>
                     </div>
                     <div class="tp-feature__content">
                        <h3 class="tp-feature__title mb-25"><?php echo $settings['tp_title']; ?></h3>
                        <p>
                        <?php echo $settings['tp_description']; ?>
                        </p>
                     </div>
                  </div>

<?php
		//echo $settings['price_currency'] . ' ' . $settings['price'];
	}

    protected function content_template() {

        ?>

            <div class="tp-feature__item theme-bg mb-30 wow fadeInRight">
                     <div class="tp-feature__icon">
					  <# var iconHTML = elementor.helpers.renderIcon( view, settings.selected_icon, { 'aria-hidden': true }, 'i' , 'object' );#>					
                       <span>{{{ iconHTML.value }}}</span>
                     </div>
                     <div class="tp-feature__content">
                        <h3 class="tp-feature__title mb-25">{{{ settings.tp_title }}}</h3>
                        <p>
                        {{{ settings.tp_description }}}
                        </p>
                     </div>
            </div>  

        <?php


    }




}
