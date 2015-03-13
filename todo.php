<?php
 //********* I WANT TO ADD AUTOMATIC CAPITALIZATION OF USER INPUT***

// Create array to hold list of todo items
$items = array();

//add a function to follow input to sort
function sort_menu($input, $items) {
    echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered: ";

        //receive user input, trim and automatically capitalize
    $inputS = strtoupper(trim(fgets(STDIN)));
888888888888 STILL DOES NOT WORK 88888888888888
        //perform what user requested
    if ($inputS == 'A') {
        asort($items);
        return $items;
        echo $items;

    } elseif ($inputS == 'Z') {
        arsort($items);
        return $items;
        echo $items;

    } elseif ($inputS == 'O') {
        ksort($items);
        return $items;

    } elseif ($inputS == 'R') {
        krsort($items);
        return $items;
    } 
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
    $input = strtoupper(trim(fgets(STDIN)));
 
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

        sort_menu($input, $items);
        //add menu for sorting the array
 //    	echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered";

 //        //receive user input, trim and automatically capitalize
 //    	$inputS = strtoupper(trim(fgets(STDIN)));

 //        //perform what user requested
 //    	if ($inputS == 'A') {
	// 	asort($items);
	// } elseif ($inputS == 'Z') {
	// 	arsort($items);
	// } elseif ($inputS == 'O') {
	// 	ksort($items);
	// } elseif ($inputS == 'R') {
	// 	krsort($items);
	// } 
    }
// Exit when input is (Q)uit
} while ($input != 'Q');
 
// Say Goodbye!
echo "Goodbye!\n";
 
// Exit with 0 errors
exit(0);