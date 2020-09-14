<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    frutinha = $("input[name='f']").val();
                    $.get("processa.php",{"f":frutinha},function(m){
                        $("#msg").html(m);
                    });
                });
            });
        </script>
    </head>
    <body>
        <input type="text" name="f" placeholder="cadastre uma fruta..."/>
        <button id="btn">Cadastro Assíncrono</button>
        <a href="destruirsessao.php">destruir dados</a>
        <hr />
        <div id="msg"></div>
    </body>
</html>