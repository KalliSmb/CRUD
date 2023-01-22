<h1>Editar Utilizador</h1>
<?php
    $sql = "SELECT * FROM users WHERE id=".$_REQUEST["id"];

    $result = $conn->query($sql);

    $row = $result->fetch_object();
?>
<form action="?page=guardar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php $row->id; ?>">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="name" value="<?php print $row->name; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>