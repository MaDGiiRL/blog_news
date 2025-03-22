<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row pt-5 border">
                <div class="col-9 py-5">
                    <h3 class="text-white-50">Your Journey to Tomorrow Begins Here</h3>
                    <h1 class="text-white">Explore the Frontiers of Artificial Intelligence</h1>
                    <p class="lead text-white-50">
                        Welcome to the epicenter of AI innovation. FutureTech AI News is your passport to a world where machines think, learn, and reshape the future. Join us on this visionary expedition into the heart of AI.
                    </p>
                </div>
                <!-- counter -->
                <div class="col-4 border d-flex justify-content-center">
                    <div class="counter-box">
                        <span class="counter-number" data-target="300">0</span><span class="highlight"><i class="bi bi-plus-lg link-yellow fs-3 ps-2"></i></span>
                        <p class="text-white-50">Resources available</p>
                    </div>
                </div>
                <div class="col-4 border d-flex justify-content-center">
                    <div class="counter-box">
                        <span class="counter-number" data-target="12000">0</span><span class="highlight"><i class="bi bi-plus-lg link-yellow fs-3 ps-2"></i></span>
                        <p class="text-white-50">Total Downloads</p>
                    </div>
                </div>
                <div class="col-4 border-custom-2 d-flex justify-content-center">
                    <div class="counter-box">
                        <span class="counter-number" data-target="10000">0</span><span class="highlight"><i class="bi bi-plus-lg link-yellow fs-3 ps-2"></i></span>
                        <p class="text-white-50">Active Users</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-custom col-md-4 div5 d-flex flex-column justify-content-center order-first order-md-last">
            <div class="ps-5 pt-5 mt-5">
                <img src="/images/Sub Container.png" class="img-fluid pt-5 mt-5">
                <h3 class="text-white pt-3">Explore 1000+ resources</h3>
                <p class="text-white-50 lead">
                    Over 1,000 articles on emerging tech trends and breakthroughs
                </p>
                <a href="" class="btn btn-custom-out">Explore Resources <i class="bi bi-arrow-up-right link-yellow"></i></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-md-4 p-3 d-flex justify-content-center align-items-center border-custom-3 border-left">
            <div class="card">
                <div class="card-body">
                    <div>
                        <img src="/images/icon1.png">
                    </div>
                    <h5 class="text-white pt-2">Latest News Updates</h5>
                    <p class="text-white-50 small">Stay Current</p>

                    <p class="text-white-50 small pt-2">Over 1,000 articles published monthly</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3 d-flex justify-content-center align-items-center border-custom-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <img src="/images/icon2.png">
                    </div>
                    <h5 class="text-white pt-2">Expert Contributors</h5>
                    <p class="text-white-50 small">Trusted Insights</p>

                    <p class="text-white-50 small pt-2">50+ renowned AI experts on our team</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 p-3 d-flex justify-content-center align-items-center border-custom-3">
            <div class="card">
                <div class="card-body">
                    <div>
                        <img src="/images/icon3.png">
                    </div>
                    <h5 class="text-white pt-2">Global Readership</h5>
                    <p class="text-white-50 small">Worldwide Impact</p>

                    <p class="text-white-50 small pt-2">2 million monthly readers</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function animateCounter(element, target) {
        let start = 0;
        let speed = Math.floor(target / 100); // Velocità di incremento
        let interval = setInterval(() => {
            start += speed;
            if (start >= target) {
                element.textContent = target;
                clearInterval(interval);
            } else {
                element.textContent = start;
            }
        }, 20);
    }

    document.addEventListener("DOMContentLoaded", function() {
        let counters = document.querySelectorAll(".counter-number");
        counters.forEach(counter => {
            let target = parseInt(counter.getAttribute("data-target"));
            animateCounter(counter, target);
        });
    });
</script>