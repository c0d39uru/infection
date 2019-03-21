<?php

use PHPUnit\Framework\TestCase;
use InfectionDemo\UserFilterAge;

class UserFilterAgeTest extends TestCase {

  /**
   * @covers \InfectionDemo\UserFilterAge::filter
   * @dataProvider usersProvider
   *
   * @param array $users
   * @param int $expectedCount
   */
  public function test_it_filters_adults(array $users, int $expectedCount): void {
    $this->assertCount($expectedCount, UserFilterAge::filter($users));
  }

  public function usersProvider(): array {
    return [
      [
        [
          ['age' => 15],
          ['age' => 20],
        ],
        1
      ],
      [
        [
          ['age' => 18],
        ],
        1
      ]
    ];
  }
}
