
function replaceSmiley(text,path)
{
//alert("hi");
	var imgs=new Array();
	imgs[0]="smile001.gif";
	imgs[1]='smile002.gif';
	var chrs=new Array();
	chrs[0]=':)';
	chrs[1]=':D';
	//alert(arr[':)']);
	//for(i=0;i<imgs.length;i++)
	//{
	//alert(chrs[i]);
	//alert(imgs[i]);
	
		var n=text.replace(/\u003A\u0029/gi,"<img align='absmiddle' src='"+path+"52.gif' title=':)' />");
		n=n.replace(/\u003A\u0044/gi,"<img align='absmiddle' src='"+path+"38.gif' title=':D' />");
		n=n.replace(/\u003A\u0070/gi,"<img align='absmiddle' src='"+path+"50.gif' title=':p' />");
		n=n.replace(/\u003D\u0029\u0029/gi,"<img align='absmiddle' src='"+path+"24.gif' title='=))' />");
		n=n.replace(/\u003B\u0029/gi,"<img align='absmiddle' src='"+path+"53.gif' title=';)' />");
		n=n.replace(/\u003A\u0028/gi,"<img align='absmiddle' src='"+path+"48.gif' title=':(' />");
		n=n.replace(/\u0058\u0028/gi,"<img align='absmiddle' src='"+path+"33.gif' title='X(' />");
		n=n.replace(/\u003A\u0078\u0044/gi,"<img align='absmiddle' src='"+path+"40.gif' title=':xD' />");
		n=n.replace(/\u003A\u002A/gi,"<img align='absmiddle' src='"+path+"47.gif' title=':*' />");
		n=n.replace(/\u003A\u002D\u0040/gi,"<img align='absmiddle' src='"+path+"35.gif' title=':-@' />");
		
		n=n.replace(/\u0038\u002D\u0029/gi,"<img align='absmiddle' src='"+path+"55.gif' title='8-)' />");
		n=n.replace(/\u003A\u0028\u0028/gi,"<img align='absmiddle' src='"+path+"49.gif' title=':((' />");
		n=n.replace(/\u003A\u002D\u0053/gi,"<img align='absmiddle' src='"+path+"1.gif' title=':-S' />");
		n=n.replace(/\u003A\u002D\u0024/gi,"<img align='absmiddle' src='"+path+"11.gif' title=':-$' />");
		n=n.replace(/\u003A\u002D\u007C/gi,"<img align='absmiddle' src='"+path+"5.gif' title=':-|' />");
		n=n.replace(/\u003A\u002D\u0023/gi,"<img align='absmiddle' src='"+path+"56.gif' title=':-#' />");
		n=n.replace(/\u0028\u0048\u0029/gi,"<img align='absmiddle' src='"+path+"39.gif' title='(H)' />");
		n=n.replace(/\u003A\u006F\u0029/gi,"<img align='absmiddle' src='"+path+"32.gif' title=':o)' />");
		n=n.replace(/\u0028\u0032\u0029/gi,"<img align='absmiddle' src='"+path+"54.gif' title='(2)' />");
		n=n.replace(/\u003A\u002D\u004F/gi,"<img align='absmiddle' src='"+path+"12.gif' title=':-O' />");
		n=n.replace(/\u0028\u0040/gi,"<img align='absmiddle' src='"+path+"41.gif' title='(@' />");
		n=n.replace(/\u0028\u0063\u0067\u0074\u0072\u0029/gi,"<img align='absmiddle' src='"+path+"2.gif' title='(cgtr)' />");
		n=n.replace(/\u0028\u0065\u0061\u0029/gi,"<img align='absmiddle' src='"+path+"19.gif' title='(ea)' />");
		n=n.replace(/\u0028\u0065\u0061\u0031\u0029/gi,"<img align='absmiddle' src='"+path+"46.gif' title='(ea1)' />");
		n=n.replace(/\u0028\u006B\u0029/gi,"<img align='absmiddle' src='"+path+"4.gif' title='(k)' />");
		n=n.replace(/\u0028\u0073\u0029/gi,"<img align='absmiddle' src='"+path+"30.gif' title='(s)' />");


	//}
	//alert(n);
	return n;
}