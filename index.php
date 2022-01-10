<!DOCTYPE html>
<html lang="en">
<head>
	<title>ค้นหาทะเบียนรถ กฟต.1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="get" action="#">
				<span class="contact100-form-title">
					ค้นหาทะเบียนรถ กฟต.1
				</span>

				<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="search" placeholder="หมายเลขทะเบียนรถ">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<input type="submit" class="contact100-form-btn" value="ค้นหา">
				</div>
			</form>
	<?php
            require __DIR__ . '/vendor/autoload.php';
            //Reading data from spreadsheet.
            $client = new \Google_Client();
            $client->setApplicationName('Google Sheets and PHP');
            $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
            $client->setAccessType('offline');
            $client->setAuthConfig(__DIR__ . '/credentials.json');
            $service = new Google_Service_Sheets($client);
            $spreadsheetId = "18YfUWVh4UWmD_xbNOy1FaT-mlnjjzgo8ov-dfeIsCWE"; //It is present in your URL
            $get_range = "A1:K";
            //Request to get data from spreadsheet.
            $response = $service->spreadsheets_values->get($spreadsheetId, $get_range);
            $values = $response->getValues();
            if(!empty($_GET)){
                foreach($values AS $key){
                    //print_r($key[7]);
                    //print_r(strpos($key[7], $search));
					$count = 0;
                    if(strpos($key[7], $_GET['search'])){
						if(strpos($key[10], "ไม่") === FALSE){
                        	echo "<center style='padding-top:10px;font-size:25px'><b>".$key[2]."<br>(".$key[7].") <a href='tel:".$key[3]."'><i class='fa fa-phone fa-2x' style='color:#83FF33;padding-left15px'></i></a><hr style='margin-top:10px'></b></center>";
						}else{
							$get_range = "emp!A2:F";
							$emp_sheet = $service->spreadsheets_values->get($spreadsheetId, $get_range);
							foreach($emp_sheet->getValues() AS $emp){
								if($emp[0] == $key[1]){
									$department = $emp[5];
								}
							}
							echo "<center style='padding-top:10px;font-size:25px'><b>".$key[2]."<br>(".$key[7].")<br>" .$department."<br>เบอร์ภายใน:".$key[5]."<hr style='margin-top:10px'></b></center>";
						}
                    }
                }
            }
            ?>

		</div>

	</div>


</body>
</html>
