<?php 

	function mostarTiempo() {
		escribirTiempo();
	}

	function escribirTiempo() {
		include('nusoap.php');
		date_default_timezone_set('Europe/Madrid');
		$client = new nusoap_client('http://www.webservicex.net/globalweather.asmx?WSDL','wsdl');
		$err = $client->getError();

		if ($err) {
			echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
		}

		$param = array('CityName'=>'Valladolid','CountryName'=>'Spain');
		$result = $client->call('GetWeather', $param);

		if ($client->fault) {
			echo '<h2>Fallo al obtener</h2>';
		} else {
			// Check for errors
			$err = $client->getError();

			if ($err) {
				// Display the error
				echo '<h2>Error</h2><pre>'.$err.'</pre>';
			} else {
                foreach($result as $key=>$r)
                {
                    //porque viene codificado en utf_16 y para pasarlo a utf_8
                   $datos  = preg_replace('/(<\?xml[^?]+?)utf-16/i', '$1utf-8',$r);
               	}
                $datos_xml = new SimpleXMLElement($datos);
                //file_put_contents("tiempo.xml", $datos_xml);
                echo '<ul>';
                echo '	<li><a href="" class="icon fa-building-o"> &nbsp; Valladolid</a></li>';
                echo '	<li><a href="" class="icon fa-plus"> &nbsp; Máxima : '.$datos_xml->Temperature.'</a></li>';
                echo '	<li><a href="" class="icon fa-minus"> &nbsp; Mínima : '.$datos_xml->DewPoint.'</a></li>';
                echo '</ul>';
			}
		}

	}
 ?>