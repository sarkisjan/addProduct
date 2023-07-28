

$('#productType').change(function () {
    this.value === 'DVD' ? $('.shown_form_inputs').html(`<div class="product_form_item DVD"><label for="size">Size (MB)</label><input id="size" class="inputs" type="number" placeholder="enter size" name="size"><span class="error" id="sizeError"></span></div>`) : null;

    this.value === 'Book' ? $('.shown_form_inputs').html(`<div class="product_form_item Book"><label for="weight">Weight (Kg)</label>
        <input id="weight" class="inputs" type="number" placeholder="enter weight" name="weight"><span class="error" id="weightError"></span></div>`) : null;

    this.value === 'Furniture' ?
        $('.shown_form_inputs').html(`<div class="Furniture">
            <div class="product_form_item">
                <label for="height">Height (cm)</label>
                <input id="height" class="inputs" type="number" placeholder="enter height" name="height"><span class="error" id="heightError"></span>
            </div>
    
            <div class="product_form_item">
                <label for="width">Width (cm)</label>
                <input id="width" class="inputs" type="number" placeholder="enter width" name="width"><span class="error" id="widthError"></span>
            </div>
    
            <div class="product_form_item">
                <label for="length">Length (cm)</label>
                <input id="length" class="inputs" type="number" placeholder="enter length" name="length"><span class="error" id="lengthError"></span>
            </div>`) : null;
});

$('#product_form').submit(function (e) {
    e.preventDefault();

    var action = 'insert';
    insertProduct('adding.php', action);

});



function insertProduct(url, action) {
    var post = $.post(url, {
        sku: $('#sku').val(),
        name: $('#name').val(),
        price: $('#price').val(),
        productType: $('#productType').val(),
        size: $('#size').val(),
        weight: $('#weight').val(),
        width: $('#width').val(),
        length: $('#length').val(),
        height: $('#height').val(),
        action: action

    });
    post.done(function (data) {
        var errors = JSON.parse(data);
        errors.sku ? $('#skuError').text(errors.sku) : $('#skuError').text('');
        errors.name ? $('#nameError').text(errors.name) : $('#nameError').text('');
        errors.price ? $('#priceError').text(errors.price) : $('#priceError').text('');
        errors.size ? $('#sizeError').text(errors.size) : $('#sizeError').text('');
        errors.weight ? $('#weightError').text(errors.weight) : $('#weightError').text('');
        errors.width ? $('#widthError').text(errors.width) : $('#widthError').text('');
        errors.height ? $('#heightError').text(errors.height) : $('#heightError').text('');
        errors.length ? $('#lengthError').text(errors.length) : $('#lengthError').text('');
        if (errors.length === 0) {
            window.location.href = "index.php";
        }
    });

}


