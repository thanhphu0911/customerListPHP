<!DOCTYPE html>
<html>
  <head>
    <title>Survey Form</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    </head>
<body>
     <!-- Navbar -->              
     <nav class="navbar navbar-dark">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>
          </ul>
        </div>
      </div>
    </nav>
  
  <h1 id="title"> Survey Form</h1>
  <p id="description">Thank you for taking the time to help us improve the platform</p>


  
  <form id="survey-form" method="post">

    <label class="questions" id="name-label">First Name</label>
    <input id="fname" name="fname" type="text" required placeholder="Enter your first name"></input>

    <label class="questions" id="name-label">Last Name</label>
    <input id="lname" name="lname" type="text" required placeholder="Enter your last name"></input>

    <label class="questions" id="email-label">Email</label>
    <input id="email" name="email" type="email" required placeholder="Enter your Email"></input>

    <label class="questions" id="number-label">Age (optional)</label>
    <input id="number" name='age' type="number" min="15" max="150" placeholder="Age"></input>

    <label class="questions">Would you recommend our products to a friend?</label>
    <label><input class="inline" name="recommend" type="radio" value="definitely"> Definitely</label>
    <label><input class="inline" name="recommend" type="radio" value="maybe"> Maybe</label>
    <label><input class="inline" name="recommend" type="radio" value="unsure"> Not sure</label>

<label class="questions">Any comments or suggestions?</label>
          <textarea name="suggestions" rows="5" cols="50" placeholder="Enter your comment here..."></textarea>

      <input id="submit" type="submit">
    
    </form>
  <div class="submit-message">
           <?php
					 	require_once('database.php');
						if(isset($_POST) & !empty($_POST)){
							$fname = $_POST['fname'];
							$lname = $_POST['lname'];
							$email = $_POST['email'];
                            $age = $_POST['age'];
                            
							$res   = $database->create($fname, $lname, $email, $age);
							if($res){
								echo "<p>Successfully inserted data</p>";
							}else{
								echo "<p>Failed to insert data</p>";
							}
						}
					 ?>
        </div>
  </body>
  </html>