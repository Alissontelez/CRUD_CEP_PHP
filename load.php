<?php
require "crud-cep.php";
?>
    
    <table class="table" id="tb1">
        <thead>
            <tr>
                <th>#</th>                    
                <th>CEP</th>                    
                <th>Rua</th>            
                <th>Bairro</th>            
                <th>Cidade</th>            
                <th>Estado</th>                
                <th colspan="2">Ação</th>                    
            </tr>
        </thead>            
            <?php
                $rows = mysqli_query($mysqli, "SELECT * FROM table_one");
                $i = 1;
                $totalrows = mysqli_num_rows($rows);
                if ($totalrows > 0){
            ?>
            <?php 
            foreach($rows as $row) : ?>
                <tr id = <?php echo $row['id']; ?>>
                    <td><?php echo $i++; ?></td>
                    <td data-target="cep"><?php echo $row["cep"]; ?></td>
                    <td data-target="rua"><?php echo $row["rua"]; ?></td>
                    <td data-target="bairro"><?php echo $row["bairro"]; ?></td>
                    <td data-target="cidade"><?php echo $row["cidade"]; ?></td>
                    <td data-target="uf"><?php echo $row["uf"]; ?></td>
                    <td>
                        <a class="btn btn-secondary edit_data" id="<?php echo $row['id']; ?>">Editar</a>
                        <a class="btn btn-danger deletarid" id="<?php echo $row['id']; ?>">Deletar</a>
                    </td>
                </tr>
            <?php endforeach;}else{
                echo "<script>$('#tb1').hide();</script>";
                echo 'Não há registros';}
            ?> 
    </table>