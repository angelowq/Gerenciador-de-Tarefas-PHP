<table>
    <tr>
        <th>Tarefa</th>
        <th>Descricao</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluída</th>
        <th>Opções</th>
    </tr>
    <?php
        global $mysqli;
        $result = $mysqli->query("SELECT * FROM tarefas");
    ?>
    <?php while ($tarefa = $result->fetch_assoc()) : ?>
    <tr>
        <td>
            <?php echo $tarefa['nome']; ?>
        </td>
        <td>
            <?php echo $tarefa['descricao']; ?>
        </td>
        <td>
            <?php echo traduzDataParaExibir($tarefa['prazo']); ?>
        </td>
        <td>
            <?php echo traduzPrioridade($tarefa['prioridade']); ?>
        </td>
        <td>
            <?php echo traduzConcluida($tarefa['concluida']); ?>
        </td>
        <td>
            <a href="editar.php?id=<?php echo $tarefa['id']; ?> ">Editar</a>
            <a href="remover.php?id=<?php echo $tarefa['id']; ?>">Remover</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>