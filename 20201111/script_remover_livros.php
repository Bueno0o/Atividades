<<<<<<< HEAD
<script>
    $(function(){
        $(".remover").click(function(){
            i = $(this).val();
            c = "codigo";
            t = "livros";
            p = {tabela: t, id:i, coluna:c}
            $.post("remover.php",p,function(r){
                if(r=='1'){
                    $("#msg").html("Bibliotecario removido com sucesso.");
                    $("button[value='"+ i +"']").closest("tr").remove();
                }
            });
        }); 
    });
=======
<script>
    $(function(){
        $(".remover").click(function(){
            i = $(this).val();
            c = "codigo";
            t = "livros";
            p = {tabela: t, id:i, coluna:c}
            $.post("remover.php",p,function(r){
                if(r=='1'){
                    $("#msg").html("Bibliotecario removido com sucesso.");
                    $("button[value='"+ i +"']").closest("tr").remove();
                }
            });
        }); 
    });
>>>>>>> 11095ee4943815e3c9844fe9e2e234727ce65886
</script>