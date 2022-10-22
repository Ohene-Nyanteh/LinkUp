<?php
include('Partials\Header.php');
?>

<body>
    <section class="form__section">
        <div class="form__section-container">
            <h2>Add Post</h2>
            <div class="alert__message sucess">
                <p>This is an Sucess message</p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="text" placeholder="Title">
                <textarea rows="10" placeholder="Body..."></textarea>
                <select>
                    <option value="1">Travel</option>
                    <option value="2">Travel</option>
                    <option value="3">Travel</option>
                    <option value="4">Travel</option>
                    <option value="5">Travel</option>
                </select>
                <div class="form__control inline">
                    <input type="checkbox" id="Featured">
                    <label for="Featured" checked>Featured</label>
                </div>
                <div class="form__control">
                    <label for="thumbnail" class="user_avatar">Thumbnail</label>
                    <input type="file" id="thumbnail">
                </div>
                <button type="submit" class="form-button">Post</button>
            </form>        
        </div>
    </section>
</body>

<?php
    include('../Partials/Footer.php');
?>
</body>
</html>
