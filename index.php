<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do list Json</title>

    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/3.3.4/vue.cjs.js" integrity="sha512-Om0T2d9tl4H2ShSsEkWjJeQOlXGJg4OZvXKZw075refp2RNZ1avQDbqd6WhwGbWhqpcn2oPmExCEa/lSLzZaJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- css -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js" integrity="sha512-3dZ9wIrMMij8rOH7X3kLfXAzwtcHpuYpEgQg1OA4QAob1e81H8ntUQmQm3pBudqIoySO5j0tHN4ENzA6+n2r4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div id="data">
        <!-- html -->
        <h1>{{ message }}</h1>
        <button @click="fetchData">Fetch Data</button>
        <ul>
            <li v-for="item in items" :key="item.id">{{ item.name }}</li>
        </ul>
        <input v-model="inputText" type="text">
        <p>You typed: {{ inputText }}</p>
    </div>

    <!-- js -->
    <script src="./main.js"></script>
</body>

</html>