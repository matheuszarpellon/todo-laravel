<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>TodoApp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/style.css" />
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <img src="/assets/images/logo.png" alt="logo">
        </aside>
        <div class="content">
            <nav>
                <a href="#" class="btn btn-primary">
                    Criar Tarefa
                </a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph-header">
                        <h2>Progresso do dia</h2>
                        <hr />
                        <div class="graph-header-date">
                            <img src="/assets/images/icon-prev.png" alt="prev" />
                            13 de Dez
                            <img src="/assets/images/icon-next.png" alt="next" />
                        </div>
                    </div>
                    <div class="graph-header-subtitle">
                        Tarefas: <strong>3/6</strong>
                    </div>
                    <div class="graph-placeholder">
                    </div>
                    <div class="tasks-left-footer">
                        <img src="/assets/images/icon-info.png" alt="">
                        Restam 3 tarefas para serem realizadas
                    </div>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select class="list-header-select">
                            <option value="1">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="task-list">
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="" />
                                <div class="task-title">Titulo da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Prioridade</div>
                            </div>
                            <div class="actions">
                                <a href="#"><img src="/assets/images/icon-edit.png" alt=""></a>
                                <a href="#"><img src="/assets/images/icon-delete.png" alt=""></a>

                            </div>
                        </div>
                        <div class="task">
                            <div class="title">
                                <input type="checkbox" name="" id="" />
                                <div class="task-title">Titulo da tarefa</div>
                            </div>
                            <div class="priority">
                                <div class="sphere"></div>
                                <div>Prioridade</div>
                            </div>
                            <div class="actions">
                                <a href="#"><img src="/assets/images/icon-edit.png" alt=""></a>
                                <a href="#"><img src="/assets/images/icon-delete.png" alt=""></a>

                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </div>
    </div>
</body>

</html>
