
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>



<style type="text/css">
*{

    margin: 0;
}


.block1{
position: relative;
width: 100%;
height: 20mm;
background-color: red;

}
.block2{
position: fixed;
top: 20mm;
width: 100%;
height: 15mm;
background-color: blue;

}
.block3{

position: relative;
top: 15mm;
width:50%;
float: left;
height: 40mm;
background-color: green;
}
.block4{

position: relative;
width: 50%;
top: 15mm;
float: right;
background-color: orange;
height: 40mm;


}
.block5{
position: relative;
width: 100%;
top: 55mm;
background-color: black;
height: 50mm;
color: white;

}



</style>


<div class="block1">
    <span>Header</span>
</div>

<div class="block2">
    <span>Navigation</span>
</div>

<div class="block3">
    <span>left</span>
</div>

<div class="block4">
    <span>right</span>
</div>

<div class="block5">
    <span>footer</span>
</div>











</body>
</html>