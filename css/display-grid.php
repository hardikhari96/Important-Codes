<!DOCTYPE html>
<html lang="en">
<head>
	<title>Display Grid</title>
	<link href="https://css-tricks.com/snippets/css/complete-guide-grid/#prop-grid-column-row" about="learn">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<style type="text/css">
	
.wrapper{
 
 display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 10px;
  grid-auto-rows: minmax(100px, auto);

}


.one {
  grid-column: 1 / 3;
  grid-row: 1;
  background-color: red;
}
.two { 
  grid-column: 3 / 5;
  grid-row: 1 / 3;
  background-color: blue;
}
.three {
  grid-column: 1 / 2;
  grid-row: 2 / 5;
  background-color: yellow;

}
.four {
  grid-column: 3 / 4 ;
  grid-row: 3;
  background-color: green;
}
.five {
  grid-column: 4 / 5;
  grid-row: 3;
  background-color: pink;
}
.six {
  grid-column: 2 / 3;
  grid-row: 2 / 6;
  background-color: grey;
}


</style>

</head>

<body>

	<div class="wrapper">
  <div class="one">One</div>
  <div class="two">Two</div>
  <div class="three">Three</div>
  <div class="four">Four</div>
  <div class="five">Five</div>
  <div class="six">Six</div>
</div>
</body>
</html>