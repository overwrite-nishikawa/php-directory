<?php
// function checkScope(): string {
//   require_once 'scope_included.php';
//   return $scope;
// }

// print checkScope();
// print $scope;

// 自分で書いたコード
function checkScope() : string {
  require_once 'scope_included.php';
  return $scope;
}

print checkScope();
print $scope;