<?php
$operators = ['+', '-', '*', '/'];
?>
<form action="calculator_view.php" method="post"
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
</form>