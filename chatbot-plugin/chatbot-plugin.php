<?php

/*
Plugin Name: Chatbot plugin
Plugin URI: http://google.com/
Description: This is chatbot support plugin.
Version: 1.0.0
Author: Krupa Patel
Author URI: http://google.com/
*/

	function chatbot_plugin() {
	?>

		<html>
		<head>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<style>
				.chatbot {
					position : fixed;
					bottom : 5%;
					right : 5%;
				}
				#divchat {
					position: fixed;
    				bottom : 19%;
    				right : 5%;
    				height : 55%;
    				width : 22.5%;
    				background-color : white;
    				overflow-y : scroll;
    			}
				#query {
					width : 70%;
					float : left;
					padding : 5px;
    			}
    			#btnsub {
					float : right;
    			}
    			#query1 {
					width : 70%;
					float : left;
					padding : 5px;
    			}
    			#btnsub1 {
					float : right;
    			}
    			#query2 {
					width : 70%;
					float : left;
					padding : 5px;
    			}
    			#btnsub2 {
					float : right;
    			}
    			#query3 {
					width : 70%;
					float : left;
					padding : 5px;
    			}
    			#btnsub3 {
					float : right;
    			}
    			#query4 {
					width : 70%;
					float : left;
					padding : 5px;
    			}
    			#btnsub4 {
					float : right;
    			}
    			.ask {
    				position : fixed;
					bottom : 13.5%;
					right : 5%;
					width : 22.5%;
    			}
    			.response {
					border-radius : 7px;
					border-style : solid;
					border-width : 1px;
					background-color : white;
					max-width : 80%;
					margin : 5px;
					box-shadow: 2px 2px #ADA7A6;
					
    			}
    			.request {
					border-radius : 7px;
					border-style : solid;
					border-width : 1px;
					background-color : black;
					max-width : 80%;
					margin : 9px;
					color : white;
					box-shadow: 2px 2px #ADA7A6;
					float: right;
    			}
    			#header {
    				background: black;
    				color: white;
    				position: fixed;
    				bottom : 74%;
    				right : 5%;
    				width : 22.5%;
    				height: 5%;
    				font-size: 20px;
    				font-style: italic;
    				border-radius : 7px;
    			}
			</style>
			<script>
				$(document).ready(function(){
					$("#btn").click(function(){
        				$("#divchat").show();
        				$("#element").show();
        				$("#header").show();
        				$("#btn").hide();
        				$("#btnclose").show();
    				});
				});
				$(document).ready(function(){
					$("#btnclose").click(function(){
        				$("#divchat").hide();
        				$("#element").hide();
        				$("#element1").hide();
        				$("#header").hide();
        				$("#btn").show();
        				$("#btnclose").hide();
    				});
				});
				$(document).ready(function(){
					$("#btnsub").click(function(){
        				$("#element").hide();
        				$("#element1").show();
        				$("#msg_server1").show();
    				});
				});
				$(document).ready(function(){
					$("#btnsub1").click(function(){
        				$("#element1").hide();
        				$("#element2").show();
        				$("#msg_server2").show();
    				});
				});
				$(document).ready(function(){
					$("#btnsub2").click(function(){
        				$("#element2").hide();
        				$("#element3").show();
        				$("#msg_server3").show();
    				});
				});
				$(document).ready(function(){
					$("#btnsub3").click(function(){
        				$("#element3").hide();
        				$("#element4").show();
        				$("#msg_server4").show();
    				});
				});
			</script>
			<script>
				function getValue() {
					var client_msg = document.getElementById("query").value;
						document.getElementById("client").innerHTML = client_msg;	
				}
				function getValue1() {
					var client_msg = document.getElementById("query1").value;
						document.getElementById("client1").innerHTML = client_msg;
						document.getElementById("msg_server2").innerHTML = client_msg + ". How can I help you?";
				}
				function getValue2() {
					var client_msg = document.getElementById("query2").value;
						document.getElementById("client2").innerHTML = client_msg;
				}
				function getValue3() {
					var client_msg = document.getElementById("query3").value;
						document.getElementById("client3").innerHTML = client_msg;
						document.getElementById("msg_server4").innerHTML = "Thank You. Happy to help you!!";
				}
			</script>
		</head>
		<body>
			<div class="chatbot">
				<input type="button" value="click" id="btn">
			</div>
			<div hidden class="chatbot" id="btnclose" >
				<input type="button" value="close" name="btnClose">
			</div>
			<div hidden id="header">
					&nbsp;&nbsp;CHARUSAT Chatbot
			</div>
			<div hidden id="divchat">
				<div id="msg_server" class="response">
					Welcome to the CHARUSAT CHATBOT
				</div>
				<div id="client" class="request">
				</div><br><br>
				<div hidden id="msg_server1" class="response">
					Hello. How can I help you?
				</div>
				<div id="client1" class="request">
				</div><br><br>
				<div  hidden id="msg_server2" class="response">	
				</div>
				<div id="client2" class="request">
				</div><br><br><br>
				<div  hidden id="msg_server3" class="response">
					<a href="http://gtu-info.com/college/CSPIT/Chandubhai-S-Patel-Charotar-Changa/Last-Year-Closing-Merit-No-Cutoff">http://gtu-info.com/college/CSPIT/Chandubhai-S-Patel-Charotar-Changa/Last-Year-Closing-Merit-No-Cutoff</a>
				</div>
				<div id="client3" class="request">
				</div><br><br>
				<div  hidden id="msg_server4" class="response">	
				</div>
			</div>
				<div hidden id="element" class="ask">
					<input id="query" type="text" name="query" placeholder="Say something">
					<input id="btnsub" type="submit" name="btnsub" value="send" onclick="getValue()">
				</div>
				<div hidden id="element1" class="ask">
					<input id="query1" type="text" name="query" placeholder="Say something">
					<input id="btnsub1" type="submit" name="btnsub" value="send" onclick="getValue1()">
				</div>
				<div hidden id="element2" class="ask">
					<input id="query2" type="text" name="query" placeholder="Say something">
					<input id="btnsub2" type="submit" name="btnsub" value="send" onclick="getValue2()">
				</div>
				<div hidden id="element3" class="ask">
					<input id="query3" type="text" name="query" placeholder="Say something">
					<input id="btnsub3" type="submit" name="btnsub" value="send" onclick="getValue3()">
				</div>
				<div hidden id="element4" class="ask">
					<input id="query4" type="text" name="query" placeholder="Say something">
					<input id="btnsub4" type="submit" name="btnsub" value="send" onclick="getValue4()">
				</div>
			
		</body>
		</html>
<?php
	}

	add_shortcode('chatbot','chatbot_plugin');
?>
