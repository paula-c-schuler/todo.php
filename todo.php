<?php
 
// Create array to hold list of todo items
$items = array();

// The loop starts here! 
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
        echo 'Add new item to (B)eginning of list OR (E)nd of list: ';
        // Ask for choice of item placement on array of $items.
        $inputBeginingOrEnd = strtoupper(trim(fgets(STDIN)));
        
        if ($inputBeginingOrEnd == 'B') {

            // echo 'Enter item: ';
            echo 'Enter item: ';
            $inputNewItem = trim(fgets(STDIN));
            
            //Place trimmed item at first index of array;
            array_unshift($items, $inputNewItem);

        } else  {

            // echo 'Enter item: ';
            echo 'Enter item: ';
            $inputNewItem = trim(fgets(STDIN));
            
            //Place trimmed item at the end of the array for choice 'E' and default no choice;
            $items = $inputNewItem);
        }

    } elseif ($input == 'R') {

        // Remove which item?
        echo 'Enter item number to remove: ';
        
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);

    } elseif ($input == 'S') {
        
        //add menu for sorting the array
    	echo "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered";

        //receive user input, trim and automatically capitalize
    	$inputS = strtoupper(trim(fgets(STDIN)));

        //perform what user requested
    	if ($inputS == 'A') {
		  asort($items);
	   } elseif ($inputS == 'Z') {
	   	   arsort($items);
	   } elseif ($inputS == 'O') {
	       ksort($items);
	   } elseif ($inputS == 'R') {
	       krsort($items);
	   }       
    } elseif ($input == 'F') {
        array_shift($items);
    } elseif ($input == 'L') {
        array_pop($items);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');
 
// Say Goodbye!
echo "Goodbye!\n";
 
// Exit with 0 errors
exit(0);