
<?php
	$title = "Lab 01";
	$file = "lab01.php";
	$description = "lab01 page for my WEBD2201 Website";
	$date = "March 2nd, 2020";
	$banner = "Lab 01 - Basic XHTML pages";
	include("header.php");
?>


    <p>
        This is lab 01 with all special characters that were required for the assignment

    </p>
    
    <hr>
    <h3>Einstein's Relativity</h3>
    <p>
       For Einstein's Reletivity formula you have to use the superscript (&lt;sup&gt;...&lt;/sup&gt;)
        and italics (&lt;i&gt;...&lt;/i&gt;) tags. it is wrapped in the heading 2 (&lt;h2&gt;...&lt;/h2&gt;)
         tags to make it larger and bold
    </p>
    <h2><i>E = mc<sup>2</sup></i></h2>

    <hr>
    <h3>Currency Conversion</h3>
    <p>
        For currency conversion you have to user the dollars($) as well as pounds(&amp;pound;),
         Euro(&amp;euro;) and Yen(&amp;yen;)
        it is wrapped in the heading 2 (&lt;h2&gt;...&lt;/h2&gt;)
         tags to make it larger and bold
    </p>
    <h2>$1.00CDN = $0.703USD = &pound;0.487 = &euro;0.651 = &yen;82.77 </h2>

    <hr>
    <h3>Code Snippet</h3>
    <p>
        To make a code snippet you have to use the less than sign &lt; (&amp;lt;)
         and the greater than sign &gt; (&amp;lt;) as well as the necessary amount
         of spacing(&amp;nbsp;) as well as line break(&lt;br&gt;) to space out the code 
         all in a normal paragraph (&lt;p&gt;...&lt;/p&gt;) wrapped in code font(&lt;code&gt;...&lt;/code&gt;)
         to make it resemble code.
    </p>
    <p>
        <code>
        
            #include &lt;iostream.h&gt;
            <br><br>
            int main()P{ <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; "Hello World" &lt;&lt; endl; <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0; <br>
            }
        </code>
    </p>

    <hr>
    <h3>Chemistary Equation</h3>
    <p>
        To display a chemical equation one must use the subscript(&lt;sub&gt;...&lt;/sub&gt;) where necessary
         it is all wrapped in the heading 2 (&lt;h2&gt;...&lt;/h2&gt;) tags to make it larger and bold
    </p>
    <h2>2H<sub>2</sub> + O<sub>2</sub> => 2H<sub>2</sub>O + heat</h2>

    <hr>
    <h3>List Example(Ordered)</h3>
    <p>
        The title of the list is wrapped in header(&lt;h2&gt;...&lt;/h2&gt;) tags,
         To create an ordered list one must us the odered list(&lt;ol&gt;...&lt;/ol&gt;) tags
         in this tag, each item in the list is wrapped by the list(&lt;li&gt;...&lt;/li&gt;) tags
    </p>
    <h2>
        How to Start a car
    </h2>
        <ol>
            <li>Place key in the ignition</li>
            <li>Depress the break pedal</li>
            <li>Turn the ignition key</li>
        </ol>

    <hr>
    <h3>List example (unodered)</h3>
    <p>
        The title of the list is wrapped in header(&lt;h2&gt;...&lt;/h2&gt;) tags,
         To create an unordered list one must us the unodered list(&lt;ul&gt;...&lt;/ul&gt;) tags
         in this tag, each item in the list is wrapped by the list(&lt;li&gt;...&lt;/li&gt;) tags 
    </p>
    <h2>
        Things to do before my trip
    </h2>
        <ul>
            <li>Re-New passport</li>
            <li>Convert currency</li>
            <li>Print out reservation &amp; itineraries</li>
            <li>Verify vaccinations are up to date</li>
        </ul>


    <hr>
    
<?php include("footer.php"); ?>