<x-layout-end-user>
    @push('title')
        <title>Flavor Name</title>
    @endpush

    @push('styles')
        <link href="{{ asset('css/item-styles.css') }}" rel="stylesheet">
    @endpush

    <div class="row">
        <div class="column1">
            <!-- BACKEND: change image depending on the item -->
            <img src="{{ asset('images/placeholder.jpg') }}" id="product-image">
        </div>

        <div class="column2">
            <div class="vertical-center">
                <!-- BACKEND: change details depending on the item -->
                <h1 id="flavor">Flavor</h1>
                <p id="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pellentesque augue
                    vitae lacus cursus, sit amet maximus erat fermentum.</p>
                <h3 id="price">₱ 000.00</h3>

                <hr id="divider">
                <br>

                <div class="quantity-container">
                    <div class="quantity-content">
                        <form action="menu.php">
                            <label for="quantity">Quantity</label>
                            <input type="number" name="quantity" placeholder="0" min="0" value="0"
                                required>

                            <input type="submit" name="add" value="Add">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout-end-user>
