<?php

class Main
{
    private $total_income = 0;
    private $total_expense = 0;

    // income or expense array
    private $income_or_expenses = [];
    public function __construct()
    {
    }

    // get expense name
    public function get_income_or_expense($type)
    {
        $divider = "\n\n= = = = = = = = = = = = = = = = = = = = = = = =\n\n";
        $message = "): Shows " . $type . " Details.\n\n";
        $string = "";
        foreach ($this->income_or_expenses as $ie) {
            if ($ie['type'] === $type) {
                $string .= $ie['name'] . " -------> " . $ie['amount'] . "\n";
            }
        }
        return $divider . $message . $string . $divider;
    }

    // set expense name and amount
    public function set_income_or_expense($name, $amount, $type)
    {
        $key = $this->single_string($name);
        $this->income_or_expenses[$key] = array("name" => $name, "amount" => $amount, "type" => $type);
        if ($type === "Income") {
            $this->total_income += $amount;
            echo ":) Income added successfully.\n\n";
        } else {
            $this->total_expense += $amount;
            echo ":) Expense added successfully.\n\n";
        }

    }
    // get income amount
    public function get_saving_income()
    {
        return $this->total_income - $this->total_expense;
    }

    // create single string
    public function single_string(string $name)
    {
        $arr = explode(" ", $name);
        $single_str = implode("_", $arr);
        $random = rand(11, 100);
        return $single_str . strval($random);
    }

    // show category
    public function get_category()
    {
        $divider = "\n\n= = = = = = = = = = = = = = = = = = = = = = = =\n\n";
        $string = "): Shows All Category.\n\n";
        foreach ($this->income_or_expenses as $ie) {
            $string .= "Name: " . $ie['name'] . "    Type: " . $ie['type'] . "\n";
        }
        return $divider . $string . $divider;
    }
}

// create instance
$income_obj = new Main();
$close_program = false;
while (!$close_program) {

    echo "1. Add Income\n2. Add Expenses\n3. View Income\n4. View Expenses\n5. View Saving\n6. View Category\n7. Close\n";

    $case = 0;
    $option = false;
    while (!$option) {
        $intput = trim(readline("Enter your option: "));
        $case = intval($intput);
        if ($case > 0 && $case < 8) {
            $option = true;
        } else {
            echo "\n\t:( Opps! Incorrect Option. Please, choose correct option.\n\n";
        }
    }

    // different actions perform in different options
    switch ($case) {

        // add income
        case 1:
            $income_name = readline("\nEnter income category name: ");
            $income_amount = readline("\nEnter income amount: ");
            if (intval($income_amount) > 0) {
                $income_obj->set_income_or_expense($income_name, $income_amount, "Income");
            } else {
                echo "\n\t:( Opps! Incorrect. Must be add non zero positive integer.";
            }
            break;
        // add expenses
        case 2:
            $expense_name = readline("\nEnter expense category name: ");
            $expense_amount = readline("\nEnter expense amount: ");
            if (intval($expense_amount) > 0) {
                $income_obj->set_income_or_expense($expense_name, $expense_amount, "Expense");
            } else {
                echo "\n\t:( Opps! Incorrect. Must be add non zero positive integer.";
            }
            break;
        // show income
        case 3:
            echo $income_obj->get_income_or_expense("Income");
            break;
        // show expense
        case 4:
            echo $income_obj->get_income_or_expense("Expense");
            break;
        // Show total saving
        case 5:
            $divider = "\n\n= = = = = = = = = = = = = = = = = = = = = = = =\n\n";
            echo $divider . "): Total Saving ------->" . $income_obj->get_saving_income() . $divider;
            break;
        // Show category
        case 6:
            echo $income_obj->get_category();
            break;
        // close the program
        case 7:
            $close_program = true;
            break;
        default:
            echo "\n:( Opps! Something Wrong.";
    }
}

