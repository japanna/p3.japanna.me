<!doctype html>
<html>
	<head>
		<title>Moveable Alphabet </title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<!-- Adobe's Edgefonts script -->
    	<script src="http://use.edgefonts.net/cabin.js"></script> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<header>
			<h1>Moveable Alphabet <span> a digital spin on the classic Montessori tool</span></h1>
			<h2></h2>
		</header>
		
		<div id="wrapper">
			
			<!-- Note pad -->
			<div id="writing_area">
					<img id="demo" src="img/demo0.png" alt="demo button">
			    	<div id="canvas">
			    		<img class="demo_ltr" src="img/c.gif" alt="Letter c">
			    		<img class="demo_ltr" src="img/a.gif" alt="Letter a">
			    		<img class="demo_ltr" src="img/r.gif" alt="Letter r">
						<img id="msg1" src="img/msg1.png" alt="demo message 1">
			    		<img id="msg2" src="img/msg2.png" alt="demo message 2">
			    		<img id="msg3" src="img/msg3.png" alt="demo message 3">
			    		<img id="msg4" src="img/msg4.png" alt="demo message 4">
			    		<img id="msg5" src="img/msg5.png" alt="demo message 5">
			    		<img id="msg6" src="img/msg6.png" alt="demo message 6">
			    	</div>
			    	<img id="refresh" src="img/delete.png" alt='refresh'>
			    	<img id="hand2" src="img/hand.png" alt="hand2">	
			</div>
			<!-- Image search results -->	
			<div id="search_results">
				<img id="hand" src="img/hand.png" alt="hand">
				<img id="search_results_img" src="img/cars.png" alt="search results image">
				<img id="greeting" src="img/venus0.png" alt="venus de milo">
			</div>
			<!-- Letter picker -->	
			<div id="letter_box">
				<div id='first_row'>
					<img class="letter" src="img/a.gif"  alt="a">
					<img class="letter" src="img/b.gif"  alt="b">
					<img class="letter" src="img/c.gif"  alt="c">
					<img class="letter" src="img/d.gif"  alt="d">
					<img class="letter" src="img/e.gif"  alt="e">
					<img class="letter" src="img/f.gif"  alt="f">
					<img class="letter" src="img/g.gif"  alt="g">
				</div>
				<div>
					<img class="letter" src="img/h.gif"  alt="h">
					<img class="letter" src="img/i.gif"  alt="i">
					<img class="letter" src="img/j.gif"  alt="j">					
					<img class="letter" src="img/k.gif"  alt="k">
					<img class="letter" src="img/l.gif"  alt="l">
					<img class="letter" src="img/m.gif"  alt="m">
					<img class="letter" src="img/n.gif"  alt="n">
					</div>
				<div>
					<img class="letter" src="img/o.gif"  alt="o">
					<img class="letter" src="img/p.gif"  alt="p">
					<img class="letter" src="img/q.gif"  alt="q">
					<img class="letter" src="img/r.gif"  alt="r">
					<img class="letter" src="img/s.gif"  alt="s">
					<img class="letter" src="img/t.gif"  alt="t">
					<img class="letter" src="img/u.gif"  alt="u">
					</div>
				<div>
					<img class="letter" src="img/v.gif" alt="v">
					<img class="letter" src="img/w.gif" alt="w">
					<img class="letter" src="img/x.gif" alt="x">
					<img class="letter" src="img/y.gif" alt="y">
					<img class="letter" src="img/z.gif" alt="z">
					<img id="backspace" src="img/eraser.png" alt="Backspace">
				</div>
			</div>
		</div>
		<footer>
    <p><a href="https://github.com/japanna/p3.japanna.me" target="_blank">&nbsp;git&nbsp; | </a> 
    	<a href="http://twitter.com/japanna" target="_blank">contact &nbsp;|</a> 
        <a id="demo_link">&nbsp;demo</a>
    </p>
  </footer>
		<script src="js/moveable.js"></script>
	</body>
</html>