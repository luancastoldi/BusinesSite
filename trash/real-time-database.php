<!DOCTYPE html>
<html>

<head>
	<title>Database</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?time=<?= time() ?>">
	<link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
	<link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
</head>

<body>

	<!-- The core Firebase JS SDK is always required and must be listed first -->
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>

	<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
	<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>
	<script src="js/app.js"></script>
    <script src="real-time-database.js"></script>

	<?php
	include('topBar.php');
	?>

	<div class="title">
		REAL TIME DATABASE
	</div>

        <div class="resume">
        <form>
            <div>
                <label for="nameInput">Nome</label>
                <input type="text" id="nameInput" placeholder="Nome">
            </div>
            <div>
                <label for="ageInput">Idade</label>
                <input type="number" id="ageInput" placeholder="Idade">
            </div>
                <button id="addButton">Adicionar</button>

                <ul id="userList"></ul>
 
        </form>
        </div>

	</div>
</body>
</div>

</html>