<?php get_header(); ?>
    <div class="wrapper">
        <h2 class="page-title"><?php the_title(); ?></h2>
        <div class="feedback-form">
            <form id="contact" action="mail.php" method="post">
                <?php echo ('<h2 class="form-title">Feedback form</h2>'); ?>
                <div id="note"></div>
                <div id="fields">

                    <input id="author" name="name" required="" type="text" placeholder="Name" /> <label for="author">What is your name</label>

                    <input id="email" name="email" required="" type="email" placeholder="E-mail" /> <label for="email">Email</label>

                    <input id="url" name="sub" required="" type="text" placeholder="Subject" /> <label for="url">Message subject</label>

                    <textarea id="comment" cols="1" name="message" required="" rows="10" placeholder="Enter here your message"></textarea>

                    <button id="submit" class="go" type="submit">Send a message</button>

                </div>
            </form>
        </div>
    </div>
<?php get_footer(); ?>