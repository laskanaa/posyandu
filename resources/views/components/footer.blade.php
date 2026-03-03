<footer class="footer">

    <div class="footer-container">

        <!-- Pengertian Posyandu -->
        <div class="footer-section">
            <h3>Posyandu</h3>
            <p>
                Posyandu (Pos Pelayanan Terpadu) merupakan layanan kesehatan
                masyarakat yang berfokus pada pemantauan pertumbuhan balita,
                pencegahan stunting, serta peningkatan gizi anak.
            </p>
        </div>

        <!-- Navigasi -->
        <div class="footer-section">
            <h3>Navigasi</h3>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>

        <!-- Hubungi -->
        <div class="footer-section">
            <h3>Hubungi</h3>
            <p>
                Email: info@posyandu.id <br>
                Telp: 0812-3456-7890
            </p>
        </div>

        <!-- Lokasi -->
        <div class="footer-section">
            <h3>Lokasi</h3>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d..." allowfullscreen=""
                    loading="lazy">
                </iframe>
            </div>
        </div>

    </div>

    <div class="footer-bottom">
        © {{ date('Y') }} Sistem Monitoring Posyandu. All Rights Reserved.
    </div>

</footer>


<style>
    .footer {
        background-color: #0d4f4d;
        color: white;
        padding: 60px 80px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 50px;
    }

    .footer-section {
        flex: 1;
        min-width: 220px;
    }

    .footer-section h3 {
        margin-bottom: 20px;
        font-size: 18px;
        letter-spacing: 0.5px;
    }

    .footer-section p,
    .footer-section li {
        font-size: 14px;
        line-height: 1.8;
        opacity: 0.9;
    }

    .footer-section ul {
        list-style: none;
        padding: 0;
    }

    .footer-section ul li {
        margin-bottom: 10px;
    }

    .footer-section a {
        color: white;
        text-decoration: none;
        transition: 0.3s;
    }

    .footer-section a:hover {
        opacity: 0.7;
    }

    .map-container {
        width: 100%;
        height: 200px;
        margin-top: 15px;
    }

    .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
        border-radius: 10px;
    }

    .footer-bottom {
        margin-top: 50px;
        padding-top: 25px;
        text-align: center;
        font-size: 13px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        opacity: 0.8;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .footer {
            padding: 40px 25px;
        }

        .footer-container {
            gap: 35px;
        }
    }
</style>