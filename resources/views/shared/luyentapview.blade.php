<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<h2 class="text-center">To-Do List</h2> 
<div class="container">

    <div class="border border-dark border-bottom-0 rounded-top p-3" style="background-color: #858585">
        <h5 class="p-0 m-0">New task</h5>
    </div>
    <div class=" border border-dark rounded-bottom p-3">
        <input class="mb-2 p-2" type="text" id="taskInput" placeholder="Add new task" style="width: 100%">
        <button class="border-1 rounded-2 p-1 px-2" onclick="addTask()">+ Add Task</button>
    </div>
</div>

<div class="container mt-2">
    <div class="border border-dark border-bottom-0 rounded-top p-3 m-0" style="background-color: #858585">
        <h5 class="p-0 m-0">Current task</h5>
    </div>
    <div class=" row border border-dark border-bottom-0  p-3 m-0">
        <p class="col-10 p-0 m-0 p-0" >Đây là task đầu tiên trong source code này</p>
        <button class=" col-1 border-1 bg-danger text-light rounded-2 p-1 px-2" onclick="addTask()">Delete</button>
    </div>
    <div class=" row border border-dark border-bottom-0 p-3 m-0">
        <p class="col-10 p-0 m-0 p-0" >Đây là task đầu tiên trong source code này</p>
        <button class=" col-1 border-1 bg-danger text-light rounded-2 p-1 px-2" onclick="addTask()">Delete</button>
    </div><div class=" row border border-dark p-3 m-0">
        <p class="col-10 p-0 m-0 p-0" >Đây là task đầu tiên trong source code này</p>
        <button class=" col-1 border-1 bg-danger text-light rounded-2 p-1 px-2" onclick="addTask()">Delete</button>
    </div>
   
</div>
