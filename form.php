


<div class="sectionpadding ProzaLibre">
		<h2 class="textcenter-green"><i class="fas fa-paper-plane"></i>Parašykite laišką mums:</h2>
		<form class="forma" method="post">
			<div class="forma2">
				<label>Vardas: </label>
				<input class="formaBG" type="text" name="vardas" placeholder="Įveskite savo vardą" value="">
			</div>
			<div class="forma2">
				<label>El.Paštas: </label>
				<input class="formaBG" type="text" name="pastas" placeholder="Įveskite savo el.paštą" value="">
			</div>
			<div class="forma2">
				<label>Žinutė: </label>
				<textarea class="formaBG" name="zinute" placeholder="Jūsų žinutė"></textarea>
			</div>
			<input class="submit btnpirkti" type="submit" name="mygt" value="išsiųsti">
		</form>
			<?php  if(isset($_POST['mygt'])){
				$to = 'sabakas7@gmail.com';
			$subject = 'laiskutis';
			$message = $_POST['zinute'].$_POST['vardas'];
			$headers = 'From: '.$_POST['pastas'] . "\r\n". 
			'Rep: '.$_POST['pastas']. "\r\n". 
			'Mailer: '. phpversion();
			if(isset($_POST['vardas']) &&
				isset($_POST['pastas']) &&
				isset($_POST['zinute'])){
		 
				mail($to, $subject, $message, $headers);
			}
		}
		?>
	</div>