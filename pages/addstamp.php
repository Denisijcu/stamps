<?php include('../includes/Header.php'); ?>

<body id="home" class="scrollspy">

    <?php include('../includes/Navbar.php'); ?>

    <section>

        <div id="new-stamp">
            <h3>New Stamp</h3>
            <div class="row">
                <form action="saveStamp.php" method="get" class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="id_stamp" required>
                            <label>Stamp ID#</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="picture" required>
                            <label>Picture</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="number" required>
                            <label>Number</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="name" required>
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="term" required>
                            <label>Term of Office</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <label>Party</label>
                            <input type="text" name="party" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <input type="text" name="description" required>
                            <label>Description</label>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12 m8">
                            <label>Glued</label>
                            <input type="text" name="glued" required>

                        </div>
                    </div>
                    <button type="submit" class="btn">Submit</button>
                    <a href="../index.php" class="btn black">Cancel </a>

                </form>
            </div>
        </div>


        </div>

        <?php include('../includes/Footer.php') ?>


</body>

</html>