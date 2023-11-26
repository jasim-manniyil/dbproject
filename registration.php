<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="reg">
        <section class="container">
            <header>Registration Form</header>
            <form class="form" action="#" style="width: 80%; margin: auto;">
                <div class="input-box">
                    <label>Full Name</label>
                    <input required="" placeholder="Enter full name" type="text">
                </div>
                <div class="input-box">
                    <label>Password</label>
                    <input required="" placeholder="Enter a password" type="text">
                </div>
                
                <div class="gender-box">
                  <label style="color: white;">Gender</label>
                  <div class="gender-option">
                    <div class="gender">
                      <input checked="" name="gender" id="check-male" type="radio">
                      <label for="check-male">Male</label>
                    </div>
                    <div class="gender">
                      <input name="gender" id="check-female" type="radio">
                      <label for="check-female">Female</label>
                    </div>
                    <div class="gender">
                      <input name="gender" id="check-other" type="radio">
                      <label for="check-other">Prefer not to say</label>
                    </div>
                  </div>
                </div>
                <div class="input-box address">
                  <label>Address</label>
                  <input required="" placeholder="Enter street address" type="text">
                  <div class="column">
                    <div class="select-box">
                      <select>
                        <option hidden="">Country</option>
                        <option>USA</option>
                        <option>UK</option>
                        <option>Germany</option>
                        <option>Japan</option>
                      </select>
                    </div>
                  <input required="" placeholder="Enter your city" type="text">
                  </div>
                </div>
                <button>Submit</button>
            </form>
          </section>
    </div>
</body>
</html>