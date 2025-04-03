@import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

* {
	margin:0;
	padding:0;
	font-family: "Ubuntu", sans-serif;
}

a {
	color:white;
	text-decoration:none;
	
}
html, body {
	height:100%;
	
	
}

body {
	background-image:linear-gradient(#000 50%,#1d2d44);
	height:100vh;
	display:flex;
	justify-content:center;
	align-items:center;
	
}

.container {
	width:90vw;
	height:90vh;
	
	display:flex;
	justify-content:center;
	align-items:center;
	
	background-image:
	linear-gradient(#00000088 70%,#3e5c76),
	url(map-operation.svg);
	background-size:fill;
	background-position:center;
	background-repeat:no-repeat;

	
}

.container:hover{
	background-image:
	linear-gradient(transparent,#3e5c76),
	url(map-operation.svg);
	
	
}

header {
	display:flex;
	justify-content:space-between;
	align-items:center;
	padding:10px;
	width:100%;
}

.logo {
	
	font-size:30px;
	text-transform:uppercase;
	position:absolute;
	top :30;
	
}

ul{
	width:60%;
	list-style:none;
	display:flex;
	justify-content:space-evenly;
	margin-left:auto;
	position:absolute;
	top:70;
	right:50;
	
}

ul a {
	border-bottom:2px solid transparent;
	
}

ul a:hover{
	
	border-bottom-color:white;
	
	
}

.content {
	color:white;
	width:50%;
	padding:50px;
	position:absolute;
	left:65px;
}

.content h2{
	font-size:33px;
	text-transform:uppercase;
	font-style:italic;
	
}

.content p{
	letter-spacing:2px;
	width:400px;
	padding:20px 0;
}

.content button{
	font-size:30px;
	padding:6px 10px;
	border-radius:10px;
	border:2px solid transparent;
}

.content button:hover{
	background-color:transparent;
	border-color:white;
	color:white;
	cursor:pointer;
	
}