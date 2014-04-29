<html>
	<body>
		<h1>Blackjack</h1>
		<p>Choose 2 cards.</BR>Cards are identified by the input, the first part representing the face value from 2-10, plus A, K, Q, J. The second part represents the suit S, C, D, H.</p>
		<form action="result.php" method="post">
			<label for="card_1">Card 1</label>
			<input type="text" id="card_1" name="cards[]" value="10s">
			<label for="card_2">Card 2</label>
			<input type="text" id="card_2" name="cards[]" value="KH">
			<input type="submit">
		</form>
	</body>
</html>