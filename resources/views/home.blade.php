<x-layout page="Todo Home">

    <x-slot:btn>
        <a href="{{ route('task.create') }}" class="btn btn-primary">
            Criar Tarefa
        </a>
        <a href="{{ route('logout') }}" class="btn btn-primary">
            Sair
        </a>
    </x-slot:btn>
    <section class="graph">
        <div class="graph-header">
            <h2>Progresso do dia</h2>
            <hr />
            <div class="graph-header-date">
                <a href="{{ route('home', ['date' => $date_prev_button]) }}">
                    <img src="/assets/images/icon-prev.png" alt="prev" />
                </a>
                {{ $date_as_string }}
                <a href="{{ route('home', ['date' => $date_next_button]) }}">
                    <img src="/assets/images/icon-next.png" alt="next" />
                </a>
            </div>
        </div>
        <div class="graph-header-subtitle">
            Tarefas: <strong>{{ $undone_tasks_count }}/{{ $tasks_count }}</strong>
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
            <select class="list-header-select" onchange="changeTaskStatusFilter(this)">
                <option value="all_task">Todas as tarefas</option>
                <option value="task_pending">Tarefas pendentes</option>
                <option value="task_done">Tarefas finalizadas</option>
            </select>
        </div>
        <div class="task-list">

            @foreach ($tasks as $task)
                <x-task :data=$task />
            @endforeach
        </div>
    </section>
    <script>
        function changeTaskStatusFilter(e) {
            if (e.value == 'task_pending') {
                showAllTask()
                document.querySelectorAll('.task_done').forEach(function(element) {
                    element.style.display = 'none';
                })
            } else if (e.value == 'task_done') {
                showAllTask()
                document.querySelectorAll('.task_pending').forEach(function(element) {
                    element.style.display = 'none';
                })
            } else {
                showAllTask()
            }
        }

        function showAllTask() {
            document.querySelectorAll('.task').forEach(function(element) {
                element.style.display = 'block';
            })
        }
    </script>
    <script>
        async function taskUpdate(element) {

            let status = element.checked;
            let taskId = element.dataset.id;
            let url = "{{ route('task.update') }}";
            let result = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json'
                },
                body: JSON.stringify({
                    status,
                    taskId,
                    _token: '{{ csrf_token() }}'
                })
            })

            response = await result.json();
            if (response.success) {
                alert('Task updated successfully');
            } else {
                element.checked = !status;
                alert('Task not updated');
            }
        }
    </script>
</x-layout>
