
<?php 

// Use ls command to shell_exec 
// function 
$output = shell_exec('fastfetch'); 

// Display the list of all file 
// and directory 
echo "<pre>$output</pre>"; 
?> 