<?php
include "configuration.php";
if ($stmt = $link->prepare('select eve_name, eve_date from eve where id in (select eid from favs where uname = ?)')) {
	$stmt->bind_param('s', $_SESSION['uname']);
	$stmt->execute();
	$stmt->store_result();	
	
	if ($stmt->num_rows > 0) {
	echo '<thead class="thead-dark"><tr> <th scope="col">Event</th> <th scope="col">Date</th> </tr></thead>';
echo '<tbody id="tablebody"></tbody>'; 
	$stmt->bind_result($evename, $evedate);
while($stmt->fetch()) {
	echo '<tr><td>'. $evename . '</td><td>' . $evedate . '</td></tr>';
}    
$stmt->close(); } 
else
echo '<p>Δεν έχεις αγαπημένα ακόμα, κάνε αναζήτηση και πάτα την καρδιά δίπλα από την ημερομηνία του αγαπημένου σου event. </p>';

}
?>