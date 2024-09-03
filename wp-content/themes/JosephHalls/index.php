<?php get_header()?> <!-- Worpdress looks for header.php file in root directory of active theme -->

<main>
    <section>
        <h2>Software Developer</h2>
        <p>I develop solid and scalable software products that provide outstanding user experiences. Based in the UK</p>
        <ul>
            <li> <a href=""><<img src="" alt="">github</a></li>
            <li> <a href=""><<img src="" alt="">linkedIn</a></li>
        </ul>
        <button>My Work</button>
        <button>About</button>
    </section>

    <section>
        <h2>My Work</h2>
        <div class="work-gallery">
            <div class="work-item">
                <a href="project1-link.html" target="_blank">
                <img src="path/to/project1-screenshot.jpg" alt="Project 1 Screenshot">
                <h3>Project 1</h3>
                <p>Short description of Project 1</p>
                </a>
            </div>
             <!-- Example project 2 -->
        <div class="work-item">
            <a href="project2-link.html" target="_blank">
                <img src="path/to/project2-screenshot.jpg" alt="Project 2 Screenshot">
                <h3>Project 2</h3>
                <p>Short description of Project 2</p>
            </a>
        </div>

        <!-- Example project 3 -->
        <div class="work-item">
            <a href="project3-link.html" target="_blank">
                <img src="path/to/project3-screenshot.jpg" alt="Project 3 Screenshot">
                <h3>Project 3</h3>
                <p>Short description of Project 3</p>
            </a>
        </div>

        </div>

    </section>
</main>
<?php get_footer()?>