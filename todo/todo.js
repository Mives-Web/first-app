const form = document.querySelector('#todo-form');
const todoInput =document.querySelector('#todo');
const todoList = document.querySelector('.list-group');
const firstCardBody = document.querySelector('.card-body')[0];
const secondCardBody = document.querySelector('.card-body')[1];
const clearButton= document.querySelector('#clear-todos');
eventListener();
function eventListener(){
    form.addEventListener("submit",addTodo);
}

function addTodo(e){
    const newTodo = todoInput.value.trim();

    addTodoToUI(newTodo);

    e.preventDefault();
}

function addTodoToUI(newTodo){
    const list = document.createElement('li');
    const link =document.createElement('a');
    link.href = '#';
    link.className = 'delete-item';
    link.innerHTML = '<i class = "fa fa-remove"></i>';
    list.className ='list-group-item d-flex justify-content-between';
    list.appendChild(document.createTextNode(newTodo));
    list.appendChild(link);

    todoList.appendChild(list);
    todoInput.value = "";
}