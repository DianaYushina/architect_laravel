@extends('layouts.app')

@section('content')
<div class="p1-products">
            <div class="main-photo-prod">
                <div class="main-text-prod">LOFT</div>
                <div class="sub-text-prod">FIRNITURE</div>
                <div class="small-sub-text-prod">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'</div>
                <div class="small-name-prod"> Lorem Ipsum</div>
                <div class="button-style-product">
                    <div class="s-b_product">
                        <a class="button-decor-product" href="#">Buynow</a>
                    </div>
                    <div class="s-b_product_1">
                        <a class="button-decor-product1" href="#">Explore</a>
                    </div>
                </div>  
            </div> 
        </div>




        <div class="p2-products">
            <div class="p2-tex-product">TRENDING</div>
            <div class="style_bord-p2-product">
                <div class="bord-p2-product"></div>
            </div>

            <div class="style-products_p2_text">
                <div class="t-b-p2-products">
                    <div class="border-p2-products"></div>
                    <div class="text_style_p3_products">Outdoor structure</div>
                    <div class="text_style_p3_products2">Ed ea inciderint con cludatu alia assum assen tior id nec, duo debet mundi cons equnt rei. No sed regione sapient assentior, men itum.</div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/Rectangle 35.png') }}">
                </div>
            </div>

            <div class="style-products_p2_text">
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/image 155.jpg') }}">
                </div>
                <div class="t-b-p2-products">
                    <div class="border-p2-products"></div>
                    <div class="text_style_p3_products">Indoor structure</div>
                    <div class="text_style_p3_products2">Ed ea inciderint con cludatu alia assum assen tior id nec, duo debet mundi cons equnt rei. No sed regione sapient assentior, men itum.</div>
                </div>
            </div>

            <div class="style-products_p2_text">
                <div class="t-b-p2-products">
                    <div class="border-p2-products"></div>
                    <div class="text_style_p3_products">Modern Furniture</div>
                    <div class="text_style_p3_products2">Ed ea inciderint con cludatu alia assum assen tior id nec, duo debet mundi cons equnt rei. No sed regione sapient assentior, men itum.</div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/image 156.jpg') }}">
                </div>
            </div>

            <div class="style-products_p2_text">
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/image 158.jpg') }}">
                </div>
                <div class="t-b-p2-products">
                    <div class="border-p2-products"></div>
                    <div class="text_style_p3_products">Modern Furniture</div>
                    <div class="text_style_p3_products2">Ed ea inciderint con cludatu alia assum assen tior id nec, duo debet mundi cons equnt rei. No sed regione sapient assentior, men itum.</div>
                </div>
            </div>

    
            
            
            <div class="b-product-p2-style">
                <div class="b-product-p2"></div>
            </div>
            <div class="t-n-product-p2">Our Best Seller</div>

            <div class="bord-p2-product-main1">
                <div class="bord-p2-product-main">
                    <div class="photo1-style-p2-produsts">
                        <div class="s-f_p2_products">
                            <img class="ph-p2-products" src="{{ asset ('img/chairs/home-design-removebg-preview 1.png') }}"/>
                        </div>
                         <div class="b-s_products">
                            <div class="h-text-p2-product">BEST-SELLER</div>
                            <div class="h-text-p2-product1">Getting out in fresh air and shaking off too much indoor, screen time should be important to everyone. We’re designed to endure different temperatures and weather systems. Getting out in fresh air and shaking off too much indoor, screen time should be important to everyone....</div>
                        </div>
                    </div>
                 </div>
            </div> 
    
            
            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                @foreach($products as $prod)
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset($prod->picture) }}">
                        <a class="addCart" id="good-{{ $prod->id }}-{{ $prod->price }}" href="#">
                            <img class="pos-product-order" src="{{ asset('img/123.png') }}" width="40px">
                        </a>
                        <div>
                            <div class="t-product-p">{{ $prod->name }}</div>
                            <div class="price_product">${{ $prod->price }}</div>
                            <div class="text-product-p">{{ $prod->description_small }}</div>
                            <div>
                                <!-- <div class="stars-{{ $prod->stars }}"></div> -->
                                <div class="material-icons">
                                    <?php  
                                        echo str_repeat("star ", $prod->stars);
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    
                </div>
            </div>

            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                   
                </div>
            </div>
           
            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    <div>
                        <div class="chair-t-products">Why do we use it?</div>
                        <div class="chair-text-products">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.  </div>
                    </div>
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/chairs/Furniture 1.png') }}">
                    </div>
                </div>
            </div> 

            <div class="b-product-p2-style">
                <div class="b-product-p2"></div>
            </div>
            <div class="t-n-product-p2">Our Best Seller</div>
            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/bed/bed_prima_005.jpeg') }}">
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Gray bed</div>
                            <div class="price_product">$249</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                            <div>
                                <div class="stars-products">
                                    <span class="material-icons">
                                        star star star star_half star_border
                                        </span>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/bed/bauntibed_000.jpeg') }}">
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Velvet gold bed</div>
                            <div class="price_product">$369</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                            <div>
                                <div class="stars-products">
                                    <span class="material-icons">
                                        star star star star star_border
                                        </span>
                                </div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/bed/bed_odri_3.jpeg') }}">
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Gray bed</div>
                            <div class="price_product">$189.50</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                            <div>
                                <div class="stars-products">
                                    <span class="material-icons">
                                    star star star star_border star_border
                                    </span></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/bed/garmoniya_002.jpeg') }}">
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Brownbed</div>
                            <div class="price_product">$299.50</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                            <div>
                                <div class="stars-products">
                                    <span class="material-icons">
                                    star star star star star_border
                                    </span></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="b-product-p2-style">
                <div class="b-product-p2"></div>
            </div>
            <div class="t-n-product-p2">New Collections</div>
            <div class="photo-style-p2-produsts">
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/lamps/catherine-G5vrZGOHPoM-unsplash 1.jpg') }}"/>
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Love lamps</div>
                        <div class="price_product">$59.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_half star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/lamps/i-m__prakhar-kont-hUVHv2CUihY-unsplash 1.jpg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Tranquility </div>
                        <div class="price_product">$49.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        
