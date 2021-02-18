$(document).ready(function(){
    $('.see-product').click(function(){
        var see = $(this).attr('id');
        if(see == "product"){
            $('.data-product').load('product.php');
        }
    });
});
