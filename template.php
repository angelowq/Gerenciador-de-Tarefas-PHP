<html>
    <head>
        <meta charset="utf=8" />
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css"/>
    </head>
    <body>
        <h1>Gerenciador de Tarefas</h1>
        <form>
            <fieldset>
                <legend>Nova Tarefa</legend>
                <label>
                    Tarefa:
                    <input type="text" name="nome"/>
                </label>
                <label>
                    Descrição (Opcional):
                    <input type="text" name="descricao"/>
                </label>
                <label>
                    Prazo (Opcional):
                    <input type="text" name="prazo"/>
                </label>
                <fieldset>
                    <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name="prioridade" value="Baixa" checked/>
                        Baixa
                        <input type="radio" name="prioridade" value="Média"/>
                        Média
                        <input type="radio" name="prioridade" value="Alta"/>
                        Alta
                    </label>
                </fieldset>
                <label>
                    Tarefa Concluída:
                    <input type="checkbox" name="concluida" value="Sim"/>
                </label>
                <input type="submit" value="Cadastrar"/>
            </fieldset>
        </form>
        <table>
            <tr>
                <th>Tarefas</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Concluída</th>
            </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
                <tr>
                    <td><?php echo $tarefa['nome']; ?></td>
                    <td><?php echo $tarefa['descricao']; ?></td>
                    <td><?php echo $tarefa['prazo']; ?></td>
                    <td><?php echo $tarefa['prioridade']; ?></td>
                    <td><?php echo $tarefa['concluida']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>