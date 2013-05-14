<?php function tpl_footer($data) { ?>
            </div>
        </div>
        <div id="footer" class="fixed">
            <div class="divider2"></div>
            <p id="copyright"><?= $data['footer'] ?></p>
        </div>
    </div>
    
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script><script src="ga.js" type="text/javascript"></script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("UA-16030028-1");
            pageTracker._setDomainName("www.christophervalles.com");
            pageTracker._trackPageview();
        }catch(err){
        }
    </script>

</body></html>

<?php } ?>
