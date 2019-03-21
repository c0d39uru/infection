<?php

use PHPUnit\Framework\TestCase;
use InfectionDemo\UserFilterAge;

class UserFilterAgeTest extends TestCase {

  /**
   * @covers \InfectionDemo\UserFilterAge::filter
   */
  public function test_it_filters_adults(): void {
    $users = [
      ['age' => 20],
      ['age' => 15],
    ];

    $this->assertCount(1, UserFilterAge::filter($users));
  }
}
