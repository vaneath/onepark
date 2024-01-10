<?php

enum RoleEnum: int
{
  case SuperAdmin = 1;
  case Admin = 2;
  case Employee = 3;

  public function toString(): string
  {
    switch ($this) {
      case self::SuperAdmin:
        return 'Super Admin';
      case self::Admin:
        return 'Admin';
      case self::Employee:
        return 'Employee';
      default:
        return '';
    }
  }
}
