<script>

    $(function(){

       function define_alterar_remover(){ 
       
        $(".alterar").click(function(){

            i = $(this).val();
            
            $.get("seleciona_alunos.php?id="+i,function(r){
                a = r[0];                               
                $("input[name='prontuario']").val(a.prontuario);
                $("input[name='nome']").val(a.nome);
                $("input[name='email']").val(a.email);
                $("input[name='telefone']").val(a.telefone);
            });
        });

        $(".remover").click(function(){
         
           i = $(this).val();
           c = "prontuario";
           t = "alunos";
           p = {tabela: t, id:i, coluna:c}
           console.log(p);
           $.post("remover.php",p,function(r){
            if(r=='1'){                
                $("#msg").html("Aluno removido com sucesso.");
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
                email:$("input[name='email']").val(),
                telefone:$("input[name='telefone']").val(),
           };        
           
           $.post("atualizar_alunos.php",p,function(r){
            if(r=='1'){
                $("#msg").html("Aluno alterado com sucesso.");
                $(".close").click();
                atualizar_tabela();                
            }else{
                $("#msg").html("Falha ao atualizar aluno.");
            }
           });
       }); 

       function atualizar_tabela(){           
        $.get("seleciona_alunos.php",function(r){
            t = "";
            $.each(r,function(i,a){                 
                t += "<tr>";
                t +=    "<td>"+a.prontuario+"</td>";
                t +=    "<td>"+a.nome+"</td>";
                t +=    "<td>"+a.email+"</td>";
                t +=    "<td>"+a.telefone+"</td>";
                t +=    "<td>";
                t +=        "<button class='btn btn-warning alterar' value='"+a.prontuario+"' data-toggle='modal' data-target='#modal'>Alterar</button>";
                t +=        " <button class='btn btn-danger remover' value='"+a.prontuario+"'>Remover</button>";
                t +=    "</td>";
                t += "</tr>";
            });            
            $("#tbody_alunos").html(t);
            define_alterar_remover();
        });
        }

    });

</script>