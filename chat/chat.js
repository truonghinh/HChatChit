/* 
Created by: Kenrick Beckett

Name: Chat Engine
*/

var instanse = false;
var state;
var mes;
var file;
var curMes=0;
var curChat=false;

function Chat () {
    this.update = updateChat;
    this.send = sendChat;
	this.getState = getStateOfChat;
}

//gets the state of the chat
function getStateOfChat(){
	if(!instanse){
		 instanse = true;
		 $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'getState',
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

//Updates the chat
function updateChat(){
	 if(!instanse){
		
		 instanse = true;
	     $.ajax({
			   type: "POST",
			   url: "process.php",
			   data: {  
			   			'function': 'update',
						'state': state,
						'file': file
						},
			   contentType: "application/x-www-form-urlencoded;charset=UTF-8",
			   dataType: "json",
			   success: function(data){
			   
				   if(data.text){
						for (var i = 0; i < data.text.length; i++) {
						//alert(data.text[i]);
						//m=Utf8.decode(data.text[i]);
						n=data.text[i].search("</span>");
						mes=data.text[i].substring(n+7);
						//alert(mes);
						
						text=replaceSmiley(data.text[i],"smilies/");
						//alert(mes);
						//lert(Utf8.decode(mes));
						//text="<img align='absmiddle' src='smilies/smile002.gif' />";
                            $('#chat-area').append($("<p>"+ text +"</p>"));
							//alert(curMes);
							curMes=curMes+data.text.length;
							//alert(curMes);
							if(curMes>0)
							{
								$.faviconNotify('images/chat.png', curMes, 'tr', '#FFFFFF', '#000000');
								if(curChat)
								{
									//notification(mes);
								}
							}
							else
							{
							$.faviconNotify('images/icon.png');
							}
                        }		
						curChat=false;
						var top=document.getElementById('chat-area').scrollTop;
						var hei=document.getElementById('chat-area').offsetHeight;
						var actualLocation=top+hei+32;
						var scrollHei=document.getElementById('chat-area').scrollHeight;
						//alert(document.getElementById('chat-area').scrollHeight);
						//372
						if(actualLocation>scrollHei)
						{
					document.getElementById('chat-area').scrollTop = scrollHei;
						if($("*:focus").attr("id")=="sendie")
			 {
				$.faviconNotify('images/icon.png');
				//alert($("*:focus").attr("id"));
			 }
					}
				   }
				   
				   instanse = false;
				   
				   state = data.state;
			   },
			});
	 }
	 else {
		 setTimeout(updateChat, 1500);
	 }
}

//send the message
function sendChat(message, nickname)
{   
	curMes=0;
	curChat=true;
    updateChat();
	
     $.ajax({
		   type: "POST",
		   url: "process.php",
		   data: {  
		   			'function': 'send',
					'message': message,
					'nickname': nickname,
					'file': file
				 },
				 contentType: "application/x-www-form-urlencoded;charset=UTF-8",
		   dataType: "json",
		   success: function(data){
			   updateChat();
		   },
		});
}
if (!window.webkitNotifications) {
        alert('Sorry , your browser does not support desktop notification. Try Google Chrome.');
    }
	    function RequestPermission (callback)
    {
        window.webkitNotifications.requestPermission(callback);
    }
    function notification (text)
    { 
		var icon  = '';
        var title = 'New message from GOneGIS';
        var body   = text;
        if (window.webkitNotifications.checkPermission() > 0) {
		//alert(window.webkitNotifications.checkPermission());
            RequestPermission(notification);
        }
		else{
        //alert(text);
        
		
        //var popup;
		try
		{
			popup= window.webkitNotifications.createNotification(icon, title, body);
		}
		catch(err)
		{
			alert(err.message);
		}
		
        popup.show();
		
       	setTimeout(function(){
		popup.cancel();
		}, '2000');
		}
	}
	
    function HTMLnotification ()
        {
        if (window.webkitNotifications.checkPermission() > 0) {
            RequestPermission(HTMLnotification);
        }

        
        var popup = window.webkitNotifications.createHTMLNotification('http://www.beakkon.com/');
        popup.show();
		setTimeout(function(){
		popup.cancel();
		}, '15000');
    } 
