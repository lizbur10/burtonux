<?php
include("header.php");
?>

    <section id="content">
        <h1 class="visually-hidden">Liz Burton's Blog</h1>

        <article class="blog-post">

        <h2>Setters and Getters in Ruby</h2>
        <p class="posted-date">Posted April 7, 2019</p>


<p>Instance variables in Ruby are scoped to a specific object. This makes sense. If, for example, <code>@alex</code> is an instance of class <code>Person</code> and <code>@alex</code> has an instance variable <code>name</code> with the value &#8220;Alex&#8221;, it seems reasonable that this value of <code>name</code> is scoped to the <code>@alex</code> object. What this means is that you can&#8217;t access or change the value of <code>@alex</code>&#8217;s <code>name</code> variable from outside the object itself. Setters and getters in Ruby are methods that make it possible to access and manipulate an instance variable from outside the specific instance: the setter method assigns an attribute value to an object, and the getter method retrieves the value.</p>

<p>The setter and getter for the <code>name</code> attribute of our <code>Person</code> class would look like this: </p>

<pre>
<code>
class Person
    def name=(name)
        @name = name
    end

    def name
        @name
    end
end
</code>
</pre>

<p>We can use the setter and getter as follows:</p>

<pre>
<code>
// create a new instance of the Person class:
@alex = Person.new

// call the `name=` (setter) method to assign the value &quot;Alex&quot; to the instance variable `name`:
@alex.name = &quot;Alex&quot;

// call the getter method to access the value of the `name` instance variable and write it out:
puts @alex.name
</code>
</pre>

<p>Note that the second line, <code>@alex.name = &quot;Alex&quot;</code>, is Ruby&#8217;s syntactic sugar at work. It looks like a variable assignment, but what&#8217;s actually happening is a method call: the method <code>name=</code> is called on the <code>@alex</code> instance and the value &#8220;Alex&#8221; is passed in as an argument. The line could therefore also be written as:</p>

<pre>
<code>
@alex.name=(&quot;Alex&quot;)
</code>
</pre>

<p>This code works exactly the same, but at the price of more complexity and less clarity.</p>

<p>The value of an instance variable can be assigned without using a setter in a class&#8217;s <code>initialize</code> method:</p>

<pre>
<code>
def initialize(name)
    @name = name
end
</code>
</pre>

<p>However, if you don&#8217;t necessarily want to set the value when the object 
is instantiated, or if you want to be able to change it later, you&#8217;ll 
need a setter method. And if you want to access the value, you&#8217;ll need a 
getter method. Luckily, there are ways of abstracting out this functionality 
&mdash; through the use of <code>attr_accessor</code>, for example, or by using 
Rails, which creates setters and getters for us &mdash; so our model files 
aren&#8217;t bulging with repetitive setter and getter methods. This abstraction 
is desireable, both for keeping our code lean and for limiting duplication of 
effort.</p>

<h3>Custom setters and getters</h3>

<p>So if setter/getter functionality is abstracted away and hidden from view, why do we need to know about it at all? Aside from the fact that it&#8217;s a good idea to understand how your code operates under the hood, there are also times when you might want to write custom setters and getters. </p>

<h4>Example 1</h4>
<p>Let&#8217;s say you want to refactor your code for your Person class to have <code>first_name</code> and <code>last_name</code> attributes instead of just <code>name</code>. To make this change, you would need to comb through your code to find everyplace you call <code>name=</code> or <code>name</code> and change it to work with the new instance variables. But another way to solve the problem would be to create a custom setter and getter:</p>

<pre>
<code>
class Person
    def name=(full_name)
        @first_name = full_name.split[0]
        @last_name = full_name.split[1]
    end

    def name
        &quot;#{@first_name} #{@last_name}&quot;
    end
end
</code>
</pre>

<p>In this case, if we run:</p>

<pre>
<code>
@alex.name = &quot;Alex Saavedra&quot;
</code>
</pre>

<p>it will correctly assign the first and last name inside the <code>name=</code> method and the <code>name</code> method will still write out the full name. </p>

<p>As an aside, it is interesting to note that, in Ruby, it is not possible to pass in two arguments to a method that ends with &#8220;=&#8221;. This, again, is syntactic sugar at work &mdash; Ruby can correctly interpret what looks like a variable assignment (<code>@alex.name = &quot;Alex Saavedra&quot;</code>) as a method call, but the corresponding syntax with two arguments would not make sense:</p>

<pre>
<code>
@alex.name = &quot;Alex&quot;, &quot;Saavedra&quot;
</code>
</pre>

<p>It should be apparent that this would result in a syntax error. As a result, it is <strong>not</strong> possible to do this:</p>

<pre>
<code>
def name=(first_name, last_name)
    @first_name = first_name
    @last_name = last_name
end
</code>
</pre>

<h4>Example 2</h4>
<p>We can also use a custom setter to help set up associations between objects. 
In the example below, novels belong to an author and an author
has many novels. If we just wanted to assign the <code>author</code> instance 
to the <code>@author</code> instance variable, we could use the default setter 
method, but the custom setter below also sets up the association in the other 
direction:</p>

<pre>
<code>
class Novel
  def author=(author)
    @author = author
    @author.novels &lt;&lt; self unless @author.novels.include?(self)
  end
end
</code>
</pre>

<p>So the <code>Novel</code> instance knows who its <code>Author</code> is and the <code>Author</code> instance knows that the <code>Novel</code> instance belongs to it.</p>

<h4>Example 3</h4>
<p>Even when we use Active Record, which does a lot of the association handling for us, there are still some cases when we might want to use a custom setter. Consider the following:</p>

<pre>
<code>
class Novel &lt; ActiveRecord::Base
   def genre_name=(name)
     self.genre = Genre.find_or_create_by(name: name)
   end
end
</code>
</pre>

<p>If an instance of <code>Novel</code> (<code>@moby_dick</code>) is initialized with a <code>genre_name</code> field, the custom <code>genre_name=</code> method overrides the default Active Record behavior. The code checks to see whether a <code>Genre</code> instance already exists with the <code>name</code> attribute equal to <code>genre_name</code>. If it does, it assigns the existing instance to <code>@moby_dick</code> and, if not, it creates a new <code>Genre</code> instance and assigns that instead. This ensures 1) that the genre instance exists before it is assigned to <code>@moby_dick</code> and 2) that it won&#8217;t be duplicated in the database.</p>


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
