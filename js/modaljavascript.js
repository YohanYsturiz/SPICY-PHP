function preview(int){
				document.getElementById('btn_enviar').value = int;
				var conexion;
				if (window.XMLHttpRequest)			  {
				  conexion=new XMLHttpRequest();
				}else
				  {
				  conexion=new ActiveXObject("Microsoft.XMLHTTP");
				}
				conexion.onreadystatechange=function(){
					if(conexion.readyState==4 && conexion.status==200){
						document.getElementById("midiv").innerHTML=conexion.responseText;
					}
				}
				conexion.open("GET","contenido.php?id="+int,true);
				conexion.send();
			}
			function enviarmail(int){
				var conexion;
				if (window.XMLHttpRequest)			  {
				  conexion=new XMLHttpRequest();
				}else
				  {
				  conexion=new ActiveXObject("Microsoft.XMLHTTP");
				}
				conexion.onreadystatechange=function(){
					if(conexion.readyState==4 && conexion.status==200){
						document.getElementById("midiv").innerHTML=conexion.responseText;
					}
				}
				conexion.open("GET","enviar-mail.php?id="+int,true);
				conexion.send();
			}