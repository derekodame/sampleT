
//profile pic_large
$('.skip_pic').hide();
$('.skip_pic').click(function(){
$('.skip_pic').hide()

});



//new comment show
$('.new_close').hide();
$('.com_new_show').hide();
$('.new_com_show').click(function(){
	$('.com_new_show').show();
	$('.new_close').show();
	})

$('.new_close').click(function(){
	$('.new_close').hide();
$('.com_new_show').hide();
	})
	

	
//comment home --

function cmtt(){

	//var me = document.getElementById('m').value;
	var ne = document.getElementById('textarea').value;
	$('.sh').html('<img src=../photos/loader.gif />');
		$.post('../include/commentdone.php', {nsend:ne},function(data){
			if(data = ' '){
				$('#false').load("../include/homeshow.php");
				$('#textarea').val('');
				$('#textarea').focus();
				$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
				
			}
			});
			}




$(setInterval(function(){
	//$(documbent).load("../include/profileeephp.php");
	}, 100));

$("#false").click(function(){
	$(document).print() 
	
	}) 



///reply --------------

//focus
$(".replybutton")==$(".replybutton").css({"display":"none"});
function tf(tf){
var ff =$('#r' + tf);
var bb =$('#b' + tf);	
	
ff.click(function(){
	if((ff.val()==0) ){
	bb==bb.css({"display":"none"});
	}else
	bb==bb.css({"display":"block"});
	});

ff.keyup(function(){
	if((ff.val()==0)){
	bb==bb.css({"display":"none"});
	}else
	bb==bb.css({"display":"block"});
	});

	}


function pearout(ssid){
	$('#ss' + ssid).mouseleave(function(){
	$('#ss' + ssid).css({'border-left-color':"white","border-left-width": "0px","border-left-style":"none"}).animate({opacity:1},650);
	});


	}

function tfb(id){
	$('#r' + id).css({"overflow": "hidden"})
	}
//hide reply

function rhide(cid){
$('#f' + cid).show().css({'opacity':0,}).animate({opacity:1},650);

	}

//-------


function replysend(userid,id,edd){
	//var v = $('.reply').val();		
 var v =$('#r' + id).val();
//$('#r' + id).val('');

$('.sh').html('<img src=../photos/loader.gif />');
	//var me = document.getElementById('m').value;

		$.post('../include/replyinsert.php', {reply:v,userid:userid},function(data){
			$('#r' + id).html('<img src=../photos/loader.gif/>');
			if(data== ' '){
		
				$('#false').load("../include/homeshow.php");
				$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
				//$('#r' + id).show();
				}
			});
			
				$.post('../include/comment_new.php', {cid:id,c_othere:edd},function(data){
	
			});
			}
			
			

	
//---------------------end reply





//for chat




//intervals
$("#chat_button,.btm").mousemove(function(){
	
	$('.chatshow,.dd').animate({scrollTop:999999999*9999999},.5);
	
	})

 
//chat focus
$('#xh').hide();
$('.chat').show();

$('#xh').click(function(){
$('.chat').show();
$('#xh').hide();	
$('#xc').show();	
	});

$('#xc').click(function(){
$('.chat').hide();
$('#xh').show();	
$('#xc').hide();	
	});


$('.chatshow,.dd').animate({scrollTop:999999999*9999999},.5);
	$('#chattext,.ctm').focus(function(){
		//alert("");
		var i = i* 99999
	
		}).animate({scrollTop:999999999*9999999},.5);
	$('#chattext,.ctm').click(function(){
		//alert("");
		var i = i* 99999
		$('.chatshow,.dd').animate({scrollTop:999999999*9999999},.5);
		}).keypress(function(){
		//alert("");
		var i = i* 99999
		$('.chatshow,.dd').animate({scrollTop:999999999*9999999},.5);
		});


 

$(setInterval(function(){
	$('.chatshow').load("../include/chatselect.php");
	}, 1000));
$(setInterval(function(){
	$('#false').load("../include/homeshow.php");
	}, 300000));

$(setInterval(function(){
	//$('#hhh').load("../include/profileeephp.php");
	}, 1000));


function send(){
	$('.sh').html('<img src=../photos/loader.gif />');
	//var me = document.getElementById('m').value;
	var ne = document.getElementById('chattext').value;
		$.post('../include/chatinsert.php', {nsend:ne},function(data){
			
			if(data== ' '){
				//$('.d').prepend(me + "<hr/>").css({'display':'block','opacity':0}).animate({opacity:1},550);
			
				//alert("done");
				
				//setTimeout($('.d').load("./show.php"),3);
				//setInterval($('.d').load("./show.php"),1);
			//	$('.d').load("./show.php").css({'display':'block','opacity':0}).animate({opacity:1},550);
				//$('.d').css({'display':'block','opacity':0}).animate({opacity:1},550);
				$('#chattext').val('');
				$('#chattext').focus();
				$('.chatshow').animate({scrollTop:999999999*9999999},.5);
					$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');
			//$('#nm').val('')
				}
			
			});
			}

