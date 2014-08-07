<?php

namespace Quorum\Installer;

class QuorumInstaller extends BaseInstaller {

	protected $locations = array(
		'js' => 'public/js/vendor/{$vendor}/{$name}/',
	);

}
