<html>
   <head>
      
      <style>
         span {
            color: green;
         }
      </style>
      
      <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").value= "";
               return;
            }else {
               var xmlhttp = new XMLHttpRequest();
					
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").value = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "ajax2.php?q=" + str, true);
               xmlhttp.send();
            }
         }
      </script>
      
   </head>
   <body>
      
      <p><b>Search your favourite tutorials:</b></p>
      
      <form>
         <input type = "text" onkeyup = "showHint(this.value)">
      </form>
      
      <p> Entered Course name: <input id="txtHint" > </span> </p>

   </body>
</html>