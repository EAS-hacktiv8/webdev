/**
 * Todo list object:
 * {
 *   key: unique string, using crypto.randomUUID(), stored in <li> attributes
 *   text: todo list text
 * }
 */

function initializeTask() {
    let savedTasks = localStorage.getItem("tasks");
    let savedTasksArray = JSON.parse(savedTasks) || [];
    let todoList = document.getElementById("todo-list");

    savedTasksArray.forEach(savedTask => {
        let li = document.createElement("li");
        li.className = "list-group-item align-items-center";
        li.setAttribute("key", savedTask.key);

        let button = document.createElement("button");
        button.className = "btn btn-danger"
        button.innerText = "X"
        button.addEventListener("click", function () {
            removeTask(li);
        });
    
        let taskLabel = document.createElement("label");
        taskLabel.textContent = savedTask.text;
        taskLabel.style.marginLeft = "4px";

        li.appendChild(button);
        li.appendChild(taskLabel);
        todoList.appendChild(li);
    });
}

initializeTask();

function addTask() {
    let newTaskInput = document.getElementById("new-task");
    let taskText = newTaskInput.value;

    if (taskText.trim() === "") {
        alert("Tugas tidak boleh kosong!");
        return;
    }

    let todoList = document.getElementById("todo-list");
    let todoKey = crypto.randomUUID();
    let todoObject = {
        key: todoKey,
        text: taskText
    }

    let li = document.createElement("li");
    li.className = "list-group-item align-items-center";
    li.setAttribute("key", todoObject.key);

    let button = document.createElement("button");
    button.className = "btn btn-danger"
    button.innerText = "X"
    button.addEventListener("click", function () {
        removeTask(li);
    });

    let taskLabel = document.createElement("label");
    taskLabel.textContent = todoObject.text;
    taskLabel.style.marginLeft = "4px";

    li.appendChild(button);
    li.appendChild(taskLabel);
    todoList.appendChild(li);
    let savedTasks = localStorage.getItem("tasks") ?? '[]';
    let savedTasksArray = JSON.parse(savedTasks);
    savedTasksArray.push(todoObject);
    localStorage.setItem("tasks", JSON.stringify(savedTasksArray));

    newTaskInput.value = "";
}

function removeTask(taskElement) {
    let todoList = document.getElementById("todo-list");
    let removedTaskKey = taskElement.getAttribute("key") ?? "";
    let removedTask = taskElement.children[1].innerText;
    todoList.removeChild(taskElement);
    let savedTasks = localStorage.getItem("tasks") ?? '[]';
    let savedTasksArray = JSON.parse(savedTasks);
    let result = savedTasksArray.filter((tasks) => tasks.key !== removedTaskKey);
    localStorage.setItem("tasks", JSON.stringify(result));
}
