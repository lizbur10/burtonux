<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">
        <h2>Required vs. Optional Arguments in Ruby</h2>

        <p class="posted-date">Posted March 31, 2019</p>


        <p>In <a class="text-link" href="/blog-032419.php">my last post</a> I talked about passing arguments in Ruby. In this post, I&#8217;ll cover a related topic: required vs. optional arguments. </p>

        <h3>Using default arguments</h3>

        <p>In this example, all three arguments are required:</p>

<pre>
<code>
def greeting(first_name, last_name, hobby)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}&quot;
end
</code>
</pre>

        <p>If this method is called with fewer than 3 arguments, an argument error will be thrown. But let&#8217;s say we want the last name to be optional. One way to do that is to provide a default value:</p>

<pre>
<code>
def greeting(first_name, last_name=&quot;Doe&quot;, hobby)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}.&quot;
end
</code>
</pre>

        <p>If the method is called with only two arguments, those arguments will be assigned to <code>first_name</code> and <code>hobby</code> and the default value will be used for the last name. </p>

        <p>It&#8217;s unlikely that we would want to assign a fake last name, however, so a more realistic solution would be to set the default value to nil, making that variable truly optional:</p>

<pre>
<code>
def greeting(first_name, last_name=nil, hobby)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}.&quot;
end
</code>
</pre>

        <p>Calling </p>

<pre>
<code>
greeting(&quot;Alex&quot;, &quot;fantasy birding&quot;)
</code>
</pre>

        <p>gives</p>

<pre>
<code>
Hello Alex , we hear you love fantasy birding.
</code>
</pre>

        <p>Which, aside from the extraneous space, gives the result we&#8217;re after.</p>

        <h3>Keyword Arguments with Default Values</h3>

        <p>Using default values with keyword arguments is straightforward:</p>

<pre>
<code>
def greeting(first_name:, last_name: nil, hobby:)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}&quot;
end
</code>
</pre>

        <p>We have a couple different options for calling our method. We can pass in the arguments directly as key/value pairs: 

<pre>
<code>
greeting(first_name: &quot;Alex&quot;, last_name: &quot;Cho&quot;, hobby: &quot;fantasy birding&quot;)
</code>
</pre>
                
        <p> Or we can pass them inside a variable :</p>

<pre>
<code>
person_attributes = {first_name: &quot;Alex&quot;, last_name: &quot;Cho&quot;, hobby: &quot;fantasy birding&quot;}

greeting(person_attributes)
</code>
</pre>

        <p>In either case, the hash can be passed in with or without <code>last_name</code> since it defaults to nil.</p>


        <p>Finally, you can define the method to accept a single parameter: a hash containing all of the key/value pairs. In this case, you can pass in any number of arguments in the hash (including zero) as long as missing data are handled inside the method:</p>

<pre>
<code>
def greeting(person_attributes)
    message = &quot;Hello&quot;
    message += &quot; #{person_attributes[:first_name]}&quot; if person_attributes[:first_name]
    message += &quot; #{person_attributes[:last_name]}&quot; if person_attributes[:last_name]
    message += &quot;, we hear you love #{person_attributes[:hobby]}.&quot; if person_attributes[:hobby]
    puts message
end
</code>
</pre>

        <h3>Splat</h3>

        <p>Another way to handle optional arguments is through the use of the splat operator:</p>

<pre>
<code>
def shopping_list(*items)
    puts items.class
    return items
end
</code>
</pre>

        <p>When this method is called with zero or more arguments, &#8220;Array&#8221; is <code>puts</code>ed to the screen and an array is returned which either contains the values passed in as arguments or is empty if no arguments are passed. The values assigned to the <code>items</code> variable can be handled using an enumerator:</p>

<pre>
<code>
def shopping_list(*items)
    if items.length &gt; 0
        puts &quot;Your shopping list:&quot;
        items.each { |item| puts item }
    else
        puts &quot;Nothing to buy today!&quot;
    end
end
</code>
</pre>

        <h3>Combining Required and Optional Arguments</h3>

        <p>It is possible to combine required parameters, parameters with default values and optional parameters in a method definition: </p>

<pre>
<code>
def greeting(first_name, last_name=nil, *hobbies)
    &lt;body of method&gt; 
end
</code>
</pre>

        <p>In this example, the method must be passed at least one argument 
        since <code>first_name</code> is required, but it can be called with as 
        many arguments as you like. The first (or only) argument will be assigned 
        to <code>first_name</code>; the second (if present) will be assigned 
        to <code>last_name</code>, and all remaining arguments (if present) will 
        be added to the <code>hobbies</code> array. But note the effect of how 
        the arguments are assigned: <code>last_name</code> isn&#8217;t truly 
        optional in this example, it&#8217;s only optional if there aren&#8217;t 
        any hobbies being passed! If you try to pass in just the first name and 
        hobbies, the first hobby will be assigned as the last name.</p>

        <p>There are some other weirdnesses about trying to combine required and optional arguments. For example, all of these are allowed:</p>

<pre>
<code>
def greeting(first_name, last_name=nil, hobby)

def greeting(first_name=nil, last_name, hobby)

def greeting(first_name, last_name=nil, *hobbies)
</code>
</pre>

        <p>But this throws an error:</p>

<pre>
<code>
def greeting(first_name=nil, last_name, *hobbies)
</code>
</pre>

        <p>Given these limitations and somewhat unpredictable behaviors, it seems safest to use required arguments with <em>either</em> default values <em>or</em> a splat operator, but not both. More complicated cases can be handled through the use of a variable containing a hash along with the splat operator:</p>

<pre>
<code>
def greeting(name, *hobbies)
    message = &quot;Hello&quot;
    message += &quot; #{name[:first_name]}&quot; if name[:first_name]
    message += &quot; #{name[:last_name]}&quot; if name[:last_name]
    if hobbies.length &gt; 0
        message += &quot;, we hear you love: #{hobbies.join(&quot;, &quot;)}&quot;
    end
    puts message
end
</code>
</pre>

        <p>This code will run without error if the name hash includes both <code>first_name</code> and <code>last_name</code>, just one or the other, or neither. It will also work with any number of hobbies, including zero.</p>

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
