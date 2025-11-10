# Gerenciador-de-Tarefas-PHP

## Comando para criar as tabelas:
Copie e cole esse comando no phpmyadmin
```CREATE TABLE tarefas (
id INTEGER AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(20) NOT NULL,
descricao TEXT,
prazo DATE,
prioridade INTEGER(1),
concluida BOOLEAN
);```