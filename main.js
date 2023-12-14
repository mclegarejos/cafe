function addToCart(product) {
    var modal = $("#" + product + "Modal");
    var selectedSize = modal.find("." + product + "Size").val();

    if (!selectedSize) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Please select a size before adding to cart!",
        });
    } else {
        Swal.fire({
            title: "Added to cart!",
            text: product + " has been added to your cart",
            icon: "success"
        });
    }
}

$(document).ready(function () {
    $(".addOns").prop('disabled', true);

    // Toggle search box
    $('#search-icon').click(function () {
        $('.search-box').toggleClass('active');
        $('.navbar').removeClass('active');
    });

    // Toggle menu
    $('#menu-icon').click(function () {
        $('.navbar').toggleClass('active');
        $('.search-box').removeClass('active');
    });

    // Remove classes on scroll
    $(window).scroll(function () {
        $('.navbar').removeClass('active');
        $('.search-box').removeClass('active');
    });

    // Add shadow to header on scroll
    var header = $('header');
    $(window).scroll(function () {
        header.toggleClass('shadow', $(this).scrollTop() > 0);
    });

    
    // Initialize total calculation on modal shown
    $('#saltedcaramelModal, #lemonyakultModal, #javachipModal, #watermelonyakultModal').on('shown.bs.modal', function () {
        calculateTotal($(this));
    });

    // Update total on add-ons click
    $('.addOns').on('click', function () {
        calculateTotal($(this).closest('.modal'));
    });

    // Calculate total cost
    function calculateTotal(modal) {
        var quantity = parseInt(modal.find(".saltedcaramelQuantity, .lemonyakultQuantity, .javachipQuantity, .watermelonyakultQuantity").val()) || 0;
        var selectedSize = modal.find(".saltedcaramelSize, .lemonyakultSize, .javachipSize, .watermelonyakultSize");
        var sizeCost = parseFloat(selectedSize.find('option:selected').val()) || 0;

        var addons = modal.find(".addOns");
        var addonsCost = 0;

        addons.each(function () {
            if ($(this).prop('checked')) {
                addonsCost += parseFloat($(this).val());
            }
        });

        var totalCost = quantity * sizeCost + addonsCost;
        modal.find(".grandtotal").text("Total: ₱" + totalCost.toFixed(2));
        modal.find(".txtgrandtotal").val(totalCost.toFixed(2));
    }

    // Handle quantity input
    $(".saltedcaramelQuantity, .lemonyakultQuantity, .javachipQuantity, .watermelonyakultQuantity").on("input", function () {
        calculateTotal($(this).closest('.modal'));
    });

    // Handle size change
    $(".saltedcaramelSize, .lemonyakultSize, .javachipSize, .watermelonyakultSize").on("change", function () {
        var modal = $(this).closest('.modal');
        if ($(this).val() == '') {
            modal.find(".addOns").prop('checked', false);
            modal.find(".addOns").prop('disabled', true);
        } else {
            modal.find(".addOns").prop('disabled', false);
        }
        calculateTotal(modal);
    });

    // Handle add-ons change
    $(".addOns").on("change", function () {
        calculateTotal($(this).closest('.modal'));
    });


});
