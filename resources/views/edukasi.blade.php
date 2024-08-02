@include('templates.navbar')
<section class="d-flex justify-content-center align-items-center position-relative" style="height: 100vh">
    <img class="position-absolute main-img-bg" style="z-index: 0; bottom: 66%;" src="assets/images/Rectangle_33.png"
        alt="">
    <div class="container" style="z-index: 5; margin-top: 15%;">
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    <div style="z-index: 0;">
                        <img src="assets/images/artikel.png" style="height: 200px; min-width: 200px" alt="...">
                    </div>
                </h3>

                <h5 style="font-size: 12px;">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</h5>

                <p style="font-size: 12px;">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                    fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam
                    est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
                    eius
                    modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                    veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                    commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam
                    nihil
                    molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>

                <h5 style="font-size: 12px;">1914 translation by H. Rackham</h5>
                <p style="font-size: 11px;">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                    was
                    born and I will give you a complete account of the system, and expound the actual teachings of
                    the
                    great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or
                    avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue
                    pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone
                    who
                    loves or pursues or desires to obtain pain of itself, because it is pain.</p>

                {{-- <article class="blog-post">
                    <h2 class="display-5 link-body-emphasis mb-1">Sample blog post</h2>
                    <p class="blog-post-meta">January 1, 2021 by <a href="#">Mark</a></p>

                    <p>This blog post shows a few different types of content that’s supported and styled with Bootstrap.
                        Basic typography, lists, tables, images, code, and more are all supported as expected.</p>
                    <hr>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h2>Blockquotes</h2>
                    <p>This is an example blockquote in action:</p>
                    <blockquote class="blockquote">
                        <p>Quoted text goes here.</p>
                    </blockquote>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h3>Example lists</h3>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                        other highly repetitive body text used throughout. This is an example unordered list:</p>
                    <ul>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ul>
                    <p>And this is an ordered list:</p>
                    <ol>
                        <li>First list item</li>
                        <li>Second list item with a longer description</li>
                        <li>Third list item to close it out</li>
                    </ol>
                    <p>And this is a definition list:</p>
                    <dl>
                        <dt>HyperText Markup Language (HTML)</dt>
                        <dd>The language used to describe and define the content of a Web page</dd>
                        <dt>Cascading Style Sheets (CSS)</dt>
                        <dd>Used to describe the appearance of Web content</dd>
                        <dt>JavaScript (JS)</dt>
                        <dd>The programming language used to build advanced Web sites and applications</dd>
                    </dl>
                    <h2>Inline HTML elements</h2>
                    <p>HTML defines a long list of available inline tags, a complete list of which can be found on the
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">Mozilla Developer
                            Network</a>.
                    </p>
                    <ul>
                        <li><strong>To bold text</strong>, use <code
                                class="language-plaintext highlighter-rouge">&lt;strong&gt;</code>.</li>
                        <li><em>To italicize text</em>, use <code
                                class="language-plaintext highlighter-rouge">&lt;em&gt;</code>.</li>
                        <li>Abbreviations, like <abbr title="HyperText Markup Language">HTML</abbr> should use <code
                                class="language-plaintext highlighter-rouge">&lt;abbr&gt;</code>, with an optional <code
                                class="language-plaintext highlighter-rouge">title</code> attribute for the full phrase.
                        </li>
                        <li>Citations, like <cite>— Mark Otto</cite>, should use <code
                                class="language-plaintext highlighter-rouge">&lt;cite&gt;</code>.</li>
                        <li><del>Deleted</del> text should use <code
                                class="language-plaintext highlighter-rouge">&lt;del&gt;</code> and <ins>inserted</ins>
                            text should use <code class="language-plaintext highlighter-rouge">&lt;ins&gt;</code>.</li>
                        <li>Superscript <sup>text</sup> uses <code
                                class="language-plaintext highlighter-rouge">&lt;sup&gt;</code> and subscript
                            <sub>text</sub> uses <code class="language-plaintext highlighter-rouge">&lt;sub&gt;</code>.
                        </li>
                    </ul>
                    <p>Most of these elements are styled by browsers with few modifications on our part.</p>
                    <h2>Heading</h2>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <h3>Sub-heading</h3>
                    <p>This is some additional paragraph placeholder content. It has been written to fill the available
                        space and show how a longer snippet of text affects the surrounding content. We'll repeat it
                        often to keep the demonstration flowing, so be on the lookout for this exact same string of
                        text.</p>
                    <pre><code>Example code block</code></pre>
                    <p>This is some additional paragraph placeholder content. It's a slightly shorter version of the
                        other highly repetitive body text used throughout.</p>
                </article> --}}
            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-body-tertiary rounded">
                        <h1 class="text-black fw-bold">Cari</h1>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input class="form-control border-end-0 border rounded-pill" type="search"
                                        placeholder="search" id="example-search-input"
                                        style="width: 100px; z-index: 0;">
                                    <span class="input-group-append">
                                        <button
                                            class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill"
                                            type="button" style="margin-left: -40px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                                            </svg>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="fst-italic">Postingan Terbaru</h4>
                        <ul class="list-unstyled">
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="assets/images/artikel.png" style="height: 100px; width: 120px"
                                        alt="...">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Example blog post title</h6>
                                        <small class="text-body-secondary">January 15, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="assets/images/artikel.png" style="height: 100px; width: 120px"
                                        alt="...">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">This is another blog post title</h6>
                                        <small class="text-body-secondary">January 14, 2024</small>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top"
                                    href="#">
                                    <img src="assets/images/artikel.png" style="height: 100px; width: 120px"
                                        alt="...">
                                    <div class="col-lg-8">
                                        <h6 class="mb-0">Longer blog post title: This one has multiple lines!</h6>
                                        <small class="text-body-secondary">January 13, 2024</small>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Arsip Edukasi</h4>
                        <ol class="list-unstyled mb-0">
                            <li><a href="#">January</a></li>
                            <li><a href="#">February</a></li>
                            <li><a href="#">March</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // JavaScript to handle navbar color change on scroll
    document.addEventListener("scroll", function() {
        const navbar = document.querySelector(".navbar");
        const section = document.querySelector(".bg-white"); // Change to your specific section
        const sectionTop = section.getBoundingClientRect().top;

        if (window.scrollY >= sectionTop - navbar.offsetHeight) {
            navbar.classList.add("navbar-scrolled");
            // navbar.classList.remove("text-black");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    });
</script>
