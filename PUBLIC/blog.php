<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">
            <h2>Yields in Ruby: A Primer</h2>
            <p class="posted-date">Posted March 17, 2019</p>
            <p>
                One of the biggest benefits of working as a technical coach for the Flatiron School 
                is it forces me to address holes in my knowledge. Students can (and do) ask 
                questions about anything. Often it’s only when I’m trying to answer a question for 
                a student that I realize there’s something I don’t understand as well as I thought 
                I did. Recently I was trying to explain the concept of yield to
                someone and quickly realized I needed to study up on it myself. 
            </p>
            <p>
                <span class="inline-snippet">yield</span> can be very tricky to wrap your head around at 
                first. But at its most basic level, it really comes down to two things:
            </p>
            <ol>
                <li>You define a method that includes a <span class="inline-snippet">yield</span> 
                statement in it somewhere</li>
                <li>You call the method with a block containing some code to be executed at the 
                point where the <span class="inline-snippet">yield</span> is</li>
            </ol>

            <p>
                Of course it's usually more complicated in practice but it can be just this 
                simple.
            </p>
            <h4>Step 1: defining your method</h4>
            <p>
                First, let’s define our method without a yield:
            </p>
                <img src="img/blog/my_method_no_yield.jpg" alt="my method without a yield">
            <p>
                I call this method by running <span class="inline-snippet">my_method</span> and I get:
            </p>
                <img src="img/blog/my_method_no_yield_output.jpg" alt="output of my method without yield">
            <p>
                But say I want to execute some other code in the middle, maybe code that can vary 
                under different conditions. In that case I might not want to have to code a 
                separate method for each possible variant, especially if the common part comprises
                a lot of code or is something that is used frequently (more on that later). One 
                way to handle this situation is by using <span class="inline-snippet">yield</span>:
            </p>
                <img src="img/blog/my_method_with_yield.jpg" alt="my method with a yield">
            <p>
                Because of the <span class="inline-snippet">yield</span>, if I call the method in 
                the usual way I get an error: 
            </p>
                <img src="img/blog/my_method_with_yield_error.jpg" alt="error running my method with yield">
            <p>
                To fix this, I need to pass in a block when I call 
                the method. (Note: you can control for the case where a block isn’t passed by using 
                the <span class="inline-snippet">block_given?</span> method.) So what does that mean 
                exactly?
            </p>
            <h4>What is a block?</h4>
            <p>
                In Ruby a block is basically just a chunk of code contained between a 
                <span class="inline-snippet">do</span> and an <span class="inline-snippet">end</span> 
                (or it can be contained within curly-brackets if it can be expressed in a single 
                line). The code inside the block is what will be executed when the 
                <span class="inline-snippet">yield</span> in the method is reached.
            </p>
            <p>
                To pass in a block to a method, you just append the block to the method call:
            </p>
                <img src="img/blog/method_call_with_block.jpg" alt="method call with a block">
            <p>
                The syntax looks a little foreign but it does the trick. Using either of these method   
                calls (minus the line returns added for screenshot convenience) gives:
            </p>
                <img src="img/blog/my_method_with_yield_output.jpg" alt="output from method call with a block">
            <h4>Passing Parameters</h4>
            <p>
                You can also pass one or more parameters which can then be used within the block:
            </p>
                <img src="img/blog/my_method_with_yield_and_parameter.jpg" alt="method with yield and a parameter">
            <p>
                The variable name within the pipes (<span class="inline-snippet">step</span>) is, of 
                course, how the value that's passed in (in this case, 2) is referenced within the block. 
                Running this method call gives:
            </p>
                <img src="img/blog/my_method_with_yield_and_parameter_output.jpg" alt="method with yield and a parameter output">
            <p>
                Changing Step 2 to something else is now a simple matter of changing the block that's 
                passed with the method call; the method itself stays the same:
            </p>
                <img src="img/blog/new_method_call.jpg" alt="method with yield and a parameter">
            <p>
                Which yields:
            </p>
                <img src="img/blog/new_method_call_output.jpg" alt="method with yield and a parameter">
            <p>
                So what's the big deal about that? you might ask. An example should help clarify.
            </p>

            <h4>A Practical Application</h4>
            <p>
                Although it isn’t necessarily apparent, <span class="inline-snippet">yield</span> is 
                actually all over Ruby, in particular in the source code for enumerable methods. 
                Here, for example, is the source code for 
                Ruby's <span class="inline-snippet">each</span> method:

            </p>
                <img src="img/blog/each_source_code.jpg" alt="source code for ruby each method">
            <p>
                Ruby source code is written in <span class="inline-snippet">C</span>, which is quite 
                difficult for this Ruby programmer to read, but note the 
                <span class="inline-snippet">rb_yield</span> near the end of the method. A Ruby 
                version of this code might look something like this:
            </p>
                <img src="img/blog/ruby_version_of_each_method_code.jpg" alt="ruby version of ruby each method code">
            <p>
                Like Ruby's actual <span class="inline-snipped">each</span> method, for a given 
                collection (for example, an array), the <span class="inline-snippet">ruby_each</span> 
                method iterates through the collection, yielding each element to the block passed 
                in when the method is called, then returns the original array at the end. 
            </p>
            <h4>An Example</h4>
            <br>
                <img src="img/blog/example_using_each.jpg" alt="example method using each">
            <p>
                What's happening here is:
            </p>
                <ol>
                    <li>An array is passed in to 
                    <span class="inline-snippet">my_other_method</span> as an argument</li>
                    <li>Ruby’s <span class="inline-snippet">each</span> method is called on that array</li> 
                    <li>The <span class="inline-snippet">each</span> method iterates through the array
                    (saving me, the programmer, from having to 
                    create the loop and initialize and increment the counter variable)</li>
                <li>Within each iteration of the 
                    loop, the <span class="inline-snippet">each</span> method yields the current value 
                    from the array to the code block (the part between between 
                    <span class="inline-snippet">do</span> and <span class="inline-snippet">end</span>)</li> 
                <li>The code block reverses the value and then <span class="inline-snippet">puts</span> it.</li>
                </ol>
            <p>
                Calling <span class="inline-snippet">my_other_method(['I love pizza', 'I love ice cream', 
                'I love Brussels sprouts'])</span> yields:
            </p>
                <img src="img/blog/ruby_each_example_output.jpg" alt="example method using each">

            <p>
                If you compare the last two methods above, you'll see how using 
                <span class="inline-snippet">each</span> instead of <span class="inline-snippet">ruby_each</span>
                really only saves a modest amount of code in this example. However, not surprisingly, 
                when things get more complicated the difference increases quickly. 
            </p>
            <p>        
                For example, say instead of <span class="inline-snippet">puts</span>ing each string 
                in reverse order, we want our method to return each individual word reversed but still in the
                original order. Doing this without using enumerators might look something like:
            </p>
                <img src="img/blog/no_each_no_map.jpg" alt="method without each or map">
            <p>
                On the other hand, doing it with enumerators (both <span class="inline-snippet">each</span>  
                and <span class="inline-snippet">map</span>, another enumerator that uses 
                <span class="inline-snippet">yield</span>) looks like:
            </p>
                <img src="img/blog/with_each_and_map.jpg" alt="method without each or map">
            <p>
                Calling either version with our array passed in as an argument yields:
            </p>
                <img src="img/blog/last_output.jpg" alt="output of either version">
            <p>
                The <span class="inline-snippet">yield</span> in the middle of Ruby's 
                <span class="inline-snippet">each</span> and 
                <span class="inline-snippet">map</span> methods gives them almost infinite utility. 
                While the functionality of the methods themselves is fairly simple and doesn't change, 
                they can be called with pretty nearly any block you can imagine. This not only makes 
                them tremendously flexible, but also enables developers to write code that is more elegant, 
                more readable, and more efficient. 
            </p>
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
