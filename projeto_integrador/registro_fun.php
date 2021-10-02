<?php
include_once('config/header.php');
?>
    <div class="corpo_geral">
        <form action="registro_fun.php" method="POST">
		<label style="margin-right: 10px;margin-left: 10px;"><b>Localizar Funcionarios:</b></label><input type="text" name="pesquisa" style="width: 400px;">
		<input type="submit" value="Localizar" class="btn btn-primary button">
	</form>
        <br/>
        <table  class="table table-striped" style="color:black;">
		<tr class="row">
			<th class="col-md-1">
				<span><b>Cód.</b></span>			
			</th>	
			<th class="col-md-3">
				<span><b>Nome</b></span>			
			</th>
			<th class="col-md-3">
				<span><b>Tipo de usuário</b></span>			
			</th>
			<th class="col-md-2">
				<span><b>Telefone</b></span>			
			</th>
			<th class="col-md-3">
				&nbsp;
			</th>
		</tr>
		<?php 
		    if (isset( $_POST['pesquisa'])){
			    include_once('controller/funcionario.php');
			    $retorno = localizarFuncionario( $_POST['pesquisa']);

			    for($i = 0; $i < count($retorno); $i++){
					echo "<tr class='row'>";
					echo "	<td class='col-md-1'>";
					echo "		<span>".$retorno[$i]['cod_fun']."</span>";
					echo "	</td>";
					echo "<td class='col-md-3'>";
					echo "<span>".$retorno[$i]['nome_f']."</span>";			
					echo "</td>";
                                        echo "<td class='col-md-3'>";
                                        echo "<span>".$retorno[$i]['tp_usuario']."</span>";
                                        echo "</td>"; 
					echo "<td class='col-md-2'>";
					echo "	<span>".$retorno[$i]['tel_f']."</span>";
					echo "</td>";
					echo "<td class='col-md-3'>";
					echo "	<a href='?acao=del&id=".$retorno[$i]['cod_fun']."'>Excluir </a>|<a href='?acao=alt&id=".$retorno[$i]['cod_fun']."'> Alterar</a>";
					echo "</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
        
    </div>
<?php
include_once('config/footer.php');
include_once ('controller/funcionario.php');

if (isset($_REQUEST['acao'])){
    $cod = $_REQUEST['id'];
	    if ($_REQUEST['acao'] == "del"){
	    	excluirFuncionario($cod);
		}
		else if ($_REQUEST['acao'] == "alt"){
			echo "<script>document.location.href='cadastro_fun.php?id=".$_REQUEST['id']."'</script>";
		}
	}
?>  