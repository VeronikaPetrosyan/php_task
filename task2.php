<?php


/*Ստեղծել 2 զանգված: 1-ին զանգվածի տարրերը այբուբենի փոքրատառ և մեծատառ
[a-z] և [A-Z] տառերն են, երկրորդ զանգվածը 0-9 թվերը:
Ստեղծել form հետևյալ տեսքով. Գեներացնել սեղմելուց հետո ստեղծել  նշված քանակի սիմվոլներով և նշված պարամետրերով տող , օգտագործելով եղած երկու զանգվածները և տպել էկրանին:
Ստացված տողից առանձնացնել տառերը և թվերը ու տպել էկրանին:*/

$uppercase_letters = range('A', 'Z');
$lowercase_letters = range('a', 'z');
$all_letters = array_merge($lowercase_letters, $uppercase_letters);
$digits = range('0', '9');
$all_elements = array_merge($all_letters, $digits);


?>
    <form method="post">
        <input type="text" name="length" placeholder="The length of the string">
        <select name="your_option">
            <option value="" disabled selected>--- Choose ---</option>
            <option value="numbers">Numbers</option>
            <option value="letters">Letters</option>
            <option value="numbers_and_letters">Numbers and Letters</option>

        </select>

        <button type="submit" name="submit">Submit</button>
    </form>

<?php


if(isset($_POST['submit'])) {
    if (!empty($_POST['your_option'])) {
        $length = $_POST['length'];
        $selected = $_POST['your_option'];
        switch ($selected) {
            case "numbers":
                $numbersArray = array_rand(array_values($digits), $length);
                echo implode(", ", $numbersArray);
                break;

            case "letters":
                shuffle($all_letters);
                $randomLetters = array_slice($all_letters, 0, $length);
                echo implode(", ", $randomLetters);
                break;

            case "numbers_and_letters":
                shuffle($all_elements);
                $randomElements = array_slice($all_elements, 0, $length);
                $elementsString = implode(", ", $randomElements);
                echo implode(", ", $randomElements);

                $numbers = preg_replace('/[^0-9]/', '', $elementsString);
                $letters = preg_replace('/[^a-zA-Z]/', '', $elementsString);

                ?>
                <br> <br>
                <?php

                echo "Numbers - " .$numbers;

                ?>
                <br> <br>
                <?php

                echo "Letters - " .$letters;
                break;


        }
    }else {
        echo 'Please select the value.';
    }
};