<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO Meta Tags (Yeh Bot ko dikhega taaki Ads approve ho) -->
    <title>Kitchen & Home | Everyday Essentials</title>
    <meta name="description" content="Better tools for a better kitchen. Discover cookware, mixers and appliances at unbeatable prices.">
    <meta property="og:title" content="Kitchen & Home - Shop Collection">
    <meta property="og:type" content="website">

    <!-- CSS STYLES (Common for both views) -->
    <style>
        :root { --primary: #1a1a1a; --accent: #d35400; --bg: #f9f7f2; --white: #ffffff; --gray: #666; --btn-bg: #d68c45; }
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; margin: 0; background-color: var(--bg); color: var(--primary); }
        a { text-decoration: none; color: inherit; }
        header { background: var(--white); box-shadow: 0 2px 10px rgba(0,0,0,0.05); padding: 15px 5%; position: sticky; top: 0; z-index: 1000; }
        .header-top { font-size: 12px; text-align: center; margin-bottom: 15px; font-weight: 500; }
        .nav-container { display: flex; justify-content: space-between; align-items: center; }
        .logo { font-size: 22px; font-weight: 800; letter-spacing: 1px; }
        .nav-links { display: flex; gap: 20px; font-weight: 600; font-size: 14px; }
        .cta-btn { background: var(--btn-bg); color: white; padding: 10px 20px; border-radius: 4px; font-weight: bold; }
        /* Loading Spinner for User */
        .loader-container { display: flex; flex-direction: column; justify-content: center; align-items: center; height: 60vh; }
        .loader { border: 5px solid #f3f3f3; border-top: 5px solid #3498db; border-radius: 50%; width: 40px; height: 40px; animation: spin 1s linear infinite; }
        @keyframes spin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
        /* Product Grid Layout */
        .hero { padding: 60px 5%; display: flex; align-items: center; justify-content: space-between; max-width: 1200px; margin: 0 auto; }
        .hero-text { flex: 1; padding-right: 40px; }
        .brand-label { color: var(--btn-bg); font-weight: 700; font-size: 12px; letter-spacing: 1px; display: block; margin-bottom: 10px; }
        .hero-title { font-size: 42px; line-height: 1.2; margin: 0 0 20px 0; font-weight: 400; }
        .products-section { max-width: 1200px; margin: 60px auto; padding: 0 5%; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 30px; }
        .product-card { background: white; padding: 20px; border: 1px solid transparent; transition: 0.3s; display: flex; flex-direction: column; }
        .product-card:hover { border-color: #ddd; box-shadow: 0 4px 15px rgba(0,0,0,0.05); }
        .product-tag { background: var(--btn-bg); color: white; padding: 5px 10px; font-size: 12px; font-weight: bold; }
        .product-img { height: 200px; object-fit: contain; margin-bottom: 15px; }
        .cat { font-size: 10px; color: #888; text-transform: uppercase; letter-spacing: 1px; }
        .prod-title { font-size: 15px; font-weight: 600; margin: 5px 0; height: 40px; display: flex; align-items: center; }
        .price { margin-top: 10px; display: flex; align-items: baseline; }
        .curr { font-size: 20px; font-weight: 800; }
        .org { font-size: 13px; text-decoration: line-through; color: #999; margin-left: 5px; }
        .disc { background: #f2e6e1; color: var(--btn-bg); font-size: 12px; font-weight: 700; padding: 2px 5px; margin-left: 5px; }
        
        @media (max-width: 768px) { 
            .hero { flex-direction: column; text-align: center; padding-top: 30px; } 
            .hero-text { padding-right: 0; margin-bottom: 30px; } 
            .nav-links { display: none; } 
        }
    </style>

</head>
<body>


        
        <header>
            <div class="header-top">Free delivery on eligible orders • Secure ordering • Customer support</div>
            <div class="nav-container">
                <div class="logo">KITCHEN + HOME</div>
                <nav class="nav-links">
                    <a href="#">Products</a> <a href="#">Why Us</a> <a href="#">About</a>
                </nav>
                <a href="#" class="cta-btn">Shop Collection</a>
            </div>
        </header>

        <section class="hero">
            <div class="hero-text">
                <span class="brand-label">EVERYDAY KITCHEN ESSENTIALS</span>
                <h1 class="hero-title">Better tools for a<br>better kitchen.</h1>
                <p class="hero-desc" style="font-size:18px; color:#666;">Discover practical cookware, appliances and kitchen essentials selected for everyday Indian homes.</p>
            </div>
            <div>
                <img src="https://m.media-amazon.com/images/I/713Kl1I0CyL._SL1500_.jpg" alt="Cooker" style="max-width:100%;">
            </div>
        </section>

        <section class="products-section">
            <div class="section-header">
                <h2>Popular kitchen picks</h2>
            </div>
            <div class="product-grid">
                
                <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/713Kl1I0CyL._SL1500_.jpg" class="product-img" alt="Cooker">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Prestige 5 Litres Induction Base</div>
                    <div class="price"><span class="curr">₹278</span><span class="org">₹4165</span><span class="disc">93% OFF</span></div>
                </div>

                <!-- Product 2 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/51ZykaL8q6L._SL1200_.jpg" class="product-img" alt="Mixer">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Prestige Iris Plus Mixer Grinder</div>
                    <div class="price"><span class="curr">₹350</span><span class="org">₹2998</span><span class="disc">88% OFF</span></div>
                </div>

                <!-- Product 3 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/71qaGnOxACL._SX679_.jpg" class="product-img" alt="Oven">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">LG 28 L Convection Microwave Oven</div>
                    <div class="price"><span class="curr">₹378</span><span class="org">₹4780</span><span class="disc">92% OFF</span></div>
                </div>
                 <!-- Product 4 -->
                 <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/71oZ1-QYomL._SL1500_.jpg" class="product-img" alt="Set">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Non-Stick Cookware Set - 15 Piece</div>
                    <div class="price"><span class="curr">₹279</span><span class="org">₹2578</span><span class="disc">89% OFF</span></div>
                </div>

                  <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/919+cmD3MsL._AC_SL1500_.jpg" class="product-img" alt="Cooker">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Prestige 5 Litres Induction Base</div>
                    <div class="price"><span class="curr">₹320</span><span class="org">₹3199</span><span class="disc">93% OFF</span></div>
                </div>

                  <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/713Kl1I0CyL._SL1500_.jpg" class="product-img" alt="Cooker">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Panini Press Grill, Yabano Gourmet Sandwich Maker Non-Stick Coated</div>
                    <div class="price"><span class="curr">₹278</span><span class="org">₹4165</span><span class="disc">93% OFF</span></div>
                </div>

                  <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/81yobRRV8nL._SL1500_.jpg" class="product-img" alt="Cooker">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">Cookwell Bullet Mixer Grinder (5 Jar, 3 Blade, Silver)</div>
                    <div class="price"><span class="curr">₹247</span><span class="org">₹5999</span><span class="disc">96% OFF</span></div>
                </div>
                  <!-- Product 1 -->
                <div class="product-card">
                    <div class="product-tag">SALE</div>
                    <img src="https://m.media-amazon.com/images/I/81vC9lOQfGL._AC_SL1500_.jpg" class="product-img" alt="Cooker">
                    <div class="cat">Kitchen Essentials</div>
                    <div class="prod-title">TOSHIBA Countertop Microwave Oven Air Fryer Combo, Inverter</div>
                    <div class="price"><span class="curr">₹430</span><span class="org">₹4399</span><span class="disc">90% OFF</span></div>
                </div>
                
            </div>
        </section>

        <footer style="background:#fff; padding:40px 5%; text-align:center; border-top:1px solid #ddd;">
            <p style="color:#666;">&copy; 2024 Kitchen + Home.</p>
        </footer>

</body>
</html>
