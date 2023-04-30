var recruitTotal = jQuery('#recruitTotal');
var recruitSavingsTotal = jQuery('#recruitSavingsTotal');

jQuery('.money-calculator').on('keyup change', 'input, select', function() {
    var recruitAmount = parseFloat(jQuery('#recruitAmount').val());
    var agencyFees = parseFloat(jQuery('#agencyFees').val());
    var recruitPeople = parseFloat(jQuery('#recruitPeople').val());
    var campaignPrice = parseFloat(jQuery('#campaignPrice').val());
    var recruitTotalCal = ((recruitAmount * agencyFees) / 100) * recruitPeople;
    if(recruitTotalCal > 0) {
    recruitTotal.text(recruitTotalCal.toFixed(2)); 
    } else {
    recruitTotal.text('0.00'); 
    }
    
    var campaignPriceCal = recruitTotalCal - campaignPrice;
    if(campaignPriceCal > 0) {
    recruitSavingsTotal.text(campaignPriceCal.toFixed(2)); 
    } else {
    recruitSavingsTotal.text('0.00'); 
    }
});