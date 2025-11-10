<?php include 'ajudantes.php';?>
<form action="<?php echo decidirAction(isset($tarefa) ? $tarefa : null); ?>" method="post">
    <fieldset>
        <legend>Nova tarefa</legend>
        <label>
            Tarefa:
            <input type="text" name="nome" placeholder="Titulo da tarefa" value="<?php echo isset($tarefa['nome']) ? $tarefa['nome'] : ''; ?>" />
        </label>
        <label>
            Descrição (Opcional):
            <textarea name="descricao" placeholder="Descrição da tarefa""><?php echo isset($tarefa['descricao']) ? $tarefa['descricao'] : ''; ?></textarea>
        </label>
        <label>
            Prazo (Opcional):
            <input type="date" name="prazo" value="<?php echo isset($tarefa['prazo']) ? $tarefa['prazo'] : ''; ?>" />
        </label>
    <fieldset>
        <legend>Prioridade:</legend>
        <input type="radio" name="prioridade" value="1" <?php echo (isset($tarefa['prioridade']) && $tarefa['prioridade'] == 1) ? 'checked' : ''; ?> />
            Baixa
        <input type="radio" name="prioridade" value="2" <?php echo (isset($tarefa['prioridade']) && $tarefa['prioridade'] == 2) ? 'checked' : ''; ?> />
            Média
        <input type="radio" name="prioridade" value="3" <?php echo (isset($tarefa['prioridade']) && $tarefa['prioridade'] == 3) ? 'checked' : ''; ?> />
            Alta
    </fieldset>
    <label>
        Tarefa concluída:
        <input type="checkbox" name="concluida" value="1" <?php echo (isset($tarefa['concluida']) && $tarefa['concluida'] == 1) ? 'checked' : ''; ?> />
    </label>
        <input type="submit" value="Cadastrar" />
    </fieldset>
</form>