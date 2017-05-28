<div id="footer">

    <!-- Footer on small screen -->
    <div class="container hidden-md hidden-lg">
        <div class="row">

            <!-- Adress -->
            <div class="col-xs-6">
                <h3><?php echo $lang['FOOTER_ADRESS']; ?></h3>
                <p>Christian Kroghs gate 32, 0186 Oslo, Norway</p>
            </div>

            <!-- Contact -->
            <div class="col-xs-6">
                <h3><?php echo $lang['FOOTER_CONTACT_TITLE']; ?></h3>
                <p>
                    <?php echo $lang['FOOTER_CONTACT_CONTENT']; ?>
                </p>

                <p>
                    <a href="contact.php" title="Kontakt oss!">
                        <?php echo $lang['FOOTER_CONTACT_LINK']; ?>
                    </a>
                </p>

            </div>
        </div>
    </div>

    <!-- Footer on normal sceeen -->
    <div class="container hidden-xs hidden-sm">
        <div class="row">
            <!-- Navigation -->
            <div class="col-md-4">
                <h3><?php echo $lang['FOOTER_NAVIGATION']; ?></h3>
                <ul>
                    <li>
                        <a href="index.php">
                            <?php echo $lang['FOOTER_NAVIGATION_HOME']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="map.php">
                            <?php echo $lang['FOOTER_NAVIGATION_MAP']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="events.php">
                            <?php echo $lang['FOOTER_NAVIGATION_EVENTS']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="campus-main.php">
                            <?php echo $lang['FOOTER_NAVIGATION_CAMPUS']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="contact.php">
                            <?php echo $lang['FOOTER_NAVIGATION_SUPPORT']; ?>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Adress -->
            <div class="col-md-4">
                <h3><?php echo $lang['FOOTER_ADRESS']; ?></h3>
                <p>Christian Kroghs gate 32, 0186 Oslo, Norway</p>
            </div>

            <!-- Contact -->
            <div class="col-md-4">
                <h3><?php echo $lang['FOOTER_CONTACT_TITLE']; ?></h3>
                <p>
                    <?php echo $lang['FOOTER_CONTACT_CONTENT']; ?>
                </p>
                <p>
                    <a href="contact.php" title="Kontakt oss!">
                        <?php echo $lang['FOOTER_CONTACT_LINK']; ?>
                    </a>
                </p>

            </div>
        </div>

        <!-- Credit for pictures -->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="photocred.php">
                    <p>
                        <?php echo $lang['FOOTER_PICTURES']; ?>
                    </p>
                </a>
            </div>
        </div>
    </div>
</div>