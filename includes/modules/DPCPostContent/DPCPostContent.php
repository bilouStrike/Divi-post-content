<?php

class DPC_PostContent extends ET_Builder_Module {

	public $slug       = 'dpc_post_content';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Bilal dif',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'DPC Post Content', 'dpc-divi-post-content' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'dpc-divi-post-content' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'dpc-divi-post-content' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		$content = do_shortcode( '[gtnw-post-content]' ); ;
		$output = sprintf(
			'%1$s',
			$content
		);
		return $output;
	}
}

new DPC_PostContent;
