<!DOCTYPE html>
<html>
<head>
	<title>jQuery Crash Course | Ajax</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
	<style>
		body{
			font-size: 17px;
			font-family: arial;
			background: #f4f4f4;
			line-height: 1.5em;
		}
		header{
			background:#333;
			color:#fff;
			padding:20px;
			text-align: center;
			border-bottom: 4px #000 solid;
			margin-bottom: 10px;
		}
		#container{
			width:90%;
			margin:auto;
			padding:10px;
		}

	</style>
</head>
<body>
	<header>
		<h1>jQuery Crash Course | Ajax</h1>
	</header>
	<div id="container">
		<div id="result"></div>
		<ul id="users"></ul>
		<h3>Add Post</h3>
		<form id="postForm" action="https://jsonplaceholder.typicode.com/posts">
		<input type="text" id="title" placeholder="Title"><br>
		<textarea placeholder="Body" id="body"></textarea><br>
		<input type="submit" value="Submit">
		</form>
	</div>

	<script>
		$(document).ready(function(){
			/*
			$('#result').load('test.html', function(responseTxt, statusTxt, xhr){
				if(statusTxt == "success"){
					alert('It went fine');
				} else if(statusTxt == "error"){
					alert("Error: "+xhr.statusText);
				}
			});
			*/

			/*
			$.get('test.html', function(data){
				$('#result').html(data);
			});
			*/

			/*
			$.getJSON('users.json', function(data){
				$.each(data, function(i, user){
					$('ul#users').append('<li>'+user.firstName+'</li>');
				});
			});
			*/

			/*
			$.ajax({
				method:'GET',
				url: 'https://jsonplaceholder.typicode.com/posts',
				dataType: 'json'
			}).done(function(data){
				console.log(data);
				$.map(data, function(post, i){
					$('#result').append('<h3>'+post.title+'</h3><p>'+post.body+'</p>');
				});
			});
			*/

			$('#postForm').submit(function(e){
				e.preventDefault();

				var title = $('#title').val();
				var body = $('#body').val();
				var url = $(this).attr('action');

				$.post(url, {title:title, body:body}).done(function(data){
					console.log('Post Saved');
					console.log(data);
				});
			});
		});
	</script>
</body>
</html>
