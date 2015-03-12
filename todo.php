<?php
 
// Create array to hold list of todo items
$items = array();
function sort_menu($inputS, $items) {
	if ($inputS == 'A') {
		sort($items);
	} elseif ($inputS == 'Z') {
		rsort($items);
	} elseif ($inputS == 'O') {
		ksort($items);
	} elseif ($inputS == 'R') {
		krsort($items);
	} 
	return $items;
	echo "List was sorted." . PHP_EOL;
}
// The loop!
do {
    // Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        echo "[{$key}] {$item}\n";
    }
 
    // Show the menu options
    echo '(N)ew item, (R)emove item, (S)ort items, (Q)uit : ';
 
    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = trim(fgets(STDIN));
 
    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    } elseif ($input == 'S') {
    	echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered";

    	$inputS = trim(fgets(STDIN));
    	if ($inputS == 'A') {
		sort($items);
	} elseif ($inputS == 'Z') {
		rsort($items);
	} elseif ($inputS == 'O') {
		ksort($items);
	} elseif ($inputS == 'R') {
		krsort($items);
	} 
    	// sort_menu($inputS, $items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');
 
// Say Goodbye!
echo "Goodbye!\n";
 
// Exit with 0 errors
exit(0);