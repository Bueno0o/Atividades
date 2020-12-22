<script>

    $(function(){

       function define_alterar_remover(){ 
       
        $(".alterar").click(function(){

            i = $(this).val();
            
            $.get("seleciona_livro.php?id="+i,function(r){
                a = r[0];                             
                $("input[name='codigo']").val(a.codigo);
                $("input[name='titulo']").val(a.titulo);
                $("input[name='autor']").val(a.autor);
                $("input[name='editora']").val(a.editora);
                $("input[name='corredor']").val(a.corredor);
                $("input[name='emprestimo']").val(a.emprestimo);
            });
        });

        $(".remover").click(function(){
         
           i = $(this).val();
           c = "codigo";
           t = "livro";
           p = {tabela: t, id:i, coluna:c}
           console.log(p);
           $.post("remover.php",p,function(r){
            if(r=='1'){                
                $("#msg").html("Livro removido com sucesso.");
                $("button[value='"+ i +"']").closest("tr").remove();
            }
           });
       }); 

       }

       define_alterar_remover();

       $(".salvar").click(function(){ 
           p = {
                codigo:$("input[name='codigo']").val(),
                titulo:$("input[name='titulo']").val(),
                autor:$("input[name='autor']").val(),
                editora:$("input[name='editora']").val(),
                corredor:$("input[name='corredor']").val(),
                emprestimo:$("input[name='emprestimo']").val(),
           };        
           
           $.post("atualizar_livro.php",p,function(r){
            if(r=='1'){
                $("#msg").html("Livro alterado com sucesso.");
                $(".close").click();
                atualizar_tabela();                
            }else{
                $("#msg").html("Falha ao atualizar livro.");
            }
           });
       }); 

       function atualizar_tabela(){           
        $.get("seleciona_livro.php",function(r){
            t = "";
            $.each(r,function(i,a){                 
                t += "<tr>";
                t +=    "<td>"+a.codigo+"</td>";
                t +=    "<td>"+a.titulo+"</td>";
                t +=    "<td>"+a.autor+"</td>";
                t +=    "<td>"+a.editora+"</td>";
                t +=    "<td>"+a.corredor+"</td>";
                t +=    "<td>"+a.emprestimo+"</td>";
                t +=    "<td>";
                t +=        "<button class='btn btn-warning alterar' value='"+a.codigo+"' data-toggle='modal' data-target='#modal'>Alterar</button>";
                t +=        " <button class='btn btn-danger remover' value='"+a.codigo+"'>Remover</button>";
                t +=    "</td>";
                t += "</tr>";
            });            
            $("#tbody_livro").html(t);
            define_alterar_remover();
        });
        }

    });

</script>