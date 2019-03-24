<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">
        <h2>Passing Arguments in Ruby</h2>
        <p class="posted-date">Posted March 24, 2019</p>

        <p>While passing arguments is a fairly simple concept in Ruby, there are 
            some variations that can be confusing at first. I'll start by covering 
            the basics.</p>

        <h3>Passing a Single Argument</h3>

        <p>A method doesn&#8217;t need to accept any arguments, of course, as in 
            this classic example: </p>

<pre>
<code>
def greeting
    puts &quot;Hello, World!&quot;
end
</code>
</pre>

        <p>But things get more flexible and more interesting when we can pass 
            an argument into our method:</p>

<pre>
<code>
def greeting(name)
    puts &quot;Hello, #{name}&quot;
end
</code>
</pre>

        <p>Note that <code>name</code> in the example above is <em>not</em> an 
        argument, it is a parameter. The difference between parameters and 
        arguments is pretty simple: the <em>parameter</em> is the placeholder 
        that&#8217;s used in the method definition, while the <em>argument</em> 
        is the value that&#8217;s passed in when the method is called. While 
        this distinction may seem nitpicky, and in practice the two terms are 
        often used interchangeably, for purposes of this discussion it&#8217;s 
        important to keep the distinction in mind.</p>

        <p>When we call the method above, we pass an <em>argument</em>, which 
        can either be a variable or a literal:</p>

<pre>
<code>
greeting(arg)
</code>
</pre>

        <p>or </p>

<pre>
<code>
greeting(&quot;Alex&quot;)
</code>
</pre>

        <p>In the first example, the variable <code>arg</code> is the argument, 
        while in the second the string literal &#8220;Alex&#8221; is the argument. If the value of the variable <code>arg</code> in the first example is set equal to "Alex", the two method calls will yield the same result.</p>

        <h3>Passing Multiple Arguments</h3>

        <p>It&#8217;s also possible to define a method that accepts multiple 
            arguments:</p>

<pre>
<code>
def greeting(first_name, last_name, hobby)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}&quot;
end
</code>
</pre>

        <p>Here the <em>parameters</em> are <code>first_name</code>, 
        <code>last_name</code> and <code>hobby</code> and we can call the method 
        by executing:</p>

<pre>
<code>
greeting(&quot;Alex&quot;, &quot;Cho&quot;, &quot;fantasy birding&quot;)
</code>
</pre>

        <p>or </p>

<pre>
<code>
greeting(first_name, last_name, hobby)
</code>
</pre>

        <p>or</p>

