<?php
include ('Partials/Header.php');
?>

    <section class="form__section">
        <div class="form__section-container">
            <h2>Edit category</h2>
            <div class="alert__message sucess">
                <p>This is an Sucess message</p>
            </div>
            <form action="" method="post">
                <input type="text" placeholder="Title">
                <textarea rows="10" placeholder="description"></textarea>
                <button type="submit" class="form-button">Add Category</button>
            </form>        
        </div>
    </section>

    <?php
    include('../Partials/Footer.php');
?>
</body>
</html>
