$(function(){

    var userName = window.location.hash.substr(1); //Get the section after hash tag from URL, e.g. index.html#Arik return 'Arik'
    if(userName === '') {
        alert('No selected');
    } else {

      $.get('/final-project-fullstack/php/myuser.php?user=' + userName, function(data) { //This code makes an HTTP request to /arik and puts the data in the 'data' variable

          console.log('Got data', data); //We just print whatever we got from the server

          //Basic info
          $('#intro header h1').text(data.basicInfo.firstName); //Let's use the data from server and pub it on page!
          $('#intro header h2').text(data.basicInfo.lastName);
          $('#intro header').append('<h3>'+data.basicInfo.title+'</h3>')

          $('#intro-me').append('<li>'+data.phone+'</li>')
          $('#intro-me').append('<li>'+data.area+'</li>')
          $('#intro-me').append('<li>'+data.email+'</li>')
		  
		  //aboutme
		  $('#about p').text(data.about);
		  
		  
          //Social networks
          $ul = $('<ul>', {
              'id': 'social-networks'
          });

          for(i in data.socialNetworks) { //We also got the social networks from the server, which is acceable from data.socialNetworks.
              var $templi = $('<li>');

              $templi.append('<i class="fa fa-'+data.socialNetworks[i].iconName+'"></i>');
              $templi.append('<a href="'+data.socialNetworks[i].link+'">'+data.socialNetworks[i].name+'</a>');

              $templi.click(function(){
                  alert($(this).children('a').text() + ' clicked!');
              });

              //Add the new li element to the ul
              $ul.append($templi);
          }

          $ul.insertAfter('#intro');

		
      });
	  
	  		$.get('/final-project-fullstack/php/proskills.php?user=' + userName, function(data) { //This code makes an HTTP request to /arik and puts the data in the 'data' variable
			
          console.log('Got data', data); //We just print whatever we got from the server
		  for ($x = 0; $x <= data.length; $x++) {
			$('#skillname').append('<li>'+data[$x].skillname+'</li>');
			$('#skillvalue ').append('<li><progress max=100 value='+data[$x].skillvalue+'></progress></li>');
			}
		});
    }

});
