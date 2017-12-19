<?php
    $templateURI = get_template_directory_uri();
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Le bourdonnement médiatique</title>

    <?php
        echo(
            '<!-- Bootstrap core CSS -->
            <link href="' . $templateURI . '/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom styles for this template -->
            <link href="' . $templateURI . '/css/one-page-wonder.css" rel="stylesheet">'
        );

        if (!is_home() && !is_front_page()){

            ?>
                <style>
                    #home header.masthead, #detail header.masthead {
                        background: url(
                            <?php
                                echo(get_the_post_thumbnail_url());
                            ?>
                        ) no-repeat center center scroll;
                    }
                </style>
            <?php
        }
    ?>

  </head>
