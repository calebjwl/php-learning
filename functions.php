<?php

function connectToDB() {
  // Try to connect to our db, catch any exception and display error message
  try {
    return $pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
  } catch (PDOException $e) {
    die($e->getMessage()); // calling getMessage() method of object $e
  }
}

function fetchAllTasks($pdo) {
  // Prepare sql query
  $statement = $pdo->prepare('select * from todos');

  // Execute statement
  $statement->execute();

  // Fetch and return all of the results in memory, fetch a class 'Task'
  return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}


function dd($value) {
  echo '<pre>';
  die(var_dump($value));
  echo '</pre>';
};

function checkAge($age) {
  if ($age > 21) {
    echo "Come on in ya bish";
  } else {
    echo "Get the fuck out you pleb";
  }
}

// $tasks = [
//   new Task('Go to the store'),
//   new Task('Clean my room'),
//   new Task('Do the laundry'),
// ];
//
// $tasks[0]->complete();
