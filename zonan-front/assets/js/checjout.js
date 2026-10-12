

// ============================================
// CHECKOUT PAGE - Payment Method Toggle
// ============================================

(function($) {
    "use strict";

    
      $(document).ready(function() {

      // Get elements
      let codRadio = $('#cashOnDelivery');
      let cardRadio = $('#creditCard');
      let cardForm = $('#cardDetailsForm');
      

      // Function to toggle card details
      function toggleCardDetails() {
       
          if (cardRadio.is(':checked')) {
              cardForm.slideDown(300);
          } else {
              cardForm.slideUp(300);
          }
      }

      // Run on page load (COD is checked by default)
      toggleCardDetails();

      // Run whenever payment method changes
      $('input[name="paymentMethod"]').on('change', function() {
          toggleCardDetails();
      });
  });

  // ============================================
//  End  CHECKOUT PAGE - Payment Method Toggle
// ============================================
  
    
})(jQuery);



    (function($) {
        "use strict";

        // Wait for DOM to be ready
        $(document).ready(function() {

            // Get elements
           let termsCheckbox = $('#termsCheckbox');
           let confirmBtn = $('#confirmOrderBtn');
           let popupOverlay = $('#popup-pay');
           let popupCloseBtn = $('#popupCloseBtn');
           let popupContinueBtn = $('#popupContinueBtn');
           let orderIdDisplay = $('#orderIdDisplay');

            // 1️⃣ Enable/Disable Confirm Button based on Terms checkbox
            termsCheckbox.on('change', function() {
                if ($(this).is(':checked')) {
                    confirmBtn.prop('disabled', false);
                } else {
                    confirmBtn.prop('disabled', true);
                }
            });

            // 2️⃣ Generate Random Order ID
            function generateOrderId() {
               let prefix = 'ORD';
               let year = new Date().getFullYear();
               let randomNum = Math.floor(Math.random() * 9000 + 1000);
                return '#' + prefix + '-' + year + '-' + randomNum;
            }

            // 3️⃣ Show Popup on Confirm Button Click
            confirmBtn.on('click', function() {
                // Generate random Order ID
               let orderId = generateOrderId();
                orderIdDisplay.text(orderId);

                // Show popup
                popupOverlay.fadeIn(300);
                $('body').css('overflow', 'hidden'); // Prevent scrolling
            });

            // 4️⃣ Close Popup - Close Button
            popupCloseBtn.on('click', function() {
                popupOverlay.fadeOut(300);
                $('body').css('overflow', 'auto');
                // Reset form (optional)
                termsCheckbox.prop('checked', false);
                confirmBtn.prop('disabled', true);
            });

            // 5️⃣ Close Popup - Continue Button
            popupContinueBtn.on('click', function() {
                popupOverlay.fadeOut(300);
                $('body').css('overflow', 'auto');
                // Reset form (optional)
                termsCheckbox.prop('checked', false);
                confirmBtn.prop('disabled', true);
            });

            // 6️⃣ Close Popup - Click outside
            popupOverlay.on('click', function(e) {
                if ($(e.target).is(popupOverlay)) {
                    popupOverlay.fadeOut(300);
                    $('body').css('overflow', 'auto');
                    termsCheckbox.prop('checked', false);
                    confirmBtn.prop('disabled', true);
                }
            });

        });

    })(jQuery);
