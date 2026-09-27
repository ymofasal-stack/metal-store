<section class="featured-section">

    <div class="container">

        <div class="section-heading">

            <div>
                <span class="section-eyebrow">
                    HANDPICKED
                </span>

                <h2 class="section-title">
                    Featured Products
                </h2>
            </div>

            <a href="#" class="section-link">
                View all
            </a>

        </div>


        <div class="row g-4">

            @foreach ($featuredProducts as $product)

                <div class="col-12 col-sm-6 col-lg-3">

                    <div class="product-card position-relative d-flex flex-column h-100 overflow-hidden">

                        <div class="product-image-wrap position-relative overflow-hidden">

                            <img
                                src="{{ asset($product['image']) }}"
                                alt="{{ $product['name'] }}"
                                class="product-image"
                            >

                            @if ($product['old_price'])
                                <span class="product-badge position-absolute">
                                    SALE
                                </span>
                            @endif

                            <button class="product-quick-add position-absolute" type="button">
                                Quick Add
                            </button>

                        </div>


                        <div class="product-info">

                            <span class="product-category">
                                {{ $product['category'] }}
                            </span>

                            <h3 class="product-name">
                                {{ $product['name'] }}
                            </h3>

                            <div class="product-price-row d-flex align-items-center">

                                <span class="product-price">
                                    ${{ number_format($product['price'], 2) }}
                                </span>

                                @if ($product['old_price'])
                                    <span class="product-old-price">
                                        ${{ number_format($product['old_price'], 2) }}
                                    </span>
                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
