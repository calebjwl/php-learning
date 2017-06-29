<?php
class Task {
  public $description;

  public $completed = false;

  // public function __construct($description)
  // {
  //   $this->description = $description;
  //   // Automatically triggered on instantiation
  // }

  public function complete()
  {
    $this->completed = true;
  }

  public function isComplete()
  {
    return $this->completed;
  }
}
