$(document).ready(function () {
    $(".addOns").prop('disabled', true);

    $('#search-icon').click(function () {
        $('.search-box').toggleClass('active');
        $('.navbar').removeClass('active');
    });

    $('#menu-icon').click(function () {
        $('.navbar').toggleClass('active');
        $('.search-box').removeClass('active');
    });

    $(window).scroll(function () {
        $('.navbar').removeClass('active');
        $('.search-box').removeClass('active');
    });

    var header = $('header');

    $(window).scroll(function () {
        header.toggleClass('shadow', $(this).scrollTop() > 0);
    });

    $(document).on('DOMContentLoaded', function () {
        $('#saltedcaramel').on('shown.bs.modal', function () {
            calculateTotal();
        });
    });

    $('.addOns').on('click', function() {
        calculateTotal();
    });

    function calculateTotal() {
        var quantity = parseInt($("#quantity").val()) || 0;

        var selectedSize = $("#size");
        var sizeCost = selectedSize.find('option:selected').val() || 0;

        var addons = $(".addOns");

        var addonsCost = 0;

        addons.each(function () {
            if ($(this).prop('checked')) {
                addonsCost += parseFloat($(this).val());
                console.log($(this).val());
            }
        });

        var totalCost = quantity * parseFloat(sizeCost) + addonsCost;
        console.log(addonsCost);
        $("#grandtotal").text("Total: ₱" + totalCost.toFixed(2));
        $("#txtgrandtotal").val(totalCost.toFixed(2));
    }

    $("#quantity").on("input", calculateTotal);
    
    $("#size").on("change", function() {
        if ($(this).val() == '') {
            $(".addOns").prop('checked', false);
            $(".addOns").prop('disabled', true);
        } else {
            $(".addOns").prop('disabled', false);
        }
        calculateTotal();
    });

    $("[name='addons']").on("change", calculateTotal);

    function addToCart() {
        alert("Added to cart!");
    }

});