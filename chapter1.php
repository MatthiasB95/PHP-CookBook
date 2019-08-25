<?php
//using ASCII code to show the price 10.25$
print "The sauce costr \$\061\060.\x32\x35.";

//check if an email address contains an @
if (strpos($_POST['email'], '@') ===false) {
	print 'There was no @ in th e-mail address!';
}

//I want the first eight characters of a username entered into a form.
$substrting = substr($string, $start, $length);
$username = substr($_GET['username'],0,8);

//deciding at what position the substr should start and how many positions it should show afterwards
print substr('watch out for that tree',2,5);
echo "<br>";

//if I leave the length it will the show the whole String starting at the position I define
print substr('watch out for that tree',15);
echo "<br>";

//if start plus length goes past the string substr show all of the string from starting point
print substr('watch out for that tree',20,5);
echo "<br>";

//if the start point is negative substr counts backwards from the end of the string and starts there
//if the length value is negative substr count backwards from the end to determine where the substring ends
print substr('watch out for that tree',-17,5);
echo "<br>";
print substr('watch out for that tree',-17,-5);
echo "<br>";


echo "<h2>Replace Substrings</h2>";
$new_string = substr_replace($old_string,$new_substring,$start);
//replaces the old with the new string at the starting point defined, if the length is defined only that many characters are replaced
print substr_replace('My pet is a blue dog.','fish',12);
echo "<br>";
print substr_replace('My pet is a blue dog.','fish',17,4);
echo "<br>";

function lookandsay($s){
	$r = '';
	$m = $s[0];
	$n = 1;
	$j = '';
	for ($i=1, $j = strlen($s); $i < $j; $i++) { 

		if ($s[$i] == $m) {
			$n++;
		}else{
			$r .= $n.$m;
			$m = $s[$i];
			$n = 1;
		}
	}
	return $r.$n.$m;
}
for ($i=0, $s = 1; $i < 10; $i++) { 
	$s = lookandsay($s);
	print "$s";
	echo "<br>";
}
?>