<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">
            <h2>Upping my git game</h2>
            <p class="posted-date">Posted March 9, 2019</p>
            <p>
                As hard as I try to remember to make regular Git commits, there are times when I get sucked in by what 
                I'm working on and forget, sometimes for hours. It happens all too frequently: I come up for air from an 
                absorbing challenge or difficult debugging situation and realize that I've changed dozens of lines of code 
                since my last commit. According to best practice guidelines, commits should be 
                made every 3 to 7 minutes of coding time and should include no more than about 15 lines of code. 
                Furthermore, they should include meaningful commit messages, which is difficult to do when you're trying
                to describe dozens of lines of changes. Unfortunately, there are many commits in my Git history that fall 
                pretty far short of best practice. Recently, however, I've discovered two tools, readily available in my 
                work environment, that have proven to help a lot when that happens &mdash; most of the time, anyway.
            </p>
            <h4>Discovery 1: VS Code's versioning tools</h4>
            <p>
                The first is the versioning tools built in to VS Code. To my own detriment, I've never been the type of 
                person who, when she buys a new gadget or downloads a new piece of software, spends hours (or even 
                minutes) poring through
                the manual or technical documentation to learn its features. My approach instead is to jump in 
                without reading any documentation whatsoever and grope around until I figure out the minimum functionality
                for which I got the thing. As a result, I rarely do more than scrape the 
                surface of what's available to me. While I was aware at some level that VS Code included  
                versioning tools, my brain mostly filtered it out as noise for quite a long time: occasionally I would notice
                to my dismay that I had changed 10 or more files since my last commit, but that was about the extent of my
                use of the tools.
            </p>

            <p>
                <img id="source-control-button" class="floated-image" alt="VS Code source control button" src="img/blog/source-control-button.png"> 
                One day, I had broken something in my code and wasn't sure how recently it had happened. I couldn't 
                remember what I'd 
                changed or in which files. But, happily, I clicked on the Source Control button in VS Code  
                and Eureka! &mdash; there was a list of the files that had been changed since my last commit. Even more
                happily, when I clicked on one of the files, it showed me a side by side comparison of the last-committed 
                and current versions. This helped me figure out what I had broken and how to fix it, but I also recognized 
                another, very important use for this functionality: now, if I had a lot of changes to commit, I 
                could look through the changes in each file, craft a meaningful 
                (if occasionally long) commit message, and stage and commit the files individually. It took a lot longer
                than if I'd done it as I went, and I still had some larger-than-desirable commits (when I made a lot of 
                changes within a single file), but overall it was a big improvement.
            </p>
            <h4>Discovery 2: Git's interactive staging interface</h4>
            <p>
                The second thing I discovered that helps me when I'm in this situation is 
                <a target="_blank" class="text-link" href="https://git-scm.com/book/en/v2/Git-Tools-Interactive-Staging">
                Git's interactive staging interface</a>. When using the usual command-line interface, typing 
                <span class="inline-snippet">git status</span> in the terminal
                gives this familiar output:
            </p>
                <img src="img/blog/git-status-display.jpg" alt="git status output">
            <p>
                From here, you can type <span class="inline-snippet">git add .</span> to stage all the files, or 
                <span class="inline-snippet">git add &lt;filename&gt;</span> to stage individual files. While staging
                files individually isn't difficult, it can be monotonous to type or copy/paste file names one by one. 
                Furthermore, if you stage a file mistakenly, the process for unstaging from the command line is not, in my 
                opinion, especially clear.
            </p>
            <p>
                The interactive staging interface provides a nice alternative to this workflow. You access it by 
                typing <span class="inline-snippet">git add -i</span>: 
            </p>
            <img src="img/blog/git-interactive-staging-interface.jpg" alt="git interactive staging interface">
            <p>
                While the interface takes a little getting used to, once you get the hang of it it's pretty easy to use. 
                To interact with the files, you use the commands at the bottom. To stage a file, you type in 
                <span class="inline-snippet">2</span> or <span class="inline-snippet">u</span>, which gives you a list
                of the changed files:
            </p>
            <img src="img/blog/git-staging-command.jpg" alt="git stage files interface">
            <p>
                then type in the number of the file you want to stage. Any files you've selected for staging are 
                marked with asterisks:
            </p>
            <img src="img/blog/select-file-for-staging.jpg" alt="git files selected for staging">
            <p>
                Once you've finished selecting all your files, you hit enter on the blank command line to go back to the 
                main menu, then type in <span class="inline-snippet">1</span> or <span class="inline-snippet">s</span>
                to see your updated status. Files 3 and 4 below now show information in the 
                <span style="font-weight: bold; color: black;">staged</span> column and 'nothing' in the 
                <span style="font-weight: bold; color: black;">unstaged</span> column, indicating that they have been staged:
            </p>
            <img src="img/blog/staged-files.jpg" alt="staged files">
            <p>
                To add new files that aren't currently being tracked, you would type <span class="inline-snippet">4</span> 
                or <span class="inline-snippet">a</span>, and if you change your mind and want to unstage a file, you can
                type <span class="inline-snippet">3</span> or <span class="inline-snippet">r</span>. 
                When finished, you quit the interactive interface (<span class="inline-snippet">7</span> or 
                <span class="inline-snippet">q</span>) and commit your staged files. Then repeat the process until all 
                your files have been committed.  
            </p>
            <p>
                While the steps I've described above are no substitute for following good commit practices as you go, they
                can be very helpful at those times when you forget.
            </p>

            <hr>
            <p style="{padding-top: 3em;">Also see my <a class="text-link" href="http://burtondev.com/" target="_blank">Flatiron School blog entries</a></p>
        </article>
			<div class="navlinks">
                <?php if ($page_info["prev_link"]) { include("nav-links/prev-link.php"); } ?>
                <?php if ($page_info["next_link"]) { include("nav-links/next-link.php"); } ?>
            </div>

    </section>

<?php include("footer.php"); ?>

<!--     <div class="contact" >
        <h2>Contact Info:</h2>
            <ul>
                <li><i class="fas fa-envelope-square"></i></i><a href="mailto:liz.burton147@gmail.com"><span>liz.burton147@gmail.com</span></a></li>
                <li><i class="fab fa-linkedin-in"></i></i><a href="https://www.linkedin.com/in/burtonux" target="_blank"><span>www.linkedin.com/in/burtonux</span></a></li>
                <li><i class="fab fa-github"></i><a href="https://github.com/lizbur10" target="_blank"><span>github.com/lizbur10</span></a>
                <li><i class="fas fa-phone"></i><span>773-710-8686</span></li>
            </ul>
    </div>
 -->