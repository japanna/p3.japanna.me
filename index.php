<html>
	<head>
		<title>Moveable Alphabet</title>
		<!-- Adobe's Edgefonts script 
    	<script src="http://use.edgefonts.net/cabin.js"></script> -->

		<link rel="stylesheet" href="css/style.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<header>
			<h1>moveable alphabet</h1>
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
					<img class="letter" src="img/a.gif" value='a' alt="Letter a">
					<img class="letter" src="img/b.gif" value='b' alt="Letter b">
					<img class="letter" src="img/c.gif" value='c' alt="Letter c">
					<img class="letter" src="img/d.gif" value='d' alt="Letter d">
					<img class="letter" src="img/e.gif" value='e' alt="Letter e">
					<img class="letter" src="img/f.gif" value='f' alt="Letter f">
					<img class="letter" src="img/g.gif" value='g' alt="Letter g">
				</div>
				<div>
					<img class="letter" src="img/h.gif" value='h' alt="Letter h">
					<img class="letter" src="img/i.gif" value='i' alt="Letter i">
					<img class="letter" src="img/j.gif" value='j' alt="Letter j">					
					<img class="letter" src="img/k.gif" value='k' alt="Letter k">
					<img class="letter" src="img/l.gif" value='l' alt="Letter l">
					<img class="letter" src="img/m.gif" value='m' alt="Letter m">
					<img class="letter" src="img/n.gif" value='n' alt="Letter n">
					</div>
				<div>
					<img class="letter" src="img/o.gif" value='o' alt="Letter o">
					<img class="letter" src="img/p.gif" value='p' alt="Letter p">
					<img class="letter" src="img/q.gif" value='q' alt="Letter q">
					<img class="letter" src="img/r.gif" value='r' alt="Letter r">
					<img class="letter" src="img/s.gif" value='s' alt="Letter s">
					<img class="letter" src="img/t.gif" value='t' alt="Letter t">
					<img class="letter" src="img/u.gif" value='u' alt="Letter u">
					</div>
				<div>
					<img class="letter" src="img/v.gif" value='v' alt="Letter v">
					<img class="letter" src="img/w.gif" value='w' alt="Letter w">
					<img class="letter" src="img/x.gif" value='x' alt="Letter x">
					<img class="letter" src="img/y.gif" value='y' alt="Letter y">
					<img class="letter" src="img/z.gif" value='z' alt="Letter z">
					<img id="backspace" src="img/eraser.png" alt="Backspace">
				</div>
			</div>
		</div>
		<footer>
    <p><a href="https://github.com/japanna/p3.japanna.me" target="_blank">&nbsp;about&nbsp; | </a> 
    	<a href="http://twitter.com/japanna" target="_blank">contact &nbsp;|</a> 
        <a href="http://linkedin.com/in/annamckelvey" target="_blank">&nbsp;linked in</a>
    </p>
  </footer>
		<script src="js/moveable.js"></script>
	</body>
</html>