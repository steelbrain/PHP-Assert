<?php
namespace steelbrain;
use ErrorException;

// Main Exception
class AssertException extends ErrorException {
  public function __construct($message = '') {
    parent::__construct($message ? $message : 'Assertion failed');
  }
}

// Helper methods
function invariant($clause, $message = '') {
  if (!$clause) {
    throw new AssertException($message);
  }
}
function invariant_violation($message = '') {
  throw new AssertException($message);
}
