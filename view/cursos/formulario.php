<?php include __DIR__ . "/../inicio-html.php";?>

    <a href="/novo-curso" class="btn btn-primary mb-2">Novo Curso</a>

    <form action="/salvar-curso<?= isset($curso)? '?id=' . $curso->getId(): '';?>" method="post">
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" id="descricao" value="<?= isset($curso) ? $curso->getDescricao(): ''; ?>" name="descricao" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php include __DIR__ . "/../fim-html.php";?>
