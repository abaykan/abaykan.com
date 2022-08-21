<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>kustirama.id</title>
        <!-- <meta http-equiv="refresh" content="15;url=https://akbar.kustirama.id/" /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="https://assets.codelatte.id/images/uploads/dino.png" />

        <meta name="description" content="" />
        <meta name="keywords" content="abay,akbar,abaykan,mukhammad akbar,codelatte" />
        <meta name="author" content="kustirama.id" />

        <meta property="og:title" content="akbar | kustirama.id" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="akbar | kustirama.id" />
        <meta property="og:description" content="" />
        <meta property="og:url" content="https://akbar.kustirama.id" />
        <meta property="og:image" content="https://assets.codelatte.id/images/uploads/dino.png"/>
        <meta property="og:image:alt" content="akbar | kustirama.id" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@abaykandotcom" />
        <meta name="twitter:creator" content="@abaykandotcom" />
        <style>
        	@import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
            .wrapper {
                height: 100vh;
                /*This part is important for centering*/
                display: grid;
                place-items: center;
            }
            .typing-demo {
                width: 18ch;
                animation: typing 2s steps(22), blink 0.5s step-end infinite alternate;
                white-space: nowrap;
                overflow: hidden;
                border-right: 3px solid;
                font-family: 'Source Sans Pro', sans-serif;
                font-size: 2em;
            }
            @keyframes typing {
                from {
                    width: 0;
                }
            }
            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }
        </style>

        <?php
		$link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']
					=== 'on' ? "https" : "http") . "://" .
					$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		?>

        <script type="application/ld+json">
			{
			  "@context": "https://schema.org/",
			  "@type": "WebSite",
			  "name": "akbar.kustirama.id",
			  "url": "<?=$link?>",
			  "potentialAction": {
			    "@type": "SearchAction",
			    "target": "{search_term_string}",
			    "query-input": "required name=search_term_string"
			  }
			}
			</script>
    </head>

    <body translate="no">
        <div class="wrapper">
            <div class="typing-demo">akbar[@]kustirama.id</div>
        </div>
        <script>
            console.info(
                "%c you're hacked!",
                "font-size: 50px; text-transform: uppercase; color: white; text-shadow: 2px 2px red, 4px 4px orange, 6px 6px yellow, 8px 8px green, 10px 10px blue, 12px 12px purple;margin-bottom:10%;position: absolute;margin-top: 10%;"
            );
            console.info("Nope. Just kidding xD");
        </script>
    </body>
</html>
