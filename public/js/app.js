function login(){
   FB.login(function(response) {
   if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me',{fields:'name,email'}, function(response) {
       console.log('Good to see you, ' + response.name + '. ' + response.email);
       console.log(response);
       
       $.ajax({
          method: "POST",
          url: "validateuser.php",
          data: {data: response},
          success: function(data){
             console.log(data);
             location.reload();
          },
          error: function(reply){
            console.log(reply);
            console.log("Error");
          }

       });
     });     
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 },{scope: 'email'});
}

