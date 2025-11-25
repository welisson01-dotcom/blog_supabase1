<?php require_once 'header.php'; ?>
<h1>Novo Post</h1>

<form action="?url=post-salvar" method="POST" enctype="multipart/form-data">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>

    <label>Título:</label><br>
    <texttares name="conteudo" rows="5" cols="40" required></textares><br><br>

    <label>Imagem de capa:</label><br>
    <input type="file" name="capa" required><br><br>
     
    <button type="submit">Salvar</button>
</form>

<?php require_once 'footer.php'; ?>

    