<?php
namespace steelbrain\assert;
use ErrorException;

// Main Exception
class AssertException extends ErrorException {
  public function __construct($message = '') {
    parent::__construct($message ? $message : 'Assertion failed');
  }
}

// Helper methods
function assert($clause, $message = '') {
  if (!$clause) {
    throw new AssertException($message);
  }
}
function assert_violation($message = '') {
  throw new AssertException($message);
}
