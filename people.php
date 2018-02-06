	<?php 

	require_once('pass.php');

	class people extends pass
	{
		
		function __construct($name, $weidht, $legs)
		{
			$this->name = $name;
			$this->weidht = $weidht;
			$this->legs = $legs;
		}
	}

	?>