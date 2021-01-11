<?php

namespace Drupal\tests\drupalup_fibo\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\drupalup_fibo\FibonacciService;

/**
 * Class to test Fibonacci Service class.
 */
class FibonacciServiceTest extends UnitTestCase {

  /**
   * Function to test calcSomeFibos function of Fibonacci service class.
   */
  public function testSixthFibonacciNumber() {
    $fibonacciService = new FibonacciService();
    $fibonacciSequence = $fibonacciService->calcSomeFibos(6);
    $this->assertEquals(
      $fibonacciSequence[5],
      5
    );
  }

}
