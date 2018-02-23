<?php
/**
 * Message field class
 *
 * @package notification/bbpress
 */

namespace underDEV\Notification\bbPress\Utils\Settings\CoreFields;

/**
 * Message class
 */
class Message {

	/**
	 * Message field
     *
	 * @param  Field $field Field instance.
	 * @return void
	 */
	public function input( $field ) {

		if ( $field->addon( 'code' ) ) {
			echo '<pre><code>';
		}

		echo $field->addon( 'message' );

		if ( $field->addon( 'code' ) ) {
			echo '</code></pre>';
		}

	}

	/**
	 * Sanitize input value
     *
	 * @param  string $value Saved value.
	 * @return string        Sanitized text
	 */
	public function sanitize( $value ) {
		return $value;
	}

}
