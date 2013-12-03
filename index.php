<html>
	<head>
		<title>Moveable Alphabet</title>
		<!-- Adobe's Edgefonts script -->
    	<script src="http://use.edgefonts.net/cabin.js"></script> 

		<!--<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/features.css"> -->
		<link rel="stylesheet" href="css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	</head>
	<body>
		<header>
			<h1>Moveable Alphabet</h1>
			<h2></h2>
		</header>
		<div id="wrapper">
			<!-- Note pad -->
			<div id="writing_area">
			    	<div id="canvas"></div>
			    	<input type="button" id="refresh-btn" value="Start over">
			</div>
			<!-- Image search results -->	
			<div id="search_results"></div>
			<!-- Letter picker -->	
			<div id="letter_box">
				<div class="box_row">
					<img class="letter" src="img/a.gif" value='a' alt="Letter a">
					<img class="letter" src="img/b.gif" value='b' alt="Letter b">
					<img class="letter" src="img/c.gif" value='c' alt="Letter c">
					<img class="letter" src="img/d.gif" value='d' alt="Letter d">
					<img class="letter" src="img/e.gif" value='e' alt="Letter e">
					<img class="letter" src="img/f.gif" value='f' alt="Letter f">
					<img class="letter" src="img/g.gif" value='g' alt="Letter g">
					</div>
				<div class="box_row">
					<img class="letter" src="img/h.gif" value='h' alt="Letter h">
					<img class="letter" src="img/i.gif" value='i' alt="Letter i">
					<img class="letter" src="img/j.gif" value='j' alt="Letter j">					
					<img class="letter" src="img/k.gif" value='k' alt="Letter k">
					<img class="letter" src="img/l.gif" value='l' alt="Letter l">
					<img class="letter" src="img/m.gif" value='m' alt="Letter m">
					<img class="letter" src="img/n.gif" value='n' alt="Letter n">
					</div>
				<div class="box_row">
					<img class="letter" src="img/o.gif" value='o' alt="Letter o">
					<img class="letter" src="img/p.gif" value='p' alt="Letter p">
					<img class="letter" src="img/q.gif" value='q' alt="Letter q">
					<img class="letter" src="img/r.gif" value='r' alt="Letter r">
					<img class="letter" src="img/s.gif" value='s' alt="Letter s">
					<img class="letter" src="img/t.gif" value='t' alt="Letter t">
					<img class="letter" src="img/u.gif" value='u' alt="Letter u">
					</div>
				<div class="box_row">
					<img class="letter" src="img/v.gif" value='v' alt="Letter v">
					<img class="letter" src="img/w.gif" value='w' alt="Letter w">
					<img class="letter" src="img/x.gif" value='x' alt="Letter x">
					<img class="letter" src="img/y.gif" value='y' alt="Letter y">
					<img class="letter" src="img/z.gif" value='z' alt="Letter z">
					<img id="backspace" src="img/backspace.gif" alt="Backspace">
				</div>
			</div>
		</div>
		<footer>
    <p><a href="http://twitter.com/japanna" target="_blank">about</a> <span class="pipe">
            &nbsp;|&nbsp; </span>
        <a href="https://github.com/japanna" target="_blank">contact</a> <span class="pipe">
            &nbsp;|&nbsp; </span>
        <a href="http://linkedin.com/in/annamckelvey" target="_blank">linked in</a>
    </p>
  </footer>
		<script src="js/moveable.js"></script>
	</body>
</html>