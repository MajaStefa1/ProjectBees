<!--Marija Stefanovic 2019/0068-->
<html>
<head>
    <script>
        function prijaviSe(){
            
            document.getElementById("mejl").value=" ";
            document.getElementById("lozinka").textContent="";
        }
    </script>
</head>
<body>
    
    <div style="text-align:center" >
        <input type="text" name="mejl" id="mejl" value=""> <br>
        <label for="mejl">Mejl adresa</label><br> <br><br>
        <input type="text" name="lozinka" id="lozinka"> <br>
        <label for="lozinka">Lozinka</label> <br><br><br>
        <button onclick="prijaviSe()">Prijavi se</button>
    </div>
</body>   
</html> 