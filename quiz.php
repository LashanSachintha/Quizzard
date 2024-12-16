<?php
include_once 'header_home.php';
?>

<head>
    <title>Quiz History</title>
</head>
<body>
    <section class="text-dark" style="min-height: 560px">
        <div class="container py-4 py-xl-5">
            <br>

            <h2 class="text-center">Python</h2>
            <h3 class="text-center text-danger">(You Have 45 min to complete this quiz)</h2>
            <br> <br>
            <h4>
                <span>01. How can we generate random numbers in python using methods?</span>
            </h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="answer1">
                <label class="form-check-label" for="answer1"> random.uniform()</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="answer2">
                <label class="form-check-label" for="answer2"> random.randint()</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="answer3">
                <label class="form-check-label" for="answer3"> random.random()</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="answer" id="answer4">
                <label class="form-check-label" for="answer4"> All of the above</label>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" style="float: right;">&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;</button>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body> 

<?php
include_once 'footer_home.php';
?>