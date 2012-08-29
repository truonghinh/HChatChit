<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>Chat With GOneGIS tr&AElig;&deg;&aacute;&raquo;</title>
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
    <link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
    <style>
	a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
	</style>
	<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
	
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>-->
	<script type="text/javascript" src="jquery.faviconNotify.js"></script>
	<script type="text/javascript" src="smilies.js"></script>
    <script type="text/javascript" src="chat.js"></script>
	<script type="text/javascript" src="utf8.js"></script>
	<script type="text/javascript" src="jquery.easing.1.3.js"></script>
    <script type="text/javascript">
    
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "No name");
        
        // default name is 'Guest'
    	if (!name || name === ' ') {
    	   name = "No name";	
    	}
    	
    	// strip tags
    	name = name.replace(/(<([^>]+)>)/ig,"");
    	
    	// display name on page
    	$("#name-area").html("You are: <span>" + name + "</span>");
    	
    	// kick off chat
        var chat =  new Chat();
    	$(function() {
			rePosition();
    		 chat.getState(); 
			 //alert($("*:focus").attr("id"));
    		 
    		 // watch textarea for key presses
             $("#sendie").keydown(function(event) {  
             
                 var key = event.which;  
           
                 //all keys including return.  
                 if (key >= 33) {
                   
                     var maxLength = $(this).attr("maxlength");  
                     var length = this.value.length;  
                     
                     // don't allow new content if length is maxed out
                     if (length >= maxLength) {  
                         event.preventDefault();  
                     }  
                  }  
    		 																																																});
    		 // watch textarea for release of key press
    		 $('#sendie').keyup(function(e) {	
    		 					 
    			  if (e.keyCode == 13) { 
					$.faviconNotify('images/icon.png');
                    $('#sendButton').trigger('click');
    				
    				
    			  }
             });
			 $('#sendButton').click(function(e){
			 
				var text = $('#sendie').val();
    				var maxLength = $('#sendie').attr("maxlength");  
                    var length = text.length; 

                    // send 
                    if((length <= maxLength + 1)&(length>0)) { 
                     
    			        chat.send(text, name);	
    			        $('#sendie').val("");
    			        
                    } else {
                    
    					$('#sendie').val(text.substring(0, maxLength));
    					
    				}	
			 });
            
			
    	});
    </script>
	<script type="text/javascript">
	function on(t)
{
 sendie.value+=t;
}
            $(function() {
                $('.navigation > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'199px',
                        'height'    :'199px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h2').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.1'
                    },5000,'easeOutBack');

                    $this.find('a:first,h2').removeClass('active');
                }
            );
            });
			function rePosition()
			{
				var len =$('#nav').children().length;
				for(var i=0;i<len;i++)
				{
					$('#nav>.item:nth-child('+i+')').css('top',function(i){return i+50;});
					//alert($('#nav>.item:nth-child('+i+')').css('left'));
				}
			}
        </script>
</head>

<body onload="setInterval('chat.update()', 1000)">
	
    <div id="page-wrap">
		
        <h2>Say something ...</h2>
        
        <p id="name-area"></p>
        
        <div id="chat-wrap"><div id="chat-area"></div></div>
		<div style="overflow-x:scroll; height='55px' width='200px'; background-color:#ffffff">
	<div style="width:350%;">
        <img class="x" align='absmiddle' src='smilies/38.gif' title=':D' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/52.gif' title=':)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/50.gif' title=':P' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/24.gif' title='=))' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/53.gif' title=';)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/48.gif' title=':(' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/33.gif' title='X(' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/40.gif' title=':xD' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/47.gif' title=':*' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/35.gif' title=':-@' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/55.gif' title='8-)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/49.gif' title=':((' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/1.gif' title=':-S' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/11.gif' title=':-$' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/5.gif' title=':-|' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/56.gif' title=':-#' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/39.gif' title='(H)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/32.gif' title=':o)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/54.gif' title='(2)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/12.gif' title=':-O' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/41.gif' title='(@' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/2.gif' title='(cgtr)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/19.gif' title='(ea)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/46.gif' title='(ea1)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/4.gif' title='(k)' onClick="on(this.title)"/>
		<img class="x" align='absmiddle' src='smilies/30.gif' title='(s)' onClick="on(this.title)"/>
		</div>
		</div>
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea autofocus="autofocus" id="sendie" maxlength = '100' onClick="$.faviconNotify('images/icon.png');"></textarea>
			<!--<button id="sendButton" onClick="chat.send('hi', 'tui');">Send</button>-->
			<div id="sendButton" class="btn orange" width='30px' height='30px'>Send</div>
        </form>
		
		
    
    </div>
	
	<!--<div class="navigation" id="nav">
                <div class="item user" >
                    <img src="images/bg_user.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Thu</h2>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Properties</a></li>
                        <li><a href="#">Privacy</a></li>
                    </ul>
                </div>
                <div class="item user hinh" >
                    <img src="images/bg_home.png" alt="" width="199" height="199" class="circle"/>
                    <a href="#" class="icon"></a>
                    <h2>Hinh</h2>
                    <ul>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>-->
			
			

</body>

</html>