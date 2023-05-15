<?php
	
	if(isset($_POST['ok'])){

		require_once('./Clases/comida.class.php');

		//Saving information from the Form

		$oni = $_POST['oni'];
		$maki = $_POST['maki'];
		$rmn = $_POST['rmn'];
		$yaki = $_POST['yaki'];
		$kum = $_POST['kum'];
		//Drinks
		$mat = $_POST['mat'];
		$fnt = $_POST['fnt'];
		$mune = $_POST['mune'];
		$ske = $_POST['ske'];
		$shu = $_POST['shu'];



		 //creando el objeto comi1(isntanciando)
		$comi1 = new Comida($oni,$maki,$rmn,$yaki,$kum,$mat,$fnt,$mune,$ske,$shu);

		//from object to json
		$comidajson = json_encode($comi1, JSON_PRETTY_PRINT);

		//Capturar informacion en un archivo
		$archivo = __DIR__ . "/comidajson";
		if (!file_exists($archivo)){
			$file = fopen($archivo, "w");
			fwrite($file, "[\n");
		}
		else{
			$file = fopen($archivo, "c");
			fseek($file, -2, SEEK_END);
				fwrite($file, ",\n");
		}

		fwrite($file,$comidajson);
		fwrite($file, "\n]");
		fclose($file);

		echo ("The Food has been register successfully");
		header("refresh:5; url='index.html'");
	}
	else{
		echo "Direct Access is not permitted in this page";
		header("refresh:5; url='index.html'");
	}
?>