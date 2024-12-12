<!DOCTYPE html>
    <html>
    <head>
    <title>Page Title</title>
        <style type="text/css">
            .yiping-language-switcher/*, .goog-te-banner-frame*/ {
                display: none;
            }
        </style>
        <div id="google_translate_element" class="yiping-language-switcher">
        <?php
            setcookie('googtrans', '/en/fr');
        ?>
            <script type="text/javascript">
                function initializeGoogleTranslateElement() {
                    new google.translate.TranslateElement({
                      pageLanguage: "en"
                    }, "google_translate_element");
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=initializeGoogleTranslateElement"></script>
        </div>
    </head>
    <body>

    <h1>This is a Heading</h1>
    <p>This is a paragraph.</p>

    </body>
    </html>
