<?php
include_once('config/header.php');
include_once('controller/pedido.php');
?>
    <div class="corpo_geral">
        <form action="pedidos.php" method="POST">
		<span style="margin-right: 10px;margin-left: 10px;"><b>Mostrar pedidos</b></span>
                <input type="text" name="pesquisa" style="width: 400px;">
                <input type="button" class="btn btn-primary button" name="btn_pesquisa" value="Pesquisar">

	</form>
        <br/>
        <table  class="table table-striped" style="color:black;">
		<tr class="row">
			<th class="col-md-1">
				<span><b>Cód.</b></span>			
			</th>	
			<th class="col-md-4">
				<span><b>Exame</b></span>			
			</th>
			<th class="col-md-3">
				<span><b>Quantidade de amostra</b></span>			
			</th>
			<th class="col-md-2">
				<span><b>Material</b></span>			
			</th>
			<th class="col-md-2">
				&nbsp;
			</th>
		</tr>
		<?php 
		    if (isset( $_POST['pesquisa'])){
			    include_once('controller/pedido.php');
			    $retorno = localizarPedido();

			    for($i = 0; $i < count($retorno); $i++){
					echo "<tr class='row'>";
					echo "	<td class='col-md-1'>";
					echo "		<span>".$retorno[$i]['cod_ped']."</span>";
					echo "	</td>";
					echo "<td class='col-md-4'>";
					echo "		<span>".$retorno[$i]['nome_ex']."</span>";			
					echo "</td>";
                                        echo "<td class='col-md-3'>";
                                        echo "		<span>".$retorno[$i]['qtd_amostra']."</span>";
                                        echo "</td>";    
					echo "<td class='col-md-2'>";
					echo "	<span>".$retorno[$i]['material_analise']."</span>";
					echo "</td>";
					echo "<td class='col-md-2'>";
					echo "	<a href='?acao=del&id=".$retorno[$i]['cod_ped']."'>Laudo </a>";
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