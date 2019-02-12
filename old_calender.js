now=new Date();
static_now=new Date();
week=new Array("S","M","T","W","T","F","S");


	//달력함수
	function calender(val,element_name){
	var p;
	var z=0;
	
	switch(val){
		case 1:now.setYear(now.getYear()-1);break;
		case 2:now.setMonth(now.getMonth()-1);break;
		case 3:now.setMonth(now.getMonth()+1);break;
		case 4:now.setYear(now.getYear()+1);break;
				//	now.setMonth(now.getMonth() - val);
	}

	sc="<input type=\"button\" onclick=\"calender(1,'"+element_name+"')\" style=\"cursor:hand\" value=\"◀\">";
	sc+="<input type=\"button\" onclick=\"calender(2,'"+element_name+"')\" style=\"cursor:hand\" value=\"◁\"> ";
	
	sc+="<b>"+ (now.getMonth()+1)+"/";  
	sc+= now.getYear()+" <b>";
	
	
	sc+="<input type=\"button\" onclick=\"calender(3,'"+element_name+"')\" style=\"cursor:hand\" value=\"▷\">";
	sc+="<input type=\"button\" onclick=\"calender(4,'"+element_name+"')\" style=\"cursor:hand\" value=\"▶\">";

	

	//해당월 마지막 일자
	last_date = new Date(now.getYear(),now.getMonth()+1,1-1);
	
	//해당월 처음일자 요일
	first_date= new Date(now.getYear(),now.getMonth(),1);

	//스킨
	calender_area="<table style='border:1 solid #dcdcdc' cellspacing='0' cellpadding='0'><tr><td><table cellpadding='1' cellspacing='0' bgcolor='#dcdcdc' style='border:1 solid #808080'>";
	calender_area+="<tr bgcolor='#006699'><td colspan='10' style='border-bottom:1 solid #808080;font-size:9pt' align='center' style='color:#ffffff'>"+sc+"</td></tr><tr>";

		//요일표시
		var color='#FF6600';
		for(i=0;i<week.length;i++){
			calender_area+="<td bgcolor='#2E8BAF'  style='border-left:1 solid #dcdcdc;border-bottom:1 solid #808080;color:"+color+";font-size:9pt' align='center'><b>"+week[i]+"</b></td>";
			color='#ffffff';
		}
			calender_area+="</tr><tr>";

		for(i=1;i<=first_date.getDay();i++){
			calender_area+="<td align='right' valign='top' bgcolor='#ffffff'  style='border-left:1 solid #dcdcdc;border-bottom:1 solid #dcdcdc'>&nbsp;</td>";
		}
		
		
		z=(i-1);
		for (i=1;i<=last_date.getDate();i++)
		{
			z++;
			p=z%7;
			var pmonth=now.getMonth()+1;
			if(i<10){var ii="0"+i;}else{var ii=i;}
			if(pmonth<10){pmonth="0"+pmonth;}

			calender_area+="<td align='right' valign='top' bgcolor='#ffffff' style='border-left:1 solid #dcdcdc;border-bottom:1 solid #dcdcdc'  align='center'  onclick=\"change_date('"+ii+"/"+pmonth+"/"+now.getYear()+"','"+element_name+"')\"  onmouseover=\"this.bgColor='#eeeeee'\" onmouseout=\"this.bgColor='#ffffff'\" style='cursor:hand' height='22' width='22'>";
				
						//오늘의 색상
						if(i == now.getDate() && now.getYear()==static_now.getYear() && now.getMonth()==static_now.getMonth()) {
														   calender_area+="<span style='color:#339900;font-size:8pt'><B>"+i+"</B></span>";}
							else if(p == 0){calender_area+="<span style='color:#0000ff;font-size:8pt' ><B>"+i+"</B></span>";}
							else if(p == 1){calender_area+="<span style='color:#ff0000;font-size:8pt'><B>"+i+"</B></span>";}
												else{calender_area+="<span style='color:#4b4b4b;font-size:8pt'><B>"+i+"</B></span>";}

			calender_area+="</td>";
			
			if(p==0 && last_date.getDate() != i){calender_area+="</tr><tr>";}
		}
	
		if(p !=0){
			for(i=p;i<7;i++){
					calender_area+="<td align='right' valign='top' bgcolor='#ffffff' style='border-left:1 solid #dcdcdc;border-bottom:1 solid #dcdcdc'>&nbsp;</td>";
			}
		}

	//스킨
	calender_area+="</tr></table>";
	s_area.innerHTML=calender_area;
	

	}
	function check_mouse(val){
		
		calender('not',val);
		if(s_area.style.visibility== "visible") {
			s_area.style.visibility = "hidden";
		} else {
			s_area.style.visibility ="visible";
		}
			
		s_area.style.left=event.clientX-10+document.body.scrollLeft; 
         s_area.style.top=event.clientY+document.body.scrollTop; 
	}
	function change_date(val,element_name){

		eval(element_name).value=val;
		s_area.style.visibility="hidden";
	}
	document.write("<div id='s_area' style='font-size:9pt;position:absolute;width:200px;height:100px'>&nbsp;</div>");