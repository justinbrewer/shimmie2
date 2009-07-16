<?php
class IcoHandlerTest extends ShimmieWebTestCase {
	function testPixelHander() {
		$this->log_in_as_user();
		$image_id = $this->post_image("favicon.ico", "shimmie favicon");
		$this->assertResponse(302);
		$this->log_out();

		$this->log_in_as_admin();
		$this->delete_image($image_id);
		$this->log_out();
	}
}
?>