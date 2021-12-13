<!DOCTYPE html>
<html lang="de">
<head>

   <meta charset="utf-8">
   
   <title>PornHub</title>
   <link rel = "icon" href = "https://venturebeat.com/wp-content/uploads/2017/03/pornhub_logo.jpg?w=750&strip=all" type = "image/x-icon">
          
   <meta name="description" content="Verleih von Musikinstrumenten">
   <meta http-ewuiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <br>
   
   <!-- import style.css -->
   <link rel="stylesheet" href="register.css">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- Icons -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

</head>

<body class="bg-dark text-white">

    <!-- Navigation-Bar -->
    <?php include ("main/header.php"); ?>

    <!-- Register Section -->

    <section class="vh-100 gradient-custom">
    <div class="container py-6 h-100">
        <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-11 col-xl-10">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px; background-color: #000;">
            <div class="card-body p-5 p-md-6">
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Jetzt registrieren!</h3>

                <form>

                <div class="row">
                    <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <input type="text" id="firstName" class="form-control form-control-lg" required/>
                        <label class="form-label" for="firstName">Vorname *</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4">

                    <div class="form-outline">
                        <input type="text" id="lastName" class="form-control form-control-lg" required/>
                        <label class="form-label" for="lastName">Nachname *</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 d-flex align-items-center">

                    <div class="form-outline datepicker w-100">
                        <input
                        type="date"
                        class="form-control form-control-lg"
                        id="birthdayDate"
                        />
                        <label for="birthdayDate" class="form-label">Geburtsdatum</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4">

                    <h6 class="mb-2 pb-1">Geschlecht: </h6>

                    <div class="form-check form-check-inline">
                        <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="maleGender"
                        value="m"
                        checked
                        />
                        <label class="form-check-label" for="femaleGender">Männlich</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="frmaleGender"
                        value="f"
                        />
                        <label class="form-check-label" for="maleGender">Weiblich</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="otherGender"
                        value="d"
                        />
                        <label class="form-check-label" for="otherGender">Giraffe</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-10 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="text" id="street" class="form-control form-control-lg" required/>
                        <label class="form-label" for="street">Straße *</label>
                    </div>

                    </div>
                    <div class="col-md-2 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="text" id="number" class="form-control form-control-lg" required/>
                        <label class="form-label" for="number">Hausnummer *</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="text" id="zipCode" class="form-control form-control-lg" required/>
                        <label class="form-label" for="zipCode">Postleitzahl *</label>
                    </div>

                    </div>
                    <div class="col-md-8 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="text" id="place" class="form-control form-control-lg" required/>
                        <label class="form-label" for="place">Ort *</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="email" id="emailAddress" class="form-control form-control-lg" required/>
                        <label class="form-label" for="emailAddress">E-Mail *</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="tel" id="phoneNumber" class="form-control form-control-lg" />
                        <label class="form-label" for="phoneNumber">Telefonnummer</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="password" id="pwd" class="form-control form-control-lg" required/>
                        <label class="form-label" for="pwd">Passwort *</label>
                    </div>

                    </div>
                    <div class="col-md-6 mb-4 pb-2">

                    <div class="form-outline">
                        <input type="password" id="pwd" class="form-control form-control-lg" required/>
                        <label class="form-label" for="pwd">Passwort wiederholen *</label>
                    </div>

                    </div>
                </div>

                <div class="row">
                    <input class="btn btn-primary btn-lg" type="submit" value="Absenden" />
                </div>

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
   
    <!-- footer -->
    <?php include ("main/footer.php"); ?>

</body>

</html>