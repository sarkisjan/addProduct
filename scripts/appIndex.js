var $productItem;

function getProducts() {
    var getProd = $.get('reading.php', {

        action: 'getProducts'

    });

    getProd.done(function (data) {
        var rows = JSON.parse(data);
        for (let row of rows) {

            if (row.productType === 'DVD') {
                $productItem = `
                    <div class='productItem'>
                            <input type='checkbox' name='delete_id[]' class='delete-checkbox' value = '${row.id}'>
                            <div class='productInfo'>
                                <ul class='aboutProduct'>
                                    <li id='skuDisplay'>${row.sku}</li>
                                    <li id='nameDisplay'>${row.name}</li>
                                    <li id='priceDisplay'>${row.price} $</li>
                                    <li id='productTypeDisplay'> Size: ${row.size} MB</li>
                                </ul>
                            </div>
                      </div>
                `;
                $('.productList').append($productItem);

            }
            if (row.productType === 'Book') {

                $productItem = `
                    <div class='productItem'>
                        <input type='checkbox' name='delete_id[]' class='delete-checkbox' value = '${row.id}'>
                            <div class='productInfo'>
                                <ul class='aboutProduct'>
                                    <li id='skuDisplay'>${row.sku}</li>
                                    <li id='nameDisplay'>${row.name}</li>
                                    <li id='priceDisplay'>${row.price} $</li>
                                    <li id='productTypeDisplay'> Weight: ${row.weight} Kg</li>
                                </ul>
                            </div>
                    </div>

                `;
                $('.productList').append($productItem);
            }
            if (row.productType === 'Furniture') {
                $productItem = `
                    <div class='productItem'>
                        <input type='checkbox' name='delete_id[]' class='delete-checkbox' value = '${row.id}'>
                            <div class='productInfo'>
                                <ul class='aboutProduct'>
                                    <li id='skuDisplay'>${row.sku}</li>
                                    <li id='nameDisplay'>${row.name}</li>
                                    <li id='priceDisplay'>${row.price} $</li>
                                    <li id='productTypeDisplay'> Dimensions:  ${row.height} cm x ${row.width} cm x ${row.length} cm</li>
                                </ul>
                            </div>
                        </div>
                `;
                $('.productList').append($productItem);

            }

        }
        $('.delete-checkbox').change(function (event) {

            $('.mass_delete').click(function () {
                var ids = [];
                event.target.checked ? ids.push(event.target.value) : null;
                $.post('deleting.php', {
                    action: 'delete',
                    id: ids
                })
                    .done(function () {

                        window.location.href = "index.php";

                    })

            });
        });

    });

}



getProducts();