$("#chattext").val("Let's chat...");
$("#chattext").focus(function(){
	if($("#chattext").val()=="Let's chat..." ){
		$("#chattext").val("");
		}
	
	})


//----hide chat button
	
// -------------- c
$('.ctm').focus();
$('.ctm').focus(function(){
	$('.dd').animate({scrollTop:999999999*9999999},.5);
	});
$('.dd').animate({scrollTop:999999999*9999999},.5);


 $('.ctm').keyup(function(ee){
	 $('.dd').animate({scrollTop:999999999*9999999},.5); 
	   // if(ee){keycode = ee.keyCode}else keycode =event.keyCode; or below
	  ee? keycode = ee.keyCode : keycode =event.keyCode;
	  console.log(keycode);
	   if(keycode == 13){
		   $('.dd').animate({scrollTop:999999999*9999999},.5); 
		$('.btm').click();	 
		
		}
 });


function sendd(o){

	//var me = document.getElementById('m').value;
	var neee = document.getElementById('ctm').value;
//	alert(o);
if(neee != 0){
		$.post('../include/cmt.php', {nsend:neee,othere:o},function(data){
			
		
				if(data = ' '){
				$('#ctm').val('');
				$('#ctm').focus();
				$('.dd').animate({scrollTop:999999999*9999999},.5);
		}
				
			});
			
			$.post('../include/New_chat_insert.php', {othere:o},function(data){
			
				
			});
			
			
			}//else alert("al");
			
			
			}







$("#chat_button")==$("#chat_button").css({"display":"none"});
$("#chattext").click(function(){
	if(($("#chattext").val()==0) ){
	$("#chat_button").css({"display":"none"});
	}else
	$("#chat_button").css({"display":"block"});
	});

$("#chattext").keyup(function(){
	if(($("#chattext").val()==0)){
	$("#chat_button").css({"display":"none"});
	}else
	$("#chat_button").css({"display":"block"});
	});

//------------------------------------------------end of chat

//edit upload

$('.picc').click(function(){
	
	$('.inputup')==$('.inputup').click().css({"display":"block"});
	});
$('.picc').hover(function(){
	
	$('.inputup')==$('.inputup').css({"display":"block"});
	});
	
$('.picc').mouseout(function(){
	
	$('.inputup')==$('.inputup').css({"display":"none"});
	});
	


//for search
$(".search_downn").hide();
$(".xxs").hide();
/*$(".search_downn").mouseleave(function(e){
	
		$(".search_downn").hide();
		$(".searchtop").blur()
	})	
$(".searchtop").mousemove(function(){
	$(".searchtop").focus()
	})	
*/

$(".xxs").click(function(){
	
	$(".search_downn").hide();
	$(".xxs").hide();
	})
if(($(".searchtop,.other_search").val()==0)){
	$(".searchtop,.other_search").val("Search through...");	
}




$(".searchtop,.other_search").focus(function(){
if($(".searchtop,.other_search").val()=="Search through..."){
$(".searchtop,.other_search").val("");

}
if($(".searchtop,.other_search").val()!=""){
$(".search_downn").show();
$(".xxs").show();


}
})

	
	
$(".searchtop,.other_search").blur(function(){
if($(".searchtop,.other_search").val()==""){
$(".searchtop,.other_search").val("Search through...")
}
})



// search down --------
//$(".search_down").hide();

$(".searchtop").keyup(function(e){
$(".search_downn").show();	
$(".xxs").show();
$(".other").hide();
var sv = $(".searchtop").val()	
 $('.sh').html('<img src=../photos/loader.gif />');
 
$.get('../include/search_down.php', {sv:sv},function(data){
	
$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');	
$('.search_down,.outputsearch').html(data) 	
	});
	 
$.get('../include/searchh.php', {sv:sv},function(data){
	
$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');	
$('.search_left_c').html(data) 	

	});	


if(($(".searchtop").val()=="")){
	$(".search_downn").hide();
	$(".xxs").hide();
	$(".other").show();
	}	
})





//for msginput
$('.msgleftinput').hide();
$('.msgleft').click(function(){
	$('.msgleftinput').show();
	
	
	}).css("cursor","pointer");
	
$('.x').click(function(){
	$('.msgleftinput').hide();
	$('.msgarea').val("")

	
	}).css("cursor","pointer");
	
//for remove

$('#remove').mouseover(function(){
	$(this).text("Remove IT Tips " ); 
	$(this).css("color","fee");
	$(this).css("width","225px" ); 
	})

$('#remove').mouseout(function(){
	$(this).text("Remove" ); 
	$(this).css("color","white");
	
	})
//for textarea


$("#cdone,#pdone").hide();
/*$("#ptextarea,#textarea").click(function(){
	if(($("#ptextarea,#textarea").val()==0)){
	$("#cdone,#pdone")==$("#cdone,#pdone").css({"display":"none"});
	}else
	$("#cdone,#pdone")==$("#cdone,#pdone").css({"display":"block"});
	});
*/
$("#ptextarea,#textarea").keyup(function(){
	if(($("#ptextarea,#textarea").val()==0)){
	$("#cdone,#pdone")==$("#cdone,#pdone").css({"display":"none"});
	}else
	$("#cdone,#pdone")==$("#cdone,#pdone").css({"display":"block"});
	});


