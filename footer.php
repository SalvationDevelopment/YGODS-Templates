<!-- footer -->
<footer class="footer" role="contentinfo">

    <!-- copyright -->
    <p class="copyright">
        &copy;
        <?php echo date( 'Y'); ?>Copyright
        <?php bloginfo( 'name'); ?>.

    </p>
    <!-- /copyright -->

</footer>
<!-- /footer -->
<footer id="launcher" style="display:none;">

    <section id="settings">
        <div class='section-content'>

            <div>
                <h3>Game Settings</h3>
                <label>Auto Card Placement</label>
                <input type="checkbox" />
                <br />
                <label>Random Card Placement</label>
                <input type="checkbox" />
                <br />
                <label>Auto Chain Order</label>
                <input type="checkbox" />
                <br />
                <label>Enable Sound</label>
                <input type="checkbox" />
                <br />
                <label>Enable DirectX</label>
                <input type="checkbox" />
                <br />
                <label>No Delay for Chains</label>
                <input type="checkbox" />
                <br />
                <label>Enable Music</label>
                <input type="checkbox" />
                <br />
                <label>Fullscreen</label>
                <input type="checkbox" />
                <br />
                <label>Enable User Covers</label>
                <input type="checkbox" />
                <br />
                <label>Antai Alasing</label>
                <input type="checkbox" />
                <label>Enable Microphone</label>
                <input type="checkbox" />
                <br />
                <label>Skin</label>
                <select>
                    <option value="default">Default</option>
                </select>
                <br />
            </div>
    </section>
    <div id='servermessages'>
        Server Messages will spawn here.
    </div>
    <div id="staticcontrols">
        <div id="LANMode">
            LAN Mode
        </div>
        <div id="rundeckedit" onclick="gotoTab('deckeditor')">
            Deck Edit
        </div>
        <div id="runereplays">
            Replays
        </div>
        <div id="runHost" onclick="gotoTab('language');">
            Host
        </div>

    </div>
</footer>

</div>
<!-- /wrapper -->

<?php wp_footer(); ?>

<!-- analytics -->
<script>
    (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
    		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
    		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
    		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
    		ga('send', 'pageview');
</script>

</body>

</html>
