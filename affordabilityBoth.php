<?php 
    require('auth_session.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>afford Calculator </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">

		<!-- CSS here -->
            <link rel="stylesheet" href="Calassets/css/bootstrap.min.css">
            <link rel="stylesheet" href="Calassets/css/owl.carousel.min.css">


            <link rel="stylesheet" href="Calassets/css/magnific-popup.css">
            <link rel="stylesheet" href="Calassets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="Calassets/css/themify-icons.css">
            <link rel="stylesheet" href="Calassets/css/slick.css">
            <link rel="stylesheet" href="Calassets/css/nice-select.css">
            <link rel="stylesheet" href="Calassets/css/style.css">
   </head>

   <body>

    <?php include'navbar/bothNav.php'?>
    <main>

        <!-- Hero Start-->
        <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-50">
                            <h2>affordability Calculator</h2>
                            <p>Please enter the gross salary, repayment period and the affordability Calculator will calculate result you are to pay if you qualify for the loan on a 13% interest rate</p>
                            <sub text-warning>Disclaimer:This loan calculator is for informational purposes only and should not be considered financial advice. </sub>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <!--Hero End -->
        <!-- Apply Area Start -->
        <div class="apply-area pt-150 pb-150">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="apply-wrapper">
                            <!-- Form -->
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-6">
                                       <div class="single-form">
                                            <label> Gross Monthly Income (M) </label>
                                            <input type="text" name="Income" id="loan"  placeholder="M0.00" min="0">
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <label> repayment period (Months) </label>
                                            <input type="range"  name="" min="120" max="300" oninput="updateRangeValue(this)">
                                            <span id="range-value">120</span> </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="single-form">
                                            <input type="submit" class="btn apply-btn btn-sm mt-30" name="Calculate" value="calculate" onclick="calculateInstallment()">
                                       </div>
                                    </div>
                                    
                                <script>
                                    function updateRangeValue(slider) {
                                        const value = slider.value;
                                        const rangeValueElement = document.getElementById('range-value');
                                        rangeValueElement.textContent = value; // Update the span content
                                    }

                                    function calculateInstallment() {
                                        // Prevent default form submission behavior
                                        event.preventDefault();

                                        // Get input values and handle potential errors
                                        const income = parseFloat(document.getElementById('loan').value);
                                        if (isNaN(income)) {
                                            alert("Please enter a valid number for your income.");
                                            return; // Exit function if income is invalid
                                        }

                                        const repaymentPeriod = parseInt(document.getElementById('range-value').textContent);

                                        // Calculate estimated monthly payment (assuming no down payment)
                                        const interestRate = 0.13; // 13% annual interest rate
                                        const loanAmount = 100000; // Placeholder value, replace with actual loan amount calculation

                                        const monthlyInterestRate = interestRate / 12;
                                        const totalPayments = repaymentPeriod;
                                        const monthlyInstallment = (loanAmount * monthlyInterestRate * Math.pow(1 + monthlyInterestRate, totalPayments)) / (Math.pow(1 + monthlyInterestRate, totalPayments) - 1);

                                        // Calculate Debt-to-Income Ratio (DTI) (assuming no existing debt)
                                        const dti = monthlyInstallment / income;

                                        // Display results with affordability message
                                        const message = dti <= 0.36 ? "You may be able to afford this loan." : "This payment might strain your budget. Consider a smaller loan or longer repayment period.";

                                        alert(`Monthly Installment: M${monthlyInstallment.toFixed(2)}\nDebt-to-Income Ratio (DTI): ${dti.toFixed(2)}\n${message}`);
                                    }
                                </script>
                                </div>
                            </form>
                            <!-- End From -->
                            <hr style="background-color: black;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Apply Area End -->

    </main>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>


    <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html>