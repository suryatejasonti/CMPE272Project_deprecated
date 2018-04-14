$(function () {

    $('#sign-up').on('click', function (e) {

        $('#error').html("");
        console.log('sign-up..');
      e.preventDefault();
 
      
         $.post('inc/sign/sign.php', $('#signup').serialize()+ "&action=signup", function(data){
         
        // show the response
        
                if (data == "saved") {
                    console.log(data);
                    var classs = $('#validuser').attr('class');
                    classs = classs.replace('dropdown-toggle','');
                    $('#validuser').attr('class', classs);
                    
                    $('#validuser').html($('#username').val());
                    
                    $('#sign').remove();
                } else {
                    $('#error').html(data);
                }
                
         
    }).fail(function() {
     
         $('#error').html('Please try after sometime.');
         
    });
    });
    
    $('#sign-in').on('click', function (e) {

        console.log('sign-in..');
      e.preventDefault();

            $('#error').html("");

         $.post('inc/sign/sign.php', $('#signup').serialize() + "&action=signin", function(data){
         
            if (data == "valid") {
                    console.log(data);
                    //var classs = $('#validuser').attr('class');
                    //classs = classs.replace('dropdown-toggle','');
                    //$('#validuser').attr('class', classs);
                    
                    $('#validuser').html($('#username').val());
                    
                    $('#sign').attr("class", "dropdown-menu");
                    $('#validuser').attr("aria-expanded","false");

                    $('#sign').html('<form id="signup"><input class="btn btn-primary btn-block" type="button" id="sign-out" value="Sign out"><label id="error" style="text-align:center;margin-top:5px"></label></form>');                   
                    
            } else {
                $('#error').html('Bad Credentials..');
            }
        
            $.ajax({
                url: 'js/sign.js'
            });            
         
    }).fail(function() {
     
        // just in case posting your form failed
        $('#error').html('Please try after sometime.');
         
    });
    });

    $('#sign-out').on('click', function (e) {

        console.log('sign-out..');
      e.preventDefault();

            $('#error').html("");
     
      
         $.post('inc/sign/sign.php', $('#signup').serialize() + "&action=signout", function(data){
            
            if (data == "success") {
                    console.log(data);
                    //var classs = $('#validuser').attr('class');
                    //classs = classs.replace('dropdown-toggle','');
                    //$('#validuser').attr('class', classs);
                    
                    $('#validuser').html('Sign in');
                    
                    $('#sign').attr("class", "dropdown-menu");
                    $('#validuser').attr("aria-expanded","false");
                    
                    $('#sign').html('<form id="signup"><input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username"><input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password"><input class="btn btn-primary btn-block" type="button" id="sign-up" value="Sign Up"><input class="btn btn-primary btn-block" type="button" id="sign-in" value="Sign In"><label id="error" style="text-align:center;margin-top:5px"></label></form>');                       
                    
            } else {
                $('#error').html('Sign out unsuccessful');
            }
            $.ajax({
                url: 'js/sign.js'
            });
                
         
    }).fail(function() {
     
        // just in case posting your form failed
        $('#error').html('Please try after sometime.');
         
    });
    });

    return false;

  });