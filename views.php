<?php
    /*
        render_page -- build a page with custom settings
    */
    function render_page($site_title, $page_title, $content) {
        
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>
                    <link rel="icon" type="image/x-icon" href="http://shrinking-world.com/static/images/unc/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://shrinking-world.com/static/css/unc.css">
                </head>
                <body>
                    <header>
                        <img src="data:image/png;base64,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" alt="Bear Logo"/>
                        <h1>' . $site_title . '</h1>
                        <h2>' . $page_title . '</h2>
                    </header>
                    <main>
                        ' . $content . '
                    </main>
                </body>
            </html>
        ';
    }
?>