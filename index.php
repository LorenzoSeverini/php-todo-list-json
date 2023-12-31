<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list Json</title>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-dark">

    <div id="app">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1 class="text-center text-white mb-4">List of summer fruits 🍉🍇🍊</h1>
                    <ul class="list-group">
                        <li class="list-group-item bg-dark text-white" v-for="(item, index) in apiData" :key="item.name">
                            <div class="d-flex justify-content-between">
                                <p>{{ item.name }} - {{ item.color }} - {{ item.taste }}</p>
                                <button @click="deleteItem(item)" class="btn btn-danger fa-regular fa-trash-can fa-xs"></button>
                            </div>
                        </li>
                        <!-- input for add new task -->
                        <input class="form-control mt-4" type="text" placeholder="Add new fruit" v-model="newTask.name">
                        <input class="form-control mt-4" type="text" placeholder="Add color" v-model="newTask.color">
                        <input class="form-control mt-4" type="text" placeholder="Add taste" v-model="newTask.taste">
                        <!-- buttons for add new task and delete all tasks -->
                        <button class="btn btn-success mt-4" @click="addNewTask">Add new 🍉</button>
                        <button class="btn btn-danger mt-4" @click="deleteAllTasks">Delete all</button>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>