<?php
include_once('config/header.php');
?>
    <div class="corpo_geral">
        <form action="registro_exame.php" method="POST">
		<label style="margin-right: 10px;margin-left: 10px;"><b>Localizar Exames:</b></label><input type="text" name="pesquisa" style="width: 400px;">
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
				<span><b>Quantidade de amostra</b></span>			
			</th>
			<th class="col-md-2">
				<span><b>Material</b></span>			
			</th>
			<th class="col-md-3">
				&nbsp;
			</th>
		</tr>
		<?php 
		    if (isset( $_POST['pesquisa'])){
			    include_once('controller/exame.php');
			    $retorno = localizarExame( $_POST['pesquisa']);

			    for($i = 0; $i < count($retorno); $i++){
					echo "<tr class='row'>";
					echo "	<td class='col-md-1'>";
					echo "		<span>".$retorno[$i]['cod_tp_ex']."</span>";
					echo "	</td>";
					echo "<td class='col-md-3'>";
					echo "		<span>".$retorno[$i]['nome_ex']."</span>";			
					echo "</td>";                            
                                        echo "<td class='col-md-3'>";
                                        echo "		<span>".$retorno[$i]['qtd_amostra']."</span>";
                                        echo "</td>";
					echo "<td class='col-md-2'>";
					echo "	<span>".$retorno[$i]['material_analise']."</span>";
					echo "</td>";
					echo "<td class='col-md-3'>";
					echo "	<a href='?acao=del&id=".$retorno[$i]['cod_tp_ex']."'>Excluir </a>|<a href='?acao=alt&id=".$retorno[$i]['cod_tp_ex']."'> Alterar</a>";
					echo "</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
        
    </div>
<?php
include_once('config/footer.php');
include_once('controller/exame.php');
if (isset($_REQUEST['acao'])){
	    if ($_REQUEST['acao'] == "del"){
	    	excluirExame($_REQUEST['id']);
		}
		else if ($_REQUEST['acao'] == "alt"){
			echo "<script>document.location.href='cadastro_exame.php?id=".$_REQUEST['id']."'</script>";
		}
	}
?>  

