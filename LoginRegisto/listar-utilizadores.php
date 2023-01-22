<h1>Listar Utilizadores</h1>
<?php
    $sql = "SELECT * FROM users";

    $result = $conn->query($sql);

    $qtt = $result->num_rows;

    if($qtt > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $result->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->name."</td>";
            print "<td>".$row->email."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tens certeza que desejas deletar este utilizador?')){location.href='?page=guardar&acao=deletar&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Eliminar</button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'>Não foram encontrados resultados!</p>";
    }
?>