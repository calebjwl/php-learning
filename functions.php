<?php

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