//for message


$(".inbox").click(function(){
	$(this).css("background-color","#FFF").css("color","#333");
	$('.box1').hide("slow");
	$('.box2').show("slow");
	$(".sent").css("background-color","").css("color","#fff");
	}).css("cursor","pointer");
	
	

//for tooltip

$(document).ready(function(e) {
    $('.tooltip').mouseover(function(e){
		if($(this).attr('data-tip-type')=='text'){
			$('#tooll').html($(this).attr('data-tip-source'));
			
			}
			$('#tooll').css("display", "block");
			$('#tooll').css({'display':'block','opacity':0}).animate({opacity:1},250);
		})
		
		.mousemove(function(e){
		var tooltipWidth = $('#tooll').outerWidth();
		var tooltipHeight = $('#tooll').outerHeight();

		// width detection
		var pageWidth = $('.showcomment').width();
		if ( e.pageX > pageWidth / 2 ){
			$('#tooll').css('left',( e.pageX - tooltipWidth + 20 ) + 'px');
		}else{
			$('#tooll').css('left',( e.pageX - 20 ) + 'px');
		}
		
		// height detection
		if ( e.pageY > 100 ){
			$('#tooll').css('top',( e.pageY - (tooltipHeight+20) ) + 'px' );
		}else{
			$('#tooll').css('top',( e.pageY + 20 ) + 'px' );
		}
		
		/* debug */ $('.bodywidth').html( pageWidth );
		/* debug */ $('.xpos').html(e.pageX);
		/* debug */ $('.ypos').html(e.pageY);
			
			
			})
			
		.mouseleave(function(e){
			
			$('#tooll').animate({opacity:0},250, function(){
			$('#tooll').css('display','none')
		});
		
		});
});
//for homeshow

	
$('divb').hover(function(e){
	$(document).load('../include/homeshow.php')
	
	});	
	
//for showonline && //count 
//$(setInterval(function(){
	//$('.online').load('../include/onlineshow.php');
	//$('.count').load('../include/count.php');
	//}, 2000));


$(document).hover(function(){
	$('.online').load('../include/onlineshow.php');
	$('.count').load('../include/count.php');
	
	});



	
	  
	
	

//go top


$(document).ready(function(){

	$('a[href=#top]').click(function(){
		
		$('html, body').animate({scrollTop:0},900);
		

		
	
	});


});

//search 
/*
$(document).ready(function(){
	$('#search').keypress(function(e){
		
		$('#sss').load('../include/searchh.php')
		});
	
	$('.searchtop').click(function(){
		
		if($('.searchtop').val("")){
		alert("what");
		}
		});
	
	});
*/

// for like

function like_add(article_id){
	$('.sh').html('<img src=../photos/loader.gif />');
	$.post('../include/likeshowphp.php', {article_id:article_id},function(data){
		if(data== ' '){
		
       
		
		
			like_get(article_id)
			
			
			
	$('#a' + article_id).val("Liked")? $('#a' + article_id).text("Like"): $('#a' + article_id).text("Liked");
		
			$('.sh').html('<img src=../photos/icon.png width=\"20px\" height=\"20px\"/>');	
				
		
		
			}else
		
			text(data);
				
		})
	
	}

function like_get(article_id){

    
	$.post('../include/likeget.php',{article_id:article_id},function(data){
		$('#l' + article_id).text(data);
		})
		
	}
	
function liked(s){
	
	
	//$('.pc' + s).css({"color":"red"})
	}


//$(".people").hide();

// for delete
 





		
  function deletee(deletee_id){
	 
	  
	  $.post('../include/delete.php', {deletee:deletee_id},function(data){
		if(data== ' '){
			
			
		
	 	
			$('#otherdetail4').load('../include/profile_delete.php');
		//	$('#otherdetail4d').load('../include/profileeephp.php');

			
		
			//alert("what the fuck");
			}
			
			
				
		})
	}

//comment----------

 function comment(userid,id,idd){
	//var v = $('.reply').val();		
 var v =$('#r' + id).val();
//$('#r' + id).val('');


	//var me = document.getElementById('m').value;

		$.post('../include/replyinsert.php', {reply:v,userid:userid},function(data){
			
			if(data== ' '){
				$('#false').load("../include/homeshow.php");
				
				$('#r' + id).show();
				
			
				}
			});
			}
			




	 
	  
	  
			
				
	





// for about
$('.aboutarea').hide();
$('#show').show();
$('#hideabout').hide();

$('#show').click(function(e){
	
	$('.aboutarea').show();
	$('#hideabout').show();
	$('#showabout').hide();
	$('#show').hide();
	}


);
$('.detail,.edit,.pic,.down_top').hover(function(e){
	$('.aboutarea').hide();
	$('#hideabout').hide();
	$('#showabout').show();
	$('#show').show();
	});

$('#showabout').click(function(e){
	
$('.aboutarea').show();
	$('#hideabout').show();
	$('#showabout').hide();
	$('#show').hide();
	}
);


//search down



