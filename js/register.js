$(function(){
    
    $('#registerBtn').click(function()
                           {
        
        // Add the basic info into the users table
        var id = document.getElementById('id').value;
        var name = document.getElementById('name').value;
        var lastName = document.getElementById('last_name').value;
        var title =document.getElementById('title').value;
        var phone =
        document.getElementById('phone').value;
        var address = 
        document.getElementById('address').value;
        var email = 
        document.getElementById('email').value;
        var aboutMe = 
        document.getElementById('about_me').value;
        
        				    	
        $.get('/final-project-fullstack/php/addUser.php?id='+id+'&name='+name+'&lastName='+lastName+'&title='+title+'&phone='+phone+'&area='+address+'&email='+email+'&aboutMe='+aboutMe);        
        
        // Add Experiance to the Experiance table
        for (i = 0; i <3; i++) 
            {
                var mainTitle = document.getElementById('title['+i+']');
                
                 var subTitle = document.getElementById('sub_title['+i+']');
                
                 var date = document.getElementById('work_dates['+i+']');
                
                var paragraph = document.getElementById('description['+i+']');
                
                 $.get('/final-project-fullstack/php/addExperience.php?userid='+id+'&mainTitle='+mainTitle+'&subTitle='+subTitle+'&date='+date+'&paragraph='+paragraph);
                
            }
        
        
    })
    
});

  