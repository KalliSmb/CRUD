<?php
    switch ($_REQUEST["acao"]) {
        case 'registar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);

            $sql = "INSERT INTO users (name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

            $result = $conn->query($sql);

            if($result==true){
                print "<script>alert('Registo efetuado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else{
                print "<script>alert('Não foi possível efetuar o registo.');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;
        case 'editar':
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);

            $sql = "UPDATE users SET name='{$name}', email='{$email}', password='{$password}' WHERE id=".$_REQUEST["id"];

            $result = $conn->query($sql);

            if($result==true){
                print "<script>alert('Utilizador editado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar o utilizador.');</script>";
                print "<script>location.href='?page=novo';</script>";
            }
            break;
        case 'eliminar':
            $sql = "DELETE FROM users WHERE id=".$_REQUEST["id"];

            $result = $conn->query($sql);

            if($result==true){
                print "<script>alert('Utilizador eliminado com sucesso!');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível eliminar o utilizador.');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
    }
?>