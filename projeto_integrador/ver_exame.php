<?php
include_once('config/header.php');
?>
    <div class="corpo_geral">
        <form action="ver_exame.php.php" method="POST">
		<label style="margin-right: 10px;margin-left: 10px;"><b>Exames:</b></label><input type="text" name="pesquisa" style="width: 400px;">
		<input type="submit" value="Localizar" class="btn btn-primary button">
	</form>
        <br/>
        <table  class="table table-striped" style="color:black;">
		<tr class="row">
			<th class="col-md-1">
				<span><b>Cód.</b></span>			
			</th>	
			<th class="col-md-4">
				<span><b>Nome</b></span>			
			</th>
			<th class="col-md-4">
				<span><b>Tipo de exame</b></span>			
			</th>
			<th class="col-md-2">
				<span><b>Status</b></span>			
			</th>
			<th class="col-md-1">
				&nbsp;
			</th>
		</tr>
		<?php 
		    if (isset( $_POST['pesquisa'])){
			    include_once('controller/cadastro_exame.php');
			    $retorno = localizarExame( $_POST['pesquisa']);

			    for($i = 0; $i < count($retorno); $i++){
					echo "<tr class='row'>";
					echo "	<td class='col-md-1'>";
					echo "		<span>".$retorno[$i]['cod_ped']."</span>";
					echo "	</td>";
					echo "<td class='col-md-3'>";
					echo "		<span>".$retorno[$i]['nome_p']."</span>";			
					echo "</td>";
                                        echo "<td class='col-md-3'>";
                                        echo "		<span>".$retorno[$i]['cod_tp_ex']."</span>";
                                        echo "</td>";
					echo "<td class='col-md-2'>";
					echo "	<span>".$retorno[$i]['status']."</span>";
					echo "</td>";
					echo "<td class='col-md-3'>";
					echo "	<a href='?acao=ver&id=".$retorno[$i]['cod_ped']."'>Laudo </a>";
					echo "</td>";
					echo "</tr>";
				}
			}
		?>
	</table>
        
    </div>
<?php
include_once('config/footer.php');
?>  