<?php
    function traduzPrioridade($tarefa) {
        if ($tarefa == 1) {
            return "Baixa";
        } 
        if ($tarefa == 2) {
            return "Média";
        } 
        return "Alta";
    }

    function traduzConcluida($data) {
        if ($data == 1) {
            return "Sim";
        } 
        return "Não";
    }

    function traduzDataParaExibir($data){
        if ($data == "" OR $data == "0000-00-00") {
            return "";
        } 
        $dados = explode("-", $data);
        $data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
        return $data_exibir;
    }

    function decidirAction($tarefa) {
        if (isset($tarefa['id'])) {
            return "editar.php?id={$tarefa['id']}";
        }
        return "tarefas.php";
    }

?>