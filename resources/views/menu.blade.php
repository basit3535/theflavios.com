<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Restaurant Menu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pinyon+Script&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            padding:70px 20px 20px 20px;
            max-width: 900px;
            margin: auto;
            color: #fff;
            background-color: #1F3634
        }

        .menu-container {
            max-width: 1000px;
            margin: auto;
            border: 2px solid #BF953F;
            padding: 20px;
            background-color: #102B2A;
            box-shadow: 0 30px 60px rgba(0, 0, 0, .17);
        }

        .inner-menu-container {
            border: 2px solid #BF953F;
            /* padding: 30px; */
        }

        h1 {
            text-align: center;
            margin-bottom: 40px;
            font-family: "Pinyon Script", cursive;
            font-size: 64px;
            color: #BF953F !important;
        }

        h2 {
            border-bottom: 2px solid #BF953F;
            padding-bottom: 5px;
            margin-top: 40px;
            color: #BF953F
        }

        h3 {
            margin-top: 20px;
            color: #BF953F;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        td {
            padding: 8px 0;
            font-size: 20px;
        }

        td:last-child {
            text-align: right;
        }

        .signature {
            font-family: "Pinyon Script", cursive;
            font-size: 24px;
            color: #BF953F !important;
            margin: 0 0.5rem;
        }

        @media print {
            body {
                color: black;
            }

            .no-print {
                display: none;
            }
        }

        .book-btn {
            border: 1px solid #BF953F;
            color: #CED8D8;
            padding: 8px 20px;
            background: transparent;
            text-transform: uppercase;
            border-radius: 0;
            font-family: 'jost', sans-serif;
            font-size: 16px;
            transition: 0.3s ease;
        }

        .book-btn:hover {
            background-color: #BF953F;
            color: black;
        }

        .download-btn {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        @media only screen and (min-width: 676px) {
            .menu-container {
                /* margin: 50px auto 20px auto; */
            }
        }
    </style>
</head>

<body>
    <button class="book-btn download-btn">Download Menu</button>

    <div class="menu-container" id="menu-to-download">
        <div class="inner-menu-container">
            <h1>Flavios Menu</h1>
        </div>
        <div>
            <img src="{{asset('images/menu-firstpage.webp')}}" style="width:100%; margin:1rem 0;" alt="menu first page">
        </div>
        <div>
            <img src="{{asset('images/menu-secondpage.webp')}}" style="width:100%; margin:1rem 0;" alt="menu second page">
        </div>
    </div>
    <!--    <div class="inner-menu-container" style="padding: 20px; margin-top: 20px">-->

    <!--        <h2>Soup</h2>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Chef special soup (chicken)</td>-->
    <!--                <td>450 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Thai chili soup</td>-->
    <!--                <td>400 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Creamy Mushroom soup</td>-->
    <!--                <td>430 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Hot & sour soup</td>-->
    <!--                <td>420 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h2>Appetizers / Snacks</h2>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Taco <span class="signature">(signature)</span></td>-->
    <!--                <td>550 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Drumstick</td>-->
    <!--                <td>480 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Hash brown</td>-->
    <!--                <td>300 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Thai chicken on Toast <span class="signature">(signature)</span></td>-->
    <!--                <td>520 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Better fry chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>560 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Oven baked Pasta</td>-->
    <!--                <td>600 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Loaded fries</td>-->
    <!--                <td>450 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h2>Desi Specialties</h2>-->

    <!--        <h3>Handi</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Mughalai handi <span class="signature">(signature)</span></td>-->
    <!--                <td>950 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Creamy cheese handi</td>-->
    <!--                <td>900 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>White handi</td>-->
    <!--                <td>880 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Hara bhara</td>-->
    <!--                <td>850 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>White jalfrezi</td>-->
    <!--                <td>870 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h3>Karhai / Rice</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Chicken Karhai</td>-->
    <!--                <td>980 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Chicken Nehari</td>-->
    <!--                <td>920 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Chicken Qorma</td>-->
    <!--                <td>890 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Chicken pulao</td>-->
    <!--                <td>780 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Velvet chicken</td>-->
    <!--                <td>910 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Mutton karahi</td>-->
    <!--                <td>1300 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Mutton pulao</td>-->
    <!--                <td>1150 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Mutton paye</td>-->
    <!--                <td>1250 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Beef karahi</td>-->
    <!--                <td>1100 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Beef pulao</td>-->
    <!--                <td>950 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Beef paye</td>-->
    <!--                <td>1000 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h3>Special</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Curry pakora</td>-->
    <!--                <td>600 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h2>Chinese / Thai</h2>-->

    <!--        <h3>Gravies</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Tso’s chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>900 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Kung pao <span class="signature">(signature)</span></td>-->
    <!--                <td>880 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Cashewnut Chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>950 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Crispy chili chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>870 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Hot & Spicy chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>860 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Shinghai chicken <span class="signature">(signature)</span></td>-->
    <!--                <td>890 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Black pepper chicken</td>-->
    <!--                <td>850 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Chicken chili dry</td>-->
    <!--                <td>830 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Menchurian</td>-->
    <!--                <td>820 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h3>Rice</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Bounty rice <span class="signature">(signature)</span></td>-->
    <!--                <td>800 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Egg fried rice</td>-->
    <!--                <td>600 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Vegetable fried rice</td>-->
    <!--                <td>580 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Chicken fried rice</td>-->
    <!--                <td>650 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Masala fried rice</td>-->
    <!--                <td>620 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Garlic fried rice</td>-->
    <!--                <td>630 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h2>Continental</h2>-->

    <!--        <h3>Pasta</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Alfredo pasta (fettuccine / penne) <span class="signature">(signature)</span></td>-->
    <!--                <td>950 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Honey pepper pasta <span class="signature">(signature)</span></td>-->
    <!--                <td>900 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Pesto penne pasta <span class="signature">(signature)</span></td>-->
    <!--                <td>940 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->

    <!--        <h3>Salad</h3>-->
    <!--        <table>-->
    <!--            <tr>-->
    <!--                <td>Thai grill salad <span class="signature">(signature)</span></td>-->
    <!--                <td>550 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Special chicken salad <span class="signature">(signature)</span></td>-->
    <!--                <td>570 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Beet piece salad</td>-->
    <!--                <td>450 Rs</td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td>Sweet & sour apple salad</td>-->
    <!--                <td>500 Rs</td>-->
    <!--            </tr>-->
    <!--        </table>-->
        <!--</div>-->

<script>
    document.querySelector('.download-btn').addEventListener('click', function () {
        const link = document.createElement('a');
        link.href = "{{ asset('pdfs/Flavios_Menu.pdf') }}";
        link.download = "Flavios_Menu.pdf";
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>



</body>

</html>
