-- Planejamento

Entidades e Relacionamentos

-- Usuário
--- Usuário x Tarefa
---- Um usuário pode criar várias tarefas
--- Usuário x Categorias
---- Um usuário pode ter várias categorias

-- Tarefas
--- Tarefa x Usuário
---- Uma tarefa sempre vai pertencer a um único usuário
--- Tarefa x Categorias
---- Uma tarefa SEMPRE vai pertencer a uma categoria

-- Categorias
--- Categoria x Tarefas
---- Uma categoria pode TER várias tarefas
--- Categoria x Usuário
---- Uma categoria sempre vai pertencer a um usuário

Detalhamento das migrations

-- Usuário:
--- Padrão do Laravel

-- Tarefa:
--- id
--- title
--- date
--- description
--- category_id
--- user_id

-- Categoria:
--- id
--- name
--- color
--- user_id
