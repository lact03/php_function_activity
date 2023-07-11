<?php


function deleteRecurringElements($list) {
  $result = [];
  $prevElement = null;

  foreach ($list as $element) {
      if ($element !== $prevElement) {
          $result[] = $element;
      }
      $prevElement = $element;
  }

  return $result;
};

$list = ["Luis", "Luis", "Bruh", "Bruh", "Tabug", "Hello", "Hello"];
$uniqueList = deleteRecurringElements($list);

$originalListString = implode(", ", $list);
$uniqueListString = implode(", ", $uniqueList);

echo "Original List: [ $originalListString ] </br>";
echo "Unique List: [ $uniqueListString ]";

?>