<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Task Manager</title>

    @vite(['resources/css/app.css'])
</head>

<body>

<div class="page">

    <div class="container">

        <div class="header">

            <div>
                <span class="label">TASK MANAGER</span>

                <h1>Personal Task Manager</h1>

                <p>Organize your tasks and stay productive.</p>
            </div>

            <a href="{{ route('tasks.create') }}" class="btn btn-primary">
                + Add Task
            </a>

        </div>

        @if(session('success'))

            <div class="success-message">
                ✓ {{ session('success') }}
            </div>

        @endif

        <div class="stats">

            <div class="stat-card">
                <span class="stat-icon">📋</span>

                <div>
                    <span>Total Tasks</span>
                    <strong>{{ $tasks->count() }}</strong>
                </div>
            </div>


            <div class="stat-card">
                <span class="stat-icon">⏳</span>

                <div>
                    <span>Pending</span>
                    <strong>
                        {{ $tasks->where('status', 'Pending')->count() }}
                    </strong>
                </div>
            </div>


            <div class="stat-card">
                <span class="stat-icon">✓</span>

                <div>
                    <span>Completed</span>
                    <strong>
                        {{ $tasks->where('status', 'Completed')->count() }}
                    </strong>
                </div>
            </div>

        </div>

        <div class="card">

            <div class="card-header">

                <div>
                    <h2>My Tasks</h2>

                    <p>
                        {{ $tasks->count() }}
                        {{ $tasks->count() == 1 ? 'task' : 'tasks' }}
                    </p>
                </div>

            </div>


            @if($tasks->count() > 0)

                <div class="table-wrapper">

                    <table>

                        <thead>
                            <tr>
                                <th>Task</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Due Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        @foreach($tasks as $task)

                            <tr>

                                <td>
                                    <strong>
                                        {{ $task->task_name }}
                                    </strong>
                                </td>


                                <td>
                                    <span class="description">
                                        {{ $task->description ?: 'No description' }}
                                    </span>
                                </td>


                                <td>

                                    @if($task->status === 'Completed')

                                        <span class="status completed">
                                            ✓ Completed
                                        </span>

                                    @else

                                        <span class="status pending">
                                            ⏳ Pending
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    @if($task->due_date)

                                        {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}

                                    @else

                                        <span class="no-date">
                                            No date
                                        </span>

                                    @endif

                                </td>


                                <td>

                                    <div class="actions">

                                        <a
                                            href="{{ route('tasks.edit', $task->id) }}"
                                            class="action edit"
                                        >
                                            Edit
                                        </a>


                                        <form
                                            action="{{ route('tasks.destroy', $task->id) }}"
                                            method="POST"
                                        >

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="action delete"
                                                onclick="return confirm('Delete this task?')"
                                            >
                                                Delete
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="empty">

                    <div class="empty-icon">
                        📋
                    </div>

                    <h3>No tasks yet</h3>

                    <p>Create your first task to get started.</p>

                    <a
                        href="{{ route('tasks.create') }}"
                        class="btn btn-primary"
                    >
                        + Create Task
                    </a>

                </div>

            @endif

        </div>

    </div>

</div>

</body>
</html>