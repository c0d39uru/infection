<?php declare(strict_types=1);

namespace InfectionDemo;

class UserFilterAge
{
  private const AGE_THRESHOLD = 18;

  public static function filter(array $collection): array {
    return array_filter(
      $collection,
      function (array $item) {
        return $item['age'] >= self::AGE_THRESHOLD;
      }
    );
  }
}