<pre>
<code>
greeting(fname, lname, fav_activity)
</code>
</pre>

        <p>As you can see in the second and third examples, the variables being 
            passed in as arguments <em>can</em> have the same names as the parameters 
            but they don&#8217;t need to. All three examples work exactly the 
            same (assuming, of course, that the values are the same). But that 
            brings us to one of the complicating factors.</p>

        <h3>Order matters</h3>

        <p>If the variables being passed in as arguments have different names 
            than the parameters defined in the method definition (or if 
            we&#8217;re passing in literals rather than variables), how does 
            the code know which argument goes with which parameter? It&#8217;s 
            based solely on the order in which the arguments are passed. When 
            we call the method, we must pass the arguments in the order in which 
            the parameters are listed in the method definition. If we were to call 
            our intro method like this:</p>

<pre>
<code>
greeting(last_name, first_name, hobby)
</code>
</pre>

        <p>the first and last names will be reversed in the <code>puts</code>ed 
        greeting. Furthermore, if we are passing arguments of different types 
        (if one of them is an integer, for example), then passing the arguments 
        in the wrong order will result in a TypeError. </p>

        <p>While this may not seem like a big deal if there are only two or 
            three arguments, as our methods get more complex this way of 
            defining parameters and passing arguments will get more and more 
            unwieldy. Enter keyword arguments.</p>

        <h3>Keyword Arguments</h3>

        <p>In order to pass arguments as keywords, we need to make one simple 
            modification to how the parameters are defined in our method 
            definition &#8211; we need to add a colon to the end:</p>

<pre>
<code>
def greeting(first_name:, last_name:, hobby:)
    puts &quot;Hello #{first_name} #{last_name}, we hear you love #{hobby}&quot;
end
</code>
</pre>

        <p>Note, however, that we still reference the parameters in the same 
            way within the body of the method. </p>

        <p>When we call the method, we then explicitly specify the values for 
            each parameter, using the keywords as defined in the method 
            definition:</p>

<pre>
<code>
greeting(first_name: &quot;Alex&quot;, last_name: &quot;Cho&quot;, hobby: &quot;fantasy birding&quot;)
</code>
</pre>

        <p>or</p>

<pre>
<code>
greeting(first_name: first_name, last_name: last_name, hobby: hobby)
</code>
</pre>

        <p>This syntax here should look familiar: we&#8217;re using hash syntax, 
            with a key/value pair, to pass in each argument. What this means is 
            that the <code>key</code> portion of each argument must match the 
            associated keyword parameter defined in the method. The <code>value</code> portion, 
            on the other hand (assuming we&#8217;re using a variable name and not a 
            literal), <em>can</em> be the same but it doesn&#8217;t need to be. So in 
            the example above, we <em>could</em> use</p>

<pre>
<code>greeting(first_name: fname, last_name: lname, hobby: fav_activity)
</code>
</pre>

        <p>but this would <em>not</em> work:</p>

<pre>
<code>
greeting(fname: first_name, lname: last_name, fav_activity: hobby)
</code>
</pre>

        <p>The keys must be <code>first_name</code>, <code>last_name</code>, 
        and <code>hobby</code> because those are the keywords we used when we 
        defined our method.</p>

        <p>Now we can pass the arguments in any order and our method 
            will still correctly <code>puts</code> our message. </p>

<pre>
<code>
greeting(hobby: hobby, first_name: first_name, last_name: last_name)
</code>
</pre>

        <p>At first glance, going from this:</p>

<pre>
<code>
greeting(first_name, last_name, hobby)
</code>
</pre>

        <p>to this: </p>

<pre>
<code>
greeting(first_name: first_name, last_name: last_name, hobby: hobby)
</code>
</pre>

        <p>might not seem like an especially good trade. However, the use of 
            keyword arguments allows us to use mass assignment, which will 
            substantially simplify matters when our applications get more 
            complex.</p>

        <h3>Mass Assignment</h3>

        <p>Let&#8217;s say that we want to create a <code>Person</code> class 
        with the attributes used in our <code>greeting</code> method. 
        Let&#8217;s use keyword arguments for our <code>initialize</code> 
        method:</p>

<pre>
<code>    
class Person
    attr_accessor :first_name, :last_name, :hobby

    def initialize(first_name:, last_name:, hobby:)
        @first_name = first_name
        @last_name = last_name
        @hobby = hobby
    end
end
</code>
</pre>

        <p>When we create a new instance of <code>Person</code>, it might look 
        like this:</p>

<pre>
<code>
@person = Person.new(first_name: &quot;Alex&quot;, last_name: &quot;Cho&quot;, hobby: &quot;fantasy birding&quot;)
</code>
</pre>

        <p>But note that the information inside the parentheses is nothing more 
            or less than a hash! As a result, we can accomplish the same thing 
            by doing this:</p>

<pre>
<code>
person_attributes = {first_name: &quot;Alex&quot;, last_name: &quot;Cho&quot;, hobby: &quot;fantasy birding&quot;}
@person = Person.new(person_attributes)
</code>
</pre>
        <p>We do not need to explicitly list out the individual arguments 
            &mdash; we can simply pass in the hash. Furthermore, the 
            order of the key/value pairs inside the hash doesn&#8217;t matter. The 
            <code>initialize</code> method will find the value associated with 
            each key and correctly assign the attribute values. </p>

        <p>While this may not seem like a big deal at first glance, it does have
            a couple of pretty big advantages. One is that if we want to add 
            another attribute to the Person 
            class, we only need to change code in two places: in our 
            <code>attr_accessor</code>s and in the <code>initialize</code> 
            method. A second advantage is it can greatly simplify handling of 
            data submitted through a form. For example, if we have a signup 
            form in our application, when the form is submitted the values 
            the user entered are automatically stored in a <code>params</code> 
            hash. To create a new user (i.e., a new instance of a User class), 
            the values in the <code>params</code> hash can be accessed as above 
            to assign the attribute values.</p>

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