<div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    <div class="s-f_p2_products">
                        <div>
                            <img class="ph-p2-products_2_2" src="{{ asset ('img/lamps/Rectangle 46.jpg') }}"/>
                            <a href="#"><img class="pos-product-order_2_2" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        </div>
                        <div class="text-style_product_p2">Stacked Rock Lamp</div>
                        <div class="price_product">$49.50</div>
                        <div class="sub-text-style_product_p2">Now days LED lights are generally utilized by  It helps carbon.</div>
                        <div class="s_a_product-p2">
                            <a class="s_s_a_product-p2" href="#">Read More</a>
                        </div>
                    </div> 
                    <div class="s-f_p2_products"> 
                        <div>
                            <img class="ph-p2-products_2_2" src="{{ asset ('img/lamps/Rectangle 44.jpg') }}"/>
                            <a href="#"><img class="pos-product-order_2_2" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        </div>
                        <div class="text-style_product_p2">Torchiere Lamp</div>
                        <div class="price_product">$49.50</div>
                        <div class="sub-text-style_product_p2">Now days LED lights are generally utilized by individuals to spare .</div>
                        <div class="s_a_product-p2">
                            <a class="s_s_a_product-p2" href="#">Read More</a>
                        </div>
                    </div>
                    <div class="s-f_p2_products">
                        <div>
                            <img class="ph-p2-products_2_2" src="{{ asset ('img/lamps/Rectangle 45.jpg') }}"/>
                            <a href="#"><img class="pos-product-order_2_2" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        </div>
                        <div class="text-style_product_p2">Multi-Way or Tree Lamp</div>
                        <div class="price_product">$49.50</div>
                        <div class="sub-text-style_product_p2">Now days LED lnature and power. It helps carbon.</div>
                        <div class="s_a_product-p2">
                            <a class="s_s_a_product-p2" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
           

            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/lamps/eJPm3aDb1b 3.jpg') }}"/>
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Dawn lamp</div>
                            <div class="price_product">$149.50</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                            <div>
                                <div class="stars-products"><span class="material-icons">
                                    star star star star star
                                    </span></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                    <div class="s-f_p2_products">
                        <img class="ph-p2-products" src="{{ asset ('img/lamps/Qga7CanoRZ 1.jpg') }}"/>
                        <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                        <div>
                            <div class="t-product-p">Luminous lamp</div>
                            <div class="price_product">$199.50</div>
                            <div class="text-product-p">The readable content of a page when looking at its layout .</div>
                            <div>
                                <div class="stars-products"><span class="material-icons">
                                    star star star star_half star_border
                                    </span></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bord-p2-product-main1">
                <div class="photo-style-p2-produsts">
                    <div class="l-style-products">
                        <div class="lamps-t-products">Why do we use it?</div>
                        <div class="lampr-text-products">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.  </div>
                    </div>
                    <div class="s-f_p2_products-l">
                        <img class="ph-p2-products-lamps" src="{{ asset ('img/lamps/sue-hughes-_QcxiSUIwbE-unsplash 1.jpg') }}">
                    </div>
                </div>
            </div>
        </div> 

        <div class="b-product-p2-style">
            <div class="b-product-p2"></div>
        </div>
        <div class="t-n-product-p2">Discounts</div>

        <div class="bord-p2-product-main1">
            <div class="photo-style-p2-produsts">
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/3table_10163_1.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Galaxy</div>
                        <div class="price_product">$89</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_half star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/classic_t102_00.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Sweetheart table</div>
                        <div class="price_product">$260</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_half
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/st132_01.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Butterfly table</div>
                        <div class="price_product">$60</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/classic_t101n_01.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Sunshine table</div>
                        <div class="price_product">$120</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star_half star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/0_st-101_stand.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Behaviour table</div>
                        <div class="price_product">$49.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_half star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/t301_0.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Delicacy table</div>
                        <div class="price_product">$419.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/classic_t102n_0.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Infinity table</div>
                        <div class="price_product">$149.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/table/table_10163_011_.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Perfection table </div>
                        <div class="price_product">$200</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_half
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bord-p2-product-main1">
            <div class="photo-style-p2-produsts">
            </div>
        </div>



        <div class="b-product-p2-style">
            <div class="b-product-p2"></div>
        </div>
        <div class="t-n-product-p2">Our Best Seller</div>


        <div class="bord-p2-product-main1">
            <div class="photo-style-p2-produsts">
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/003_palermo_dk.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Reconciliation sofa</div>
                        <div class="price_product">$490.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/sofatokio_005.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Solitude sofa</div>
                        <div class="price_product">$309.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_half star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/arizonadk00.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Success sofa</div>
                        <div class="price_product">$390.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/dk_relotinew_001.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Demure sofa</div>
                        <div class="price_product">$209.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_half star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/nikoletti2700ugl_0101.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Fabulous sofa</div>
                        <div class="price_product">$449.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/ugl_richi_0032.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Gorgeous sofa</div>
                        <div class="price_product">$490.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/sergio_sofacorner000.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Insatiable  sofa</div>
                        <div class="price_product">$500</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star_border star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/ugl_santa_041.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Pure sofa</div>
                        <div class="price_product">$419.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_half
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/uglovoi-nikolettiugl_001.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Sempiternal sofa </div>
                        <div class="price_product">$649.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_border
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/divan_richim1.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Wonderful sofa</div>
                        <div class="price_product">$449.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/relotinew3400sofa_11.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Unbelievable sofa</div>
                        <div class="price_product">$849.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <div class="s-f_p2_products">
                    <img class="ph-p2-products" src="{{ asset ('img/sofa/luidgi_preview1.jpeg') }}">
                    <a href="#"><img class="pos-product-order" src="{{ asset ('img/123.png') }}" width="40px"></a>
                    <div>
                        <div class="t-product-p">Twinkling  sofa</div>
                        <div class="price_product">$749.50</div>
                        <div class="text-product-p">The readable content of a page when looking at its layout.</div>
                        <div>
                            <div class="stars-products"><span class="material-icons">
                                star star star star star_half
                                </span></div>
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bord-p2-product-main1">
            <div class="photo-style-p2-produsts">
            </div>
        </div>

        <div class="bord-p2-product-main1">
            <div class="photo-style-p2-produsts">
            </div>
        </div>

@endsection
