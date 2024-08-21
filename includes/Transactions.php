<?php

namespace App;

use PDO;
use PDOException;

class Transactions
{
    public static function create(array $sender, array $receiver, int $transfer_balance)
    {
        $conn = Connection::__self();
        try {
            if (Utilities::DbTableExists("transactions")) {
                $sql_table_create = "CREATE TABLE transactions (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(50) NOT NULL,
                    email VARCHAR(50),
                    amount INT(10),
                    transfer_type ENUM ('sent', 'received') NOT NULL,
                    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                    )";
                $conn->exec($sql_table_create);
                // echo "User Table created successfully.";
            }

            $sender_id = $sender["id"];
            $sender_name = $sender["name"];
            $sender_email = $sender["email"];
            $sender_amount = $sender["amount"];
            $insert_sender_data = "INSERT INTO transactions (name, email, amount, transfer_type) VALUES ('{$sender_name}', '{$sender_email}', '{$transfer_balance}', 'sent')";

            $receiver_id = $receiver["id"];
            $receiver_name = $receiver["name"];
            $receiver_email = $receiver["email"];
            $receiver_amount = $receiver["amount"];
            $insert_receiver_data = "INSERT INTO transactions (name, email, amount, transfer_type) VALUES ('{$receiver_name}', '{$receiver_email}', '{$transfer_balance}', 'received')";

            $conn->exec($insert_sender_data);
            $conn->exec($insert_receiver_data);
            // $conn->commit();

            echo "New records created successfully";

            // balance update for sender
            $sender_new_balance = $sender_amount - $transfer_balance;
            Balance::update($sender_id, $sender_new_balance);
            // balance update for receiver
            $receiver_new_balance = $receiver_amount + $transfer_balance;
            if ($receiver_amount <= 0) {
                Balance::add($receiver_new_balance, $receiver_id);
            } else {
                Balance::update($receiver_id, $receiver_new_balance);
            }

        } catch (PDOException $e) {
            die("Oops! Something is Wrong User Table not Created. Exception Message -> " . $e->getMessage());
        }
    }


    public static function getAll()
    {
        $conn = Connection::__self();
        try {
            $statement = $conn->prepare("SELECT * FROM transactions");
            $statement->execute();
            $conn = null;
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Oops! Something is Wrong, could not find any Transaction. Exception Message -> " . $e->getMessage());
        }
    }


    public static function getOwnedBy(string $email)
    {
        $conn = Connection::__self();
        try {
            $statement = $conn->prepare("SELECT * FROM transactions WHERE email = :email");
            $statement->bindParam(":email", $email, PDO::PARAM_STR);
            $statement->execute();
            $conn = null;
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Oops! Something is Wrong, could not find any Transaction. Exception Message -> " . $e->getMessage());
        }
    }
}