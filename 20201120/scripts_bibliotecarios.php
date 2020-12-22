<script>

    $(function(){

       function define_alterar_remover(){ 
       
        $(".alterar").click(function(){

            i = $(this).val();
            
            $.get("seleciona_bibliotecarios.php?id="+i,function(r){
                a = r[0];                             
                $("input[name='prontuario']").val(a.prontuario);
                $("input[name='nome']").val(a.nome);
                $("input[name='telefone']").val(a.telefone);
                $("input[name='email']").val(a.email);
                $("input[name='setor']").val(a.setor);
            });
        });

        $(".remover").click(function(){
         
           i = $(this).val();
           c = "prontuario";
           t = "bibliotecarios";
           p = {tabela: t, id:i, coluna:c}
           console.log(p);
           $.post("remover.php",p,function(r){
            if(r=='1'){                
                $("#msg").html("Bibliotecario removido com sucesso.");
                $("button[value='"+ i +"']").closest("tr").remove();
            }
           });
       }); 

       }

       define_alterar_remover();

       $(".salvar").click(function(){ 
           p = {
                prontuario:$("input[name='prontuario']").val(),
                nome:$("input[name='nome']").val(),
                telefone:$("input[name='telefone']").val(),
                email:$("input[name='email']").val(),
                setor:$("input[name='setor']").val(),
           };        
           
           $.post("atualizar_bibliotecarios.php",p,function(r){
            if(r=='1'){
                $("#msg").html("Bibliotecario alterado com sucesso.");
                $(".close").click();
                atualizar_tabela();                
            }else{
                $("#msg").html("Falha ao atualizar bibliotecario.");
            }
           });
       }); 

       function atualizar_tabela(){           
        $.get("seleciona_bibliotecarios.php",function(r){
            t = "";
            $.each(r,function(i,a){                 
                t += "<tr>";
                t +=    "<td>"+a.prontuario+"</td>";
                t +=    "<td>"+a.nome+"</td>";
                t +=    "<td>"+a.telefone+"</td>";
                t +=    "<td>"+a.email+"</td>";
                t +=    "<td>"+a.setor+"</td>";
                t +=    "<td>";
                t +=        "<button class='btn btn-warning alterar' value='"+a.prontuario+"' data-toggle='modal' data-target='#modal'>Alterar</button>";
                t +=        " <button class='btn btn-danger remover' value='"+a.prontuario+"'>Remover</button>";
                t +=    "</td>";
                t += "</tr>";
            });            
            $("#tbody_bilbiotecairos").html(t);
            define_alterar_remover();
        });
        }

    });

</script>