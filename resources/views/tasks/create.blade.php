<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Task</title>

    @vite(['resources/css/app.css'])
</head>

<body>

<div class="page">

    <div class="form-container">


        <div class="form-header">

            <span class="label">TASK MANAGER</span>

            <h1>Add New Task</h1>

            <p>
                Create a task and keep your work organized.
            </p>

        </div>


        <div class="form-card">

            <form
                action="{{ route('tasks.store') }}"
                method="POST"
            >

                @csrf


                <div class="form-group">

                    <label for="task_name">
                        Task Name
                    </label>

                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        placeholder="What do you need to accomplish?"
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
                    ></textarea>

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

                            <option value="Pending">
                                Pending
                            </option>

                            <option value="Completed">
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
                        + Add Task
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

</body>
</html>