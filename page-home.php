<?php
/*
Template Name: Snarfer
*/
get_header();

?>

<?php
      $skills = array(
        "1" => "HTML5",
        "2" => "CSS3",
        "3" => "JS",
        "4" => "PHP",
        "5" => "Godpress"
      );
?>

<main>
    <header>
    <div class="right">
        <h1><?php echo 'גל אגאי'; ?></h1>
        <p><?php echo 'מפתח Fullstack'; ?></p>
        <div class="skills">

            <?php
        foreach ($skills as $val) {     
            echo '<p class="skill">'.$val.'</p>';
        }
        ?>
        </div>
        <span>
            <i class="fas fa-phone"></i>
            0587877717
        </span>
        <br />
        <span>
        <i class="fas fa-envelope"></i>
            agaigal@gmail.com
        </span>
        <br />
        <span>
        <i class="fab fa-linkedin"></i>
        https://www.linkedin.com/in/gal-agai-a5a3826
        </span>
        <p>אפשר פה להכניס קצת טקסט למה לא?
            נראה מה יהיה בסוף הפיסקה והאם מישהו אי פעם יקרא את זה
            כניראה שאף אחד אף פעם (מה דעתכם על זה?)
        </p>
    </div>
    <div class="left">
        <div class="img-rap">
            <img src="<?php echo get_bloginfo('template_url') ?>/pics/main.jpg" alt="b">
        </div>
    </div>
    </header>
    <div class="container">
        <article>
            <div class="right">
                <div class="img-rap">
                    <img src="<?php echo get_bloginfo('template_url') ?>/pics/11.jpg" alt="b">
                </div>
            </div>    
            <div class="left">
                <h2><?php echo 'אפולו 11'; ?></h2>
                <small><?php echo 'Jul 16, 1969'; ?></small>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
            </div>    
        </article>
        <article>
            <div class="right">
                <div class="img-rap">
                    <img src="<?php echo get_bloginfo('template_url') ?>/pics/17.png" alt="b">
                </div>
            </div>    
            <div class="left">
                <h2><?php echo 'אפולו 17'; ?></h2>
                <small><?php echo 'Dec 7, 1972'; ?></small>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
                <p><?php echo 'זה היה אחד הפרוייקטים! פרויקט שאנשים יזכרו עוד להרבה זמן וכו,'; ?></p>
            </div>    
        </article> 
    </div>
    </main>
    
    
    
    
    
    <?php
get_footer();