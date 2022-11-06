<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/form.css">
    <title>Join Us</title>
</head>

<body>
    <div class="container right-panel-active">
        <!-- Sign Up -->
        <div class="container__form container--signup">
            <form action="#" class="form" id="form1">
                <h2 class="form__title">Sign Up</h2>
                <input type="text" placeholder="User Name" class="input" />
                <input type="email" placeholder="Email" class="input" />
                <!-- 
			<input type="radio" placeholder="" class="input" value="Female" />
			<lable>Female</lable>
			
			<input type="radio" placeholder="" class="input" value="Male" />
		<lable>Male</lable> -->

                <input type="text" placeholder="City" class="input" />
                <input type="text" placeholder="School" class="input" />
                <div class="grad">
                    <label for="cars">Your Grad:</label>
                    <select name="Grad" id="Grade">
                        <option value="1st prep">1st Preparatory</option>
                        <option value="2nd prep">2nd Preparatory</option>
                        <option value="3rd prep">3rd Preparatory</option>
                        <option value="1st prep">1st Secondary</option>
                        <option value="2nd prep">2nd Secondary</option>
                        <option value="3rd prep">3rd Secondary</option>

                    </select>
                </div>
                <div class="grad">
                    <input type="radio" class="input" value="English" />
                    <lable>English</lable>
                </div>
                <div class="grad">
                    <input type="radio" class="input" value="Arabic" />
                    <lable>Arabic</lable>
                </div>
                <button class="btn">Sign Up</button>
            </form>
        </div>

        <!-- Sign In -->
        <div class="container__form container--signin">
            <form action="#" class="form" id="form2">
                <h2 class="form__title">Sign In</h2>
                <input type="email" placeholder="Email" class="input" />
                <input type="password" placeholder="Student code" class="input" />
                <button class="btn">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">Sign In</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/form.js"></script>

</body>

</html>