<?php
include('bin/init.php');
//include('lib/dor.php');
$username ="1";
$pass ="1";

system('clear');
echo "login dulu mas\n";
echo "username :";
$user = trim(fgets(STDIN));
echo "password :";
$passx = trim(fgets(STDIN));
if ( $user == $username && $passx == $pass)
{
	system('clear');
	echo "login berhasil \n";
	home();


	//echo " [1]. tembak (nomer baru!)\n";
	//echo " [2]. claim\n";





} else {
	echo "login gagal!\n";

	};





function home() {
  global $jabodetabek;
	system('clear');
	echo " [1]. tembak (nomer baru!)\n";
	echo " [2]. login (claim )\n";
	echo " [3]. cek nomor\n";
	echo " [4]. NIK & KK\n";
	echo " [x]. exit\n\n";
	echo " [+] masukan piilihan kamu : ";




	$pilih = trim(fgets(STDIN));
	if ( $pilih == "1" )
	  {
      //Untuk register
      echo "It's Register Way\n";
      echo "Input 62 For ID and 1 For US Phone Number\n";
      echo "Enter Number: ";
      $nope = trim(fgets(STDIN));
      $register = register($nope);
      if ($register == false)
      	{
      	echo "Failed to Get OTP, Use Unregistered Number!\n";
      	}
        else
      	{
      	echo "Enter Your OTP: ";
      	// echo "Enter Number: ";
      	$otp = trim(fgets(STDIN));
      	$verif = verif($otp, $register);
      	if ($verif == false)
      		{
      		echo "Failed to Registering Your Number!\n";
      		}
      	  else
      		{
            //untul claim
            echo "====== Pilih Lokasi Anda ======";
            echo " [1]. jabodetabek\n";
          	echo " [2]. Medan\n";
          	echo " [3]. Surabaya\n";
          	echo " [4]. ALL\n";
          	echo " [0]. home\n";



            $pilih = trim(fgets(STDIN));
            if ( $pilih == "1" ):
              echo "Ready to Claim jabodetabek\n";
          		$claim = claim($verif, $jabodetabek);
          		if ($claim == false)
          			{
          			echo "Failed to Claim Voucher, Try to Claim Manually\n";
          			}
          		  else
          			{
          			echo $claim . "\n";
          			}
            elseif ( $pilih == "2" ):
                echo "Ready to Claim jabodetabek\n";
                $claim = claim($verif, $medan);
                if ($claim == false)
                  {
                  echo "Failed to Claim Voucher, Try to Claim Manually\n";
                  }
                  else
                  {
                  echo $claim . "\n";
                  }
              elseif ( $pilih == "3" ):
                echo "Ready to Claim jabodetabek\n";
                $claim = claim($verif, $surabaya);
                if ($claim == false)
                  {
                  echo "Failed to Claim Voucher, Try to Claim Manually\n";
                  }
                  else
                  {
                  echo $claim . "\n";
                  }
                elseif ( $pilih == "2" ):
                  echo "string";
                  elseif ( $pilih == "2" ):
                    echo "string";
            endif;
      		echo "Ready to Claim\n";
      		$claim = claim($verif);
      		if ($claim == false)
      			{
      			echo "Failed to Claim Voucher, Try to Claim Manually\n";
      			}
      		  else
      			{
      			echo $claim . "\n";
      			}
      		}
      	}
		//tembak();
		} else {
			if ( $pilih == "2" )
	  {
      // Untuk Login
      echo "It's Login Way\n";
      echo "Input 62 For ID and 1 For US Phone Number\n";
      echo "Enter Number: ";
      $nope = trim(fgets(STDIN));
      $login = login($nope);
      if ($login == false)
      	{
      	echo "Failed to Get OTP!\n";
      	}
        else
      	{
      	echo "Enter Your OTP: ";
      	// echo "Enter Number: ";
      	$otp = trim(fgets(STDIN));
      	$verif = veriflogin($otp, $login);
      	if ($verif == false)
      		{
      		echo "Failed to Login with Your Number!\n";
      		}
      	  else
      		{

            echo "====== Pilih Lokasi Anda ======";
            echo " [1]. jabodetabek\n";
          	echo " [2]. Medan\n";
          	echo " [3]. Surabaya\n";
          	echo " [4]. ALL\n";
          	echo " [0]. home\n";
            echo " [+] masukan piilihan kamu : ";



            $pilih = trim(fgets(STDIN));
            if ( $pilih == "1" ):
              echo "Ready to Claim jabodetabek\n";
          		$claim = claim($verif, $jabodetabek);
          		if ($claim == false)
          			{
          			echo "Failed to Claim Voucher, Try to Claim Manually\n";
          			}
          		  else
          			{
          			echo $claim . "\n";
          			}
            elseif ( $pilih == "2" ):
                echo "Ready to Claim jabodetabek\n";
                $claim = claim($verif, $medan);
                if ($claim == false)
                  {
                  echo "Failed to Claim Voucher, Try to Claim Manually\n";
                  }
                  else
                  {
                  echo $claim . "\n";
                  }
              elseif ( $pilih == "3" ):
                echo "Ready to Claim jabodetabek\n";
                $claim = claim($verif, $surabaya);
                if ($claim == false)
                  {
                  echo "Failed to Claim Voucher, Try to Claim Manually\n";
                  }
                  else
                  {
                  echo $claim . "\n";
                  }
                elseif ( $pilih == "2" ):
                  echo "string";
                  elseif ( $pilih == "2" ):
                    echo "string";
            endif;


            // if ($pilih == 1 ){
            //
            //
            //   $voc = ["voc1", "voc2"];
            //   echo "Ready to Claim jabodetabek\n";
          	// 	$claim = claim($verif, $voc);
          	// 	if ($claim == false)
          	// 		{
          	// 		echo "Failed to Claim Voucher, Try to Claim Manually\n";
          	// 		}
          	// 	  else
          	// 		{
          	// 		echo $claim . "\n";
          	// 		}
            // } else {
            //   if ($pilih == 2 ){
            //
            //
            //     $voc = ["voc1", "voc2"];
            //     echo "Ready to Claim medan\n";
            // 		$claim = claim($verif, $voc);
            // 		if ($claim == false)
            // 			{
            // 			echo "Failed to Claim Voucher, Try to Claim Manually\n";
            // 			}
            // 		  else
            // 			{
            // 			echo $claim . "\n";
            // 			}
            //     }
            // }



      		// echo "Ready to Claim\n";
      		// $claim = claim($verif);
      		// if ($claim == false)
      		// 	{
      		// 	echo "Failed to Claim Voucher, Try to Claim Manually\n";
      		// 	}
      		//   else
      		// 	{
      		// 	echo $claim . "\n";
      		// 	}




      		}
      	}
		      //NIKKK();
		} else {
			if ( $pilih == "3" ) {
				ceker();
			}
		}


			}
	};

function tembak() {
	system('clear');
	echo " [1]. jabodetabek\n";
	echo " [2]. Medan\n";
	echo " [3]. Surabaya\n";
	echo " [4]. ALL\n";
	echo " [0]. home\n";

	$pilih = trim(fgets(STDIN));
	if ( $pilih == "0" )
	  {

		home();
		}

	};




function claims() {
	system('clear');
	echo " [1]. jabodetabek\n";
	echo " [2]. Medan\n";
	echo " [3]. Surabaya\n";
	echo " [4]. ALL\n";
	echo " [0]. home\n";

	$pilih = trim(fgets(STDIN));
	if ( $pilih == "0" )
	  {

		home();
		}
	}


	function cek() {


		}


		function NIKKK() {
	system('clear');
	echo " [1]. generate ( buat NIK & KK)\n";
	echo " [2]. cek (NIK & KK)\n";
	echo " [0]. home\n";








	if ( $pilih == "1" )
	  {

		generate();
		} else {
			if ($pilih == "2" )
			   {


				} else {
					if ( $pilih == "0" )
					    {
						home();
						}


					}



			}





	};





		function generatekk() {


			}

?>
