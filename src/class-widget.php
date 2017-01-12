<?php

namespace Baardbaard\Beacon;

use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

class Widget {

	private $template_engine;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->template_engine = new Mustache_Engine( [
			'loader' => new Mustache_Loader_FilesystemLoader( BEACON_PATH . '/views' ),
			'partials_loader' => new Mustache_Loader_FilesystemLoader( BEACON_PATH . '/views/partials' ),
		] );

		add_action( 'wp_dashboard_setup', [ $this, 'add_widget' ] );
	}

	/**
	 * Add widget to WordPress dashboard.
	 */
	public function add_widget() {
		wp_add_dashboard_widget(
			__( 'Beacon', 'beacon'),
			__( 'Contact', 'beacon' ),
			function() {
				/* echo "Hello World, I'm a great Dashboard Widget."; */
				echo $this->template_engine->render( 'widget', $this->get_user() );
			}
		);
	}

	/**
	 * Get user info.
	 *
	 * @return array
	 */
	public function get_user() {
		return [
			'name' => [
				'label' => __( 'Name', 'beacon' ),
				'text' => 'Stef Thoen',
			],
			'phone' => [
				'label' => __( 'Phone', 'beacon' ),
				'text' => '+33 6 81 21 65 59',
			],
			'email' => [
				'label' => __( 'Email', 'beacon' ),
				'text' => 'stef@baardbaard.nl',
			],
			'website' => [
				'label' => __( 'Website', 'beacon' ),
				'text' => 'www.baardbaard.nl',
			],
			'movie' => [
				'width' => 560,
				'height' => 315,
				'src' => 'https://www.youtube.com/embed/WUdWWX2pJ_M',
			],
		];
	}

}
