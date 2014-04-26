<html>
<head>
</head>
<body>
This page will serve you reddit's front page (or any subreddit of your choice) and a number of articles as a PDF
<form action="getReddit.php" method="post">
<label>How many articles would you like?</label>
<select name="articlenum" id="select">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<label>Which Subreddit do you want?</label>
<input name="subreddit" type="text" value="Front Page"/>
<input id="submit" type="submit" value="Click here to get Reddit"> <span>   -- This may take a minute</span>
</form>
</body>
</html>
