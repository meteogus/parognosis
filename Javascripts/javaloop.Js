
<script type="text/javascript">
//==================================
// * * * * * * * * * * * * * * * * 
//  * * * * * * * * * * * * * * * * 
// * * * * * * * * * * * * * * * * 
//==================================
//
//			Script Section 
//
//
//
//
//==================================
// * * * * * * * * * * * * * * * * 
//  * * * * * * * * * * * * * * * * 
// * * * * * * * * * * * * * * * * 
//==================================

// define some variables  -- No Need to alter these!!!

  var row = initial_image;
  
  	theImages = new Array();
  			for (var i = 1 ;  i<no_of_vars+1; i++){
  		theImages[i] = new Array();
  	}
  		
	var loop = true
	var animate = 'False'
	var reverse = false
	var delay_time=200;
	plots = theImages[1];
	plots.value = 1;
	lag_mulitplier= 3
 
//  lots and lots of functions

function increaseRow(){
 	id1=document.getElementById('anim')
 	if((row==last_image)&&(loop==true)){
 		row=first_image;
 		id1.src = plots[row].src;  
 		document.myform.inputbox.value = row;
 	}
  	else if(row < last_image){
			row = row+increment;
			id1.src = plots[row].src;  
			document.myform.inputbox.value = row;
	}
}
											
function decreaseRow(){
 	id1=document.getElementById('anim')
 	if((row==first_image)&&(loop==true)){
 		row=last_image;
 		id1.src = plots[row].src;  
 		document.myform.inputbox.value = row;
 	}
 	else if(row-1 >= first_image){
		row = row-increment;
		id1.src = plots[row].src
		document.myform.inputbox.value = row;
	}
}

function changeplotdown(){
	if(no_of_vars >1){
 	id1=document.getElementById('anim')
 		if(plots.value + 1 <= no_of_vars){
 			i = plots.value+1
			plots = theImages[i]
			plots.value = i;
		}	
	id1.src = plots[row].src;  
	}
}

function changeplotup(){
	if(no_of_vars >1){
 	id1=document.getElementById('anim')
 		if(plots.value - 1 >= 1){
 			i = plots.value-1
			plots = theImages[i]
			plots.value = i;
		}	
	id1.src = plots[row].src;  
	}
}

function go2image(num){	
	id1=document.getElementById('anim')
	if(num < last_image && num > first_image){
	id1.src = plots[num].src;
	row = num;
	}
}
ie=(document.all)?true:false;

function resetFrame(){
	id1.src = plots[initial_image].src;
	row = initial_image;
	document.myform.inputbox.value = row;
	}
		
function keyDown(e) {
	var evt=(e)?e:(window.event)?window.event:null;
	if(evt){
		var key=(evt.charCode)?evt.charCode: ((evt.keyCode)?evt.keyCode:((evt.which)?evt.which:0));
		if(key==37){
			decreaseRow();
			return false;
		}
		
		else if(key==39){
			increaseRow();
			return false;
		}
		
		else if(key==38){
			 changeplotup()	;
			 return false;
		}
		
		else if(key==40){
			changeplotdown();
			return false;
			
		}	
		else if(key==76){
			chooseLoop();
			return false;
		}
		else if(key==32){
			play();
			return false;
		}
		else if(key==86){
			chooseRev();
			return false;
		}
		else if(key==72){
			showhide();
			return false;
		}
		
	}	
}
document.onkeydown=keyDown;


function changeloadBar(i){
	document.getElementById("load-banner2").style.width=(i/last_image)*50+"%";
}

function showhide(){
	if(document.getElementById('tabOpts').className=='hide'){
		document.getElementById('tabOpts').className='show'
	}
	else if(document.getElementById('tabOpts').className=='show'){
		document.getElementById('tabOpts').className='hide'
	}
}

function launch(){
	if(no_of_vars == 1){
	document.getElementById('tdMultiVar').className = 'hide'
	}
	for (var j = 1; j<=no_of_vars;j++ ){
			
		for (var i = first_image; i <= last_image; i++)  {
			theImages[j][i] = new Image();
			theImages[j][i].src = image_name[j] + i  + image_type;		
		
			document.getElementById("load-banner2").style.width=(i/last_image)*50+"%";
			
				}
	}

   		document.getElementById('anim').src = plots[row].src	
     	document.myform.inputbox.value = row;
     	document.getElementById("load-banner2").className="hide";
     	
}


function play(){
	if(animate=='False'){
		animate='True';
		document.getElementById('bPlay').value='stop';
		if(reverse==true){
			animateRev();
		}
		else if(reverse==false){
			animateFwd();
		}
	}
	else if(animate=='True'){
		animate='False';
		clearTimeout(timeID);
		document.getElementById('bPlay').value='play';
		
	}
}		


function showvar(){
alert('Boo!!' )
}


function submitenter(num,e){
	var keycode;
	if (window.event) keycode = window.event.keyCode;
	else if (e) keycode = e.which;
	else return true;
	
	if (keycode == 13)
	   {
	   go2image(num);
	   return false;
	   }
	else
	   return true;
}
	

function chooseLoop(){
	if(loop==true){
		document.getElementById('cbL').checked =false;
		loop=false;
		}
	else if(loop==false){
		document.getElementById('cbL').checked =true;
		loop=true;
		}
}

function animateFwd(){
	animate='True'
	increaseRow();
	delay = delay_time;
		if(row==last_image){delay = delay_time*lag_mulitplier};
	timeID = setTimeout("animateFwd()", delay);	//Repeats function over and over after delay
}

function animateRev(){
	animate='True'
	decreaseRow();
	delay = delay_time;
		if(row==first_image){delay = delay_time*lag_mulitplier};
	timeID = setTimeout("animateRev()", delay);	//Repeats function over and over after delay
}


function chooseRev(){
	if(reverse==true){
		document.getElementById('cbRev').checked =false;
		reverse=false;
		if(animate=='True'){play();play()}
		}
	else if(reverse==false){
		document.getElementById('cbRev').checked =true;
		reverse=true;
		if(animate=='True'){play();play()}
		}
}

function showHelp(){
	alert("\
Key				Command\r\
\r\
SpaceBar			Play/Stop\r\
Left Arrow			Backwards\r\
Right Arrow		Forwards\r\
Up Arrow			Change Variable\r\
Down Arrow		Change Variable\r\
\r\
L				Toggle Loop\r\
V				Toggle reVerse\r\
H				Show/Hide Options\r\
")
	}
	
	
zNum = 1.0
function zoom(num){
	zNum = zNum+num
	document.getElementById('MainImage').style.MozTransform = "scale("+zNum+")";
	document.getElementById('MainImage').style.WebkitTransform = "scale("+zNum+")";
	document.getElementById('MainImage').style.OTransform = "scale("+zNum+")";
	document.getElementById('MainImage').style.zoom = zNum;
	}


function increaseSpeed(){
	if(document.Speedbarform.speedbar.value ==14){
		return false}
	else	
	delay_time=(1000/((1000/delay_time)+1));
	document.Speedbarform.speedbar.value = 1000/delay_time;
	document.getElementById("speed").innerHTML=1000/delay_time;
}
function decreaseSpeed(){
	if(document.Speedbarform.speedbar.value ==1){
		return false}
	else
	delay_time=(1000/((1000/delay_time)-1));
	document.Speedbarform.speedbar.value = 1000/delay_time;
	document.getElementById("speed").innerHTML=1000/delay_time;
}

function changeSpeed(num){
	   delay_time=1000/num;
	   document.getElementById("speed").innerHTML=1000/delay_time
	   document.Speedbarform.speedbar.value = 1000/delay_time;
	   }


function disableEnterKey(e){
     var key
     if(window.event){
          key = window.event.keyCode;  }   //IE
     else{
          key = e.which;}     //firefox

     if(key == 13){
     		eval("document.myform.inputbox.focus()");
     		return false;}
          
     else{
          return true;}
}
 

</script>
