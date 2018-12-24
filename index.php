<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>Desert Dawg Sports</title>
    <link rel="stylesheet" href="css/normalize.css"> 
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
    <?php include('header.php'); ?>
    <div class="container">
        <section id="hero">
            <h1>Upcoming Events</h1> <!--put a small icon of sponsor next to each -->
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit necessitatibus eum vel consequuntur rerum, asperiores doloribus explicabo eaque error veritatis magnam esse eveniet minus ipsam assumenda, quis ad hic? Quas tenetur corrupti cum maiores soluta nihil ea ut! Magni cumque corporis tempora expedita tenetur enim dolorum possimus nostrum delectus a.</p>
            <h2>Become a Member</h2>
            <p>links to forms</p>
            <p>(maybe a slideshow)</p>
        </section>
        <section id="about">
            <h1>About</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>
        </section>
        <section id="agility">
            <h1>Agility</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>

        </section>
        <section id="freestyle">
            <h1>Freestyle</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>

        </section>
        <section id="friends">
            <h1>Friends</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>

        </section>
        <section id="gallery">
            <h1>Gallery</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>
        </section>
        <section id="calendar">
            <h1>Calendar</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque maiores officiis vel labore ex fugiat amet debitis reprehenderit. Aliquam accusantium laboriosam adipisci quos nostrum quae, minima ratione, officia vero facilis reprehenderit hic totam molestiae itaque aliquid temporibus odio in? Animi, nisi! Tempora ex obcaecati, error nulla nobis placeat cum ipsum?</p>
        </section>
    </div>
    <?php include('footer.php'); ?>

    <script>
        // go to top button (mobile only)
        function goToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }      
        // hamburger menu
        $('.menu-toggle').click(function() {
            $('.site-nav').toggleClass('site-nav--open', 500);
            $(this).toggleClass('open');
        });        
        $(document).ready(function() {
            // scroll to section
            var scrollLink = $('.scroll');
            scrollLink.click(function(e) {
                e.preventDefault();
                $('body, html').animate({
                    scrollTop: $(this.hash).offset().top - 70
                }, 1000);
            });
            // hightlight active link
            $(window).scroll(function() {
                var scrollbarLocation = $(this).scrollTop();
                scrollLink.each(function() {
                    var sectionOffset = $(this.hash).offset().top - 90;
                    if(sectionOffset <= scrollbarLocation) {
                        $(this).parent().addClass('active');
                        $(this).parent().siblings().removeClass('active');
                    }
                });
            });         
            // set home highlighted
            document.getElementById("hero").focus();      
        });
    </script>    
</body>
</html>