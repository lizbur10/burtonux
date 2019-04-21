<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">

        <h2>An Annoying Bug</h2>
        <p class="posted-date">Posted April 21, 2019</p>

        <p>When using html <code>&lt;pre&gt;</code> tags, a horizontal scrollbar is created if the content is wider than the containing element. This is because the purpose of the <code>&lt;pre&gt;</code> tag is to preserve spaces and line breaks in preformatted text. In other words, text inside <code>&lt;pre&gt;</code> tags will not be wrapped. This same behavior can be obtained by including <code>overflow-x: auto</code> in the css for an element. This <a class="text-link" target="_blank" href="https://guides.rubyonrails.org/v3.2/form_helpers.html#multiple-hashes-in-form-helper-calls">example from RailsGuides</a> illustrates the behavior:</p>

<pre>
<code>
form_tag(:controller =&gt; &quot;people&quot;, :action =&gt; &quot;search&quot;, :method =&gt; &quot;get&quot;, :class =&gt; &quot;nifty_form&quot;)
# =&gt; '&lt;form accept-charset=&quot;UTF-8&quot; action=&quot;/people/search?method=get&amp;class=nifty_form&quot; method=&quot;post&quot;&gt;'
</code>
</pre>

        <p>This behavior makes providing multi-line code snippets in a blog post much easier. However, Chrome has a bug that can turn this convenience into a major annoyance. </p>

        <p>The scrollbar is initially hidden:</p>

        <img src="img/blog/scrollbar_hidden.jpg" alt="snippet without scrollbar">

        <p>and it appears when you start scrolling:</p>

        <img src="img/blog/scrollbar_scrolling.jpg" alt="snippet with scrollbar">

        <p>all of which is fine unless your cursor touches the scrollbar while it&#8217;s visible. Then this happens:</p>

        <img src="img/blog/scrollbar_stuck.jpg" alt="snippet with stuck scrollbar">

        <p>and it doesn&#8217;t go away. The second line of the snippet is obscured by the scrollbar and the only way to read that content is to refresh the page then try to scroll again without touching the scrollbar with your cursor. This can be tricky to do if the code snippet is short.</p>

        <p>Finding a solution to this problem took a while. Googling the issue was frustrating because all I could find were threads about using CSS to keep the scrollbar visible or invisible. This was fine (sort of) for my own blog post, but I was having the issue on other websites (like RailsGuides). Furthermore, the problem didn&#8217;t occur if I used Firefox instead: there the scrollbar appears during scrolling but disappears shortly after you stop scrolling. This wasn&#8217;t a CSS issue: it was a Chrome issue (or, more specifically, a Chrome for OSX issue). </p>

        <p>Nonetheless, it drove me nuts enough that I initially &#8220;fixed&#8221; it for my blog posts by adding the following to the SASS for the <code>&lt;pre&gt;</code> tag:</p>

<pre>
<code>
&amp;::-webkit-scrollbar {
 display: none;
 }
</pre>
</code>

<p>This also solved another problem I was having: if I scrolled up the page on my blog post with the scrollbar &#8220;stuck on&#8221;, it stayed visible on top of my pinned header. (A problem which, annoyingly, I cannot recreate to get a screenshot.) But, of course, with this change the scrollbar was <em>never</em> visible inside my multiline code snippets, which is almost as annoying as the &#8220;stuck on&#8221; situation. So the search continued. </p>

<p>It took me quite a while to find the right combination of Google terms but, once I did, I learned that the solution (which is really a workaround) is annoyingly simple. Thanks to <a class="text-link" target="_blank" href="https://meta.stackoverflow.com/questions/326473/one-line-codeblock-scrollbars-wont-disappear/326476#326476">this stack overflow post</a>, I learned that Mac&#8217;s System Preferences, under the &#8216;General&#8217; tab, include the following options:</p>

    <img src="img/blog/scrollbar_prefs.jpg" alt="system scrollbar prefs">

<p>Switching from &#8216;Automatically based on mouse or trackpad&#8217; to &#8216;When scrolling&#8217; solved the whole problem. Now code snippets&#8217; scrollbar behavior in Chrome is the same as in Firefox: it appears when scrolling and stays visible only briefly. I haven&#8217;t yet discovered what other &mdash; no doubt less desirable &mdash; behaviors this setting causes.</p>

            <br>
            <hr>
            <br>
            <p style="{padding-top: 3em;">Also see my <a class="text-link" href="http://burtondev.com/" target="_blank">Flatiron student blog entries</a></p>
        </article>
			<div class="navlinks">
                <?php if ($page_info["prev_link"]) { include("nav-links/prev-link.php"); } ?>
                <?php if ($page_info["next_link"]) { include("nav-links/next-link.php"); } ?>
            </div>

    </section>

<?php include("footer.php"); ?>
