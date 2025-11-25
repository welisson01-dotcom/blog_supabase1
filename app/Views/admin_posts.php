<?php require_once 'header.php'; ?>

<h1>Gerenciar Posts</h1>

<p>
    <a href="?url=post-novo">+ Criar Novo Post</a>
</p>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Capa</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($posts as $p): ?>
        <tr>
            <td><?php echo $p['id']; ?></td>

            <td><?php echo $p['title']; ?></td>

            <td>
                <img src="<?php echo $p['cover']; ?>" width="100">
            </td>

            <td>
                <a href="?url=post-editar&id=<?php echo $p['id']; ?>">Editar</a> |
                <a href="?url=post-excluir&id=<?php echo $p['id']; ?>">Excluir</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php require_once 'footer.php'; ?>