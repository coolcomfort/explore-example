<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Article</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="split">
        <div class="elaborateWrap">
            <div class="elaborateWrapper">
                <div class="close">
                    ✕
                </div>
                <div class="title">
                    <h1>Explore</h1>
                </div>
                <div class="content">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque
                        ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                        dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                        quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut
                        labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad
                        minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur?
                    </p>
                </div>
                <div class="readMore">
                    Read More
                </div>
            </div>
        </div>

        <div class="exploreContainer">
            <div class="exploreTextContainer">
                <div class="exploreText">
                    Explore
                </div>
            </div>
            <div class="moreDetails">
                <div>
                    <div class="plusButton"><img src="Plus.svg"></div>
                    <div class="paddingLeft">More Details</div>
                </div>
            </div>
        </div>
    </div>

    <div class="socialmedia">
        <img src="Instagram.svg">
        <img src="Facebook.svg">
    </div>

    <script>
        const moreDetails = document.querySelector('.moreDetails');
        const plusButton = document.querySelector('.plusButton');
        const elaborateWrap = document.querySelector('.elaborateWrap');
        const exploreText = document.querySelector('.exploreText');
        const elaborateWrapper = document.querySelector('.elaborateWrapper');
        const closeButton = document.querySelector('.close');

        // Universal Timer Function - can be made IE compatible with webpack
        function timer(ms = 0) {
            return new Promise(resolve => {
                setTimeout(resolve, ms);
            })
        }

        moreDetails.addEventListener('click', async function () {
            exploreText.classList.add('layered');
            plusButton.classList.add('anim');
            // Wait for plusButton animation
            await timer(100);
            moreDetails.style.display = "none";
            elaborateWrap.style.display = "block";
            elaborateWrap.classList.add('elaborateAnim');
            elaborateWrapper.classList.add('fadeInAnim');
            // Wait for elaborateanim and fadeInAnim to complete
            await timer(150);
            exploreText.style.display = "none";
            exploreText.classList.remove('layered');
            plusButton.classList.remove('anim');
            elaborateWrap.classList.remove('elaborateAnim');
        })

        closeButton.addEventListener('click', async function () {
            elaborateWrapper.classList.remove('fadeInAnim');
            elaborateWrap.classList.add('elaborateAnimRev');
            exploreText.style.display = "block";
            exploreText.classList.add('reversed');;
            plusButton.style.display = "block";
            moreDetails.style.display = "block";
            // Wait for remove animations to complete
            await timer(200);
            exploreText.classList.remove('reversed');
            elaborateWrap.style.display = "none";
            elaborateWrap.classList.remove('elaborateAnimRev');
        })
    </script>

</body>

</html>
