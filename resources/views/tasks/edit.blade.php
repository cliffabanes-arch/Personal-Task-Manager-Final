<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task</title>

    @vite(['resources/css/app.css'])
</head>

<body>

<div class="page">

    <div class="form-container">


        <div class="form-header">

            <span class="label">TASK MANAGER</span>

            <h1>Edit Task</h1>

            <p>
                Update your task and keep everything organized.
            </p>

        </div>


        <div class="form-card">

            <form
                action="{{ route('tasks.update', $task->id) }}"
                method="POST"
            >

                @csrf
                @method('PUT')


                <div class="form-group">

                    <label for="task_name">
                        Task Name
                    </label>

                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        value="{{ $task->task_name }}"
                        placeholder="Enter your task name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        placeholder="Add details about your task..."
                    >{{ $task->description }}</textarea>

                </div>


                <div class="form-row">

                    <div class="form-group">

                        <label for="status">
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                        >

                            <option
                                value="Pending"
                                {{ $task->status == 'Pending' ? 'selected' : '' }}
                            >
                                Pending
                            </option>

                            <option
                                value="Completed"
                                {{ $task->status == 'Completed' ? 'selected' : '' }}
                            >
                                Completed
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="due_date">
                            Due Date
                        </label>

                        <input
                            type="date"
                            id="due_date"
                            name="due_date"
                            value="{{ $task->due_date }}"
                        >

                    </div>

                </div>

                <div class="form-actions">

                    <a
                        href="{{ route('tasks.index') }}"
                        class="btn btn-secondary"
                    >
                        Cancel
                    </a>

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Save Changes
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>