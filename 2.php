	function isAccUsername($username) {
          return preg_match('/^[a-z]{4,10}$/',$username) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAccUsername("arkademy")) {
         echo "Username Is Valid" ;
     } else {
         echo "Username must 5 character and lowercase" ;
     }
	 
	 function isAccPass($password) {
          return preg_match('/^[0-9@&A-Z]{7,10}$/',$password) ;
     }
   
     // Cara menggunakan fungsi di atas
     if (isAccPass("234&Agan")) {
         echo "pasword Is Valid" ;
         //29@PASS
     } else {
         echo "pasword invalid" ;
         //234&Agan
     }