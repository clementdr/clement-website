<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Portfolio</title>
</head>

<body>
    <?php include("nav-burger.php"); ?>

    <main class="hero-po">

        <a class="comp comp-red" href="comprendre.php">COMPRENDRE</a>
        <a class="comp comp-orange" href="concevoir.php">CONCEVOIR</a>
        <a class="comp comp-green" href="developper.php">DEVELOPPER</a>
        <a class="comp comp-blue" href="entreprendre.php">ENTREPRENDRE</a>
        <a class="comp comp-yellow" href="exprimer.php">EXPRIMER</a>

        <span></span>
    </main>

    <?php include('footer.php'); ?>

    <script>
        const compElements = document.querySelectorAll('.comp');

        window.addEventListener('load', () => {
            compElements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 300);
            });
        });


        //////

        const compLinksRed = document.querySelectorAll('.hero-po .comp-red');
        const compLinksOrange = document.querySelectorAll('.hero-po .comp-orange');
        const compLinksYellow = document.querySelectorAll('.hero-po .comp-yellow');
        const compLinksGreen = document.querySelectorAll('.hero-po .comp-green');
        const compLinksBlue = document.querySelectorAll('.hero-po .comp-blue');

        const navLinks = document.querySelectorAll('.color-change');
        const body = document.body;
        const spanElements = document.querySelectorAll('.span');

        function setTextColorWhite() {
            navLinks.forEach((link) => {
                link.style.color = '#F5F5F5';
            });
        }

        function resetTextColor() {
            navLinks.forEach((link) => {
                link.style.color = '';
            });
        }

        function handleMouseEnter(color) {
            body.style.backgroundColor = color;
            setTextColorWhite();
        }

        function handleMouseLeave() {
            body.style.backgroundColor = '';
            resetTextColor();
        }

        function updateSpanTextColor(color) {
            spanElements.forEach((span) => {
                span.style.background = color;
            });
        }

        const allLinks = [
            ...compLinksRed,
            ...compLinksOrange,
            ...compLinksYellow,
            ...compLinksGreen,
            ...compLinksBlue,
        ];

        allLinks.forEach((link) => {
            link.addEventListener('mouseenter', () => {
                const linkColorClass = link.classList[1];
                switch (linkColorClass) {
                    case 'comp-red':
                        handleMouseEnter('#E94F37');
                        updateSpanTextColor('#F5F5F5');
                        break;
                    case 'comp-orange':
                        handleMouseEnter('#FD8B21');
                        updateSpanTextColor('#F5F5F5');
                        break;
                    case 'comp-yellow':
                        handleMouseEnter('#FDB321');
                        updateSpanTextColor('#F5F5F5');
                        break;
                    case 'comp-green':
                        handleMouseEnter('#52C53F');
                        updateSpanTextColor('#F5F5F5');
                        break;
                    case 'comp-blue':
                        handleMouseEnter('#3F88C5');
                        updateSpanTextColor('#F5F5F5');
                        break;
                    default:
                        break;
                }
            });

            link.addEventListener('mouseleave', () => {
                handleMouseLeave();
                updateSpanTextColor('');
            });
        });
    </script>
</body>

</html>