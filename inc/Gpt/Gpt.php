<?php
/**
 * Class for gpt operations.
 *
 * @package wp-plugin
 */

namespace AiPosts\Gpt;

use Orhanerday\OpenAi\OpenAi;

class Gpt {
	public function __construct() {
	}
	public function register(): void {
		add_action( 'wp_ajax_get_openai_data', array( $this, 'get_openai_generated_data' ) );
	}
	public function get_openai_generated_data(): void {

		$formData         = $_POST;
		$request_keywords = array_filter( $formData['keywords'], function ($item) {
			return $item ?? '';
		} );

		if ( ! empty( $request_keywords ) ) {
			$open_ai_key = ap_option( 'open_ai_key' );
			$open_ai     = new OpenAi( $open_ai_key );
			$questions   = $request_keywords;

			$complete = $open_ai->completion( [ 
				'model' => 'text-davinci-003',
				'prompt' => $questions,
				'temperature' => 0.5,
				'max_tokens' => 1000,
				'frequency_penalty' => 0,
				'presence_penalty' => 0.6,
			] );


			$response = array();
			foreach ( json_decode( $complete, true )['choices'] as $key => $result ) {
				$response[] = array(
					'q' => $questions[ $key ],
					'a' => $result['text']
				);
			}
			wp_send_json( $response );


			// wp_send_json(json_decode($complete, true));
		} else {
			wp_send_json( array(), true );
		}

	}
}
