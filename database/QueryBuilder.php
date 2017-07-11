<?php

class QueryBuilder
{
  protected $pdo;

  public function __construct($pdo)
  {
    $this->pdo = $pdo;
  }

  public function selectAll($table)
  {
    // Prepare sql query
    $statement = $this->pdo->prepare("select * from ${table}");

    // Execute statement
    $statement->execute();

    // Fetch and return all of the results in memory
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }
}
