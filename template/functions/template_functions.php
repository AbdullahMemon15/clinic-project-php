<?php
// Output comments to HTML
function the_comments()
{
  global $hello;
  foreach($hello as $result){
  echo "<div class='comment'>";
  echo "<div class='ID'>Post ID: " . $result["ID"] . "</div>";
  echo "<div class='date'>Posted on " . $result["date"] . "</div>";
  echo "<h3> patient Name:  " . $result["fullName"] . "</h3>";
  echo "<h3> Email:  " . $result["email"] . "</h3>";
  echo "<div class='mood'>Reason:" . $result["reason"] . "</div>";
  // echo "<div class='comment-text'><p>" . $result["commentText"] . "</p></div>";
  echo "</div>";
  }
}

// Output unique email addresses to HTML
function the_commenters()
{
  global $commenters;
  echo "</div><div class='commenters'><h2>People Who have Commented:</h2>";
	echo "<ul>";
  foreach ($commenters as $result) {
	echo "<li> ".$result["fullName"]."</li>";
}
	echo"</ul>";
  echo "</div>";
}
?>