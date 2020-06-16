<style>
body {
	 min-height: 100vh;
	 display: flex;
	 justify-content: center;
	 align-items: center;
}
/* =============================== */
/* Ignore the below, they're for the rest of the page */
 .element {
	 background-color: #a0f;
	 color: #eee;
	 padding: 1rem 2rem;
}
 body {
	 background-color: #2a2a2a;
	 font-family: Verdana, sans-serif;
	 box-shadow: 0 0 4px 2px black;
}
 a {
	 color: aqua;
}
 a:hover {
	 color: #00e5ff;
}
 .other-pen {
	 position: absolute;
	 top: 0.5rem;
	 left: 0.5rem;
}
 .css-tricks-flexbox {
	 position: absolute;
	 bottom: 0.5rem;
	 right: 0.5rem;
}
 
</style>
<title>Show my IP</title>
<div class="element">
<?php echo $_SERVER['REMOTE_ADDR'];?> 
</div>
