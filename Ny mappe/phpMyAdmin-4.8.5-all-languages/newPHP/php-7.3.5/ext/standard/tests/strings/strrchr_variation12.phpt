--TEST--
Test strrchr() function : usage variations - binary safe
--FILE--
<?php
/* Prototype  : string strrchr(string $haystack, string $needle);
 * Description: Finds the last occurrence of a character in a string.
 * Source code: ext/standard/string.c
*/

/* Test strrchr() function: with binary values & null terminated strings passed to 'str1' & 'str2' */

echo "*** Test strrchr() function: binary safe ***\n";
$haystacks = array(
  "Hello".chr(0)."World",
  chr(0)."Hello World",
  "Hello World".chr(0),
  chr(0).chr(0).chr(0),
  "Hello\0world",
  "\0Hello",
  "Hello\0"
);

for($index = 0; $index < count($haystacks); $index++ ) {
  //needle as null string
  var_dump( strrchr($haystacks[$index], "\0") );
  //needle as NULL
  var_dump( strrchr($haystacks[$index], NULL) );
}
echo "*** Done ***";
?>
--EXPECTF--
*** Test strrchr() function: binary safe ***
string(6) " World"

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(6) " World"
string(12) " Hello World"

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(12) " Hello World"
string(1) " "

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(1) " "
string(1) " "

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(1) " "
string(6) " world"

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(6) " world"
string(6) " Hello"

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(6) " Hello"
string(1) " "

Deprecated: strrchr(): Non-string needles will be interpreted as strings in %s on line %d
string(1) " "
*** Done ***
