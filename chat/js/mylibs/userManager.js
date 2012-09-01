/**
 * @author truonghinh
 */
var instanse = false;
var file;
var state;
function UserManager(){
	this.update=updateUser;
	this.insert=insertUser;
	this.check=checkUser;
}
function updateUser(){
	if(!instanse)
	{
		$.ajax({
				   type: "POST",
				   url: "userManager.php",
				   data: {  
				   			'function': 'update',
							'file': file
							},
				   dataType: "json",
				
				   success: function(data){
					   state = data.state;
					   instanse = false;
				   },
				});
		}
}
function showUser(user_name,isMember)
            {
			//alert(isMember);
			if(isMember==true)
			{
            	$('#members').append('<div class="item user" ><img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/><a href="#" class="icon"></a><h2>'+user_name+'</h2><ul><li><a href="#">Profile</a></li><li><a href="#">Properties</a></li><li><a href="#">Privacy</a></li></ul></div>');
            		rePositionMember();
					}
					else
			{
			$('#guest').append('<div class="item user" ><img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/><a href="#" class="icon"></a><h2>'+user_name+'</h2><ul><li><a href="#">Profile</a></li><li><a href="#">Properties</a></li><li><a href="#">Privacy</a></li></ul></div>');
            		rePositionGuest();
			}
            }
			
			
function insertUser(user_name,pass)
{
	$.ajax({
		   type: "POST",
		   url: "userManager.php",
		   data: {  
		   			'function': 'insert',
					'user': user_name,
					'pass': pass,
					'file': file
				 },
				 contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		   dataType: "json",
		   success: function(data){
			   //updateChat();
		   },
		});
}
function checkUser(user_name,pass)
{
$.ajax({
		   type: "POST",
		   url: "userManager.php",
		   data: {  
		   			'function': 'check',
					'user': user_name,
					'pass': pass,
					'file': file
				 },
				 contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		   dataType: "json",
		   success: function(data){
			   //updateChat();
			   showUser(user_name,data.ok);
			   //alert(data.ok);
		   },
		});


}