<?php include "header.php"?>
<?php 

//interação
if( isset($_GET["pesquisa"]) )
{
      //Se a variavel estiver vazia executa aqui     
    $pesquisa = "";
    $pesquisa = $_GET["pesquisa"];

      include "Banco.php";
      $sql = "Select ID, Nome,telefone from Professor order by Id desc";
      $resultado = $conexao->query($sql);
      
      $conexao->close();

}else
{
    //Pesquisar o Professor ligado com o Aluno 
    $pesquisa = "";
    
}

?>
<br>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista Professores
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="professor.php" class="btn btn-success" >
                            Agregar Professor
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="professor.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Digite sua pesquisa aqui..." />
                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Atividades</th>
                                <th scope="col">Contato</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
 //                               if ($resultado->num_rows > 0) {
   //                                 while($row = $resultado->fetch_assoc()) {
     //                                   echo "<tr>";
       //                                 echo "<td>" . $row["Nome"] . "</td>";
         //                               echo "<td>" . $row["Disciplina"] . "</td>";
           //                             echo "<td>" . $row["Atividades"] . "</td>";
             //                           echo "<td>" . $row["Contato"] . "</td>";                                     
                   //                     echo "<td><a href='editar_produto.php?Id=$row[Id]' class='btn btn-warning' >Editar</a>  ";
                     //                   echo "<a href='excluir_produto.php?Id=$row[Id]' class='btn btn-danger'>Excluir</a></td>";
                       //                 echo "</tr>";
                  //                  }
                    //            } else {
                      //              echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                        //        }
                            ?>
                                                    
                        </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
