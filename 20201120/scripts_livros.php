<script>

    $(function(){

       function define_alterar_remover(){ 
       
        $(".alterar").click(function(){

            i = $(this).val();
            
            $.get("seleciona_livros.php?id="+i,function(r){
                a = r[0];                             
                $("input[name='codigo']").val(a.codigo);
                $("input[name='titulo']").val(a.titulo);
                $("input[name='autor']").val(a.autor);
                $("input[name='editora']").val(a.editora);
                $("input[name='setor']").val(a.setor);
            });
        });

        $(".remover").click(function(){
         
           i = $(this).val();
           c = "codigo";
           t = "livros";
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
                setor:$("input[name='setor']").val(),
           };        
           
           $.post("atualizar_livros.php",p,function(r){
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
        $.get("seleciona_livros.php",function(r){
            t = "";
            $.each(r,function(i,a){                 
                t += "<tr>";
                t +=    "<td>"+a.codigo+"</td>";
                t +=    "<td>"+a.titulo+"</td>";
                t +=    "<td>"+a.autor+"</td>";
                t +=    "<td>"+a.editora+"</td>";
                t +=    "<td>"+a.setor+"</td>";
                t +=    "<td>";
                t +=        "<button class='btn btn-warning alterar' value='"+a.codigo+"' data-toggle='modal' data-target='#modal'>Alterar</button>";
                t +=        " <button class='btn btn-danger remover' value='"+a.codigo+"'>Remover</button>";
                t +=    "</td>";
                t += "</tr>";
            });            
            $("#tbody_livros").html(t);
            define_alterar_remover();
        });
        }

    });

</script>