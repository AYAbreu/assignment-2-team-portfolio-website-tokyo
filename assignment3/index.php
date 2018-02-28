<?php $currentTitle = 'HOME'; include'inc/html-top.inc';?>

    <div class=headerbox>
        <header>
            <h1>Women In Computer Science</h1>
            <h5>Team Tokyo Assignment 03</h5>
        </header>
        <!-- YW: Navigation Bar-->

        <?php include'inc/nav.inc';?>

    </div>
   
    <div class="grid-container">
        <!-- YW: Like a newspaper, 3 columns representing each student with photo,
      and the link such as "Read More" that links directly to the accroding student.-->
      <!-- YW: For the JS plugin, I think it may be good to have photo pops out when clicked.
      If you have any suggestion, please let me know. -->
        <div class="slider">
            <img src="images/conley.png" alt="Conley">
            <img src="images/fiona.png" alt="Conley">
            <img src="images/xiao.png" alt="Conley">
        </div>

        <div id="accordion">
            <h2>Conley Ernst</h2>
            <p>Computer Science and Digital Media Studies, which provides the unique intersection of engineering and creative arts. Studying to be a software engineer, my academic and professional experience has given me a strong understanding of both the technical and user experience sides of a product.</p>

            <h2>Fiona Jones</h2>
            <p>My name is Fiona Jones and I am currently a junior in my third year at Rochester. I am currently majoring in computer science with a focus in web development, studio arts with concentrations in digital art and photography, as well as a small cluster of linguistics based around analysis of meaning. I am currently living in The Woodlands, Texas and I have two other siblings, one who is currently in high school in the Woodlands and another that currently attends New York University in New York City.</p>

            <h2>Xiao Cheng</h2>
            <p>My name is Xiao Cheng, and my friends all call me Katherine/Kat. I am currently studying at the University of Rochester, majoring in Computer Science and minoring in Philosophy. Comparing to other CS students, my progress is kind of slower, because I transferred to this major in my Sophomore year. Originally, I was considering majoring in Audio and Music Engineering.</p>

        </div>
    </div>

    <!-- YW: JS Links -->
    <?php include'inc/scripts.inc';?>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $("#accordion").accordion({
                heightStyle: "content"
            });
        </script>
        <script src="sss/sss.min.js"></script>
        <script>
            $('.slider').sss();
        </script>
    <!-- YW: Footer -->
            <?php include'inc/footer.inc';?>

        </body>

        </html>