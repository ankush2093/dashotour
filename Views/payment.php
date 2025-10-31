<?php include 'header.php';?>
    <style>
        .header_nav {
            position: initial !important;
        }
    </style>

<section class="payment_section section_panel">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="main_heading">Complete Your <span class="uniq_text_span">Payment</span></h1>
            </div>
        </div>

        <div class="row">
            <!-- Left Side - QR Codes -->
            <div class="col-lg-8 col-md-7">
                <div class="payment_qr_container">
                    <div class="payment_info_box">
                        <h3 class="payment_info_title">Scan & Pay</h3>
                        <p class="payment_info_text">Scan the QR code below using your preferred payment app to complete the booking</p>
                    </div>

                    <!-- PhonePe QR Code -->
                    <div class="qr_payment_card">
                        <div class="qr_header">
                            <div class="qr_icon_box phonepe_bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#fff">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="qr_title_box">
                                <h4 class="qr_payment_title">PhonePe</h4>
                                <p class="qr_payment_subtitle">Pay using PhonePe UPI</p>
                            </div>
                        </div>
                        <div class="qr_code_box">
                            <img src="https://kinsta.com/wp-content/uploads/2019/03/kinsta-qr-code.png" alt="PhonePe QR Code" class="qr_code_image">
                            <p class="qr_scan_text">Scan with PhonePe app</p>
                        </div>                       
                    </div>

                    <!-- Google Pay QR Code -->
                    <div class="qr_payment_card">
                        <div class="qr_header">
                            <div class="qr_icon_box gpay_bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="#fff">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                            </div>
                            <div class="qr_title_box">
                                <h4 class="qr_payment_title">Google Pay</h4>
                                <p class="qr_payment_subtitle">Pay using Google Pay UPI</p>
                            </div>
                        </div>
                        <div class="qr_code_box">
                            <img src="https://kinsta.com/wp-content/uploads/2019/03/kinsta-qr-code.png" alt="Google Pay QR Code" class="qr_code_image">
                            <p class="qr_scan_text">Scan with Google Pay app</p>
                        </div>
                    </div>

                    <!-- Payment Instructions -->
                    <div class="payment_instructions">
                        <h4 class="instructions_title">How to Pay?</h4>
                        <ul class="instructions_list">
                            <li>
                                <span class="instruction_number">1</span>
                                <span class="instruction_text">Open PhonePe or Google Pay app on your mobile</span>
                            </li>
                            <li>
                                <span class="instruction_number">2</span>
                                <span class="instruction_text">Scan the QR code above</span>
                            </li>
                            <li>
                                <span class="instruction_number">3</span>
                                <span class="instruction_text">Enter the amount and complete the payment</span>
                            </li>
                            <li>
                                <span class="instruction_number">4</span>
                                <span class="instruction_text">Take a screenshot of the payment confirmation</span>
                            </li>
                            <li>
                                <span class="instruction_number">5</span>
                                <span class="instruction_text">Click "Payment Done" button to confirm your booking</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Side - Sticky CTA -->
            <div class="col-lg-4 col-md-5">
                <div class="payment_cta_sticky">
                    <div class="payment_summary_card">
                        <h3 class="summary_title">Booking Summary</h3>
                        
                        <div class="summary_item">
                            <span class="summary_label">Package Name:</span>
                            <span class="summary_value">Himachal Tour Package</span>
                        </div>
                        
                        <div class="summary_item">
                            <span class="summary_label">Duration:</span>
                            <span class="summary_value">5 Nights 6 Days</span>
                        </div>
                        
                        <div class="summary_item">
                            <span class="summary_label">Travelers:</span>
                            <span class="summary_value">2 Adults</span>
                        </div>
                        
                        <div class="summary_item">
                            <span class="summary_label">Travel Date:</span>
                            <span class="summary_value">15 Nov 2025</span>
                        </div>
                        
                        <div class="summary_divider"></div>
                        
                        <div class="summary_total">
                            <span class="total_label">Total Amount</span>
                            <span class="total_amount">₹ 25,000</span>
                        </div>
                        
                        <button class="payment_done_btn" onclick="confirmPayment()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Payment Done
                        </button>
                        
                        <p class="payment_note">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533z"/>
                                <circle cx="8" cy="4.5" r="1"/>
                            </svg>
                            Click the button only after completing the payment
                        </p>
                    </div>
                    
                    <div class="payment_support_box">
                        <h4 class="support_title">Need Help?</h4>
                        <p class="support_text">Contact us for payment assistance</p>
                        <a href="tel:+911234567890" class="support_call_btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                            </svg>
                            Call Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section_panel extra_padding">

</section>

<?php include 'footer.php';?>



