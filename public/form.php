<?php
$operators = ['+', '-', '*', '/'];
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$operatorIndex = 0;
?>
<!-- <form action="calculator_view.php" method="post"
    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="numberOne">
            first Number
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="numberOne"
            name="numberOne" 
            type="number" 
            placeholder="Enter the first Number" 
        />
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="numberTwo">
            second Number
        </label>
        <input 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="numberTwo" 
            name="numberTwo"
            type="number" 
            placeholder="Enter the second Number" 
        />
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="operator">
            Operator
        </label>
        <select 
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
            id="operator"
            name="operator">
            <?php foreach ($operators as $operator) : ?>
                <option value="<?php echo $operator; ?>"><?php echo $operator; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover :bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" 
                type="submit">Calculate Result 
        </button>
    </div>
</form> -->
<form action="calculator_view.php" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4 flex gap-4">
        <div class="input_cs">
            <input 
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                id="display"
                name="display" 
                type="text" 
                readonly
            />
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2" 
                    type="submit"
                    onclick="resetDisplay()">
                Reset
        </button>
    </div>
    <div class="flex gap-4">
        <div class="grid grid-cols-3 gap-4">
            <?php foreach ($numbers as $number): ?>
            <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" 
                    onclick="appendToDisplay('<?php echo $number; ?>')">
                    <?php echo $number; ?>
            </button>
            <?php endforeach; ?>
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2" 
                    type="submit">
                Calculate 
            </button>
           
        </div>
        <div class="flex flex-col gap-4 ">
            <?php foreach ($operators as $operator): ?>
                <button type="button" class="operator-button bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded " 
                        onclick="appendToDisplay('<?php echo $operator; ?>')">
                        <?php echo $operator; ?>
                </button>
            <?php endforeach; ?>
        </div>
    </div>
</form>

<script>
    function appendToDisplay(value) {
        document.getElementById('display').value += value;
    }

    function resetDisplay() {
        document.getElementById('display').value = '';
    }
</script>