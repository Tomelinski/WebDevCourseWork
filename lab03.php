
<?php
	$title = "Lab 03";
	$file = "lab03.php";
	$description = "Lab 03 page for my WEBD2201 Website";
	$date = "March 2nd, 2020";
	$banner = "Lab 03 - Formatting and Layout with Styles";
	include("header.php");
?>

    <p>The purpose of lab 03 is to format all previous labs using CSS, this page gives a brief description of the 
        of some of the selectors that are used in CSS.
    </p>
    
    <table class="paratable main">
        <tr class="para">
            <th class="left main"> Selector name</th>
            <th class="right main">Desciption</th>
        </tr>
        <tr class="para">
            <td class="main">*{</td>
            <td class="main">Selects all elements in the html file. Font-family to default all text/font to ariel and 
                font-size to default all text size to 15px.
            </td>
        </tr>
        <tr class="para">
            <td class="main">#maintable{</td>
            <td class="main">Using an id, the #maintable is the general layout of all the web pages. Using width as a percent to size the table
                corresponding to the size of the screen. margin-left and right to center the table and border-collapse to make the 
                table look better
            </td>
        </tr>
        <tr class="para">
            <td class="main">td{</td>
            <td class="main">td elements have a border of 1px, have a solid border, and a color of black. border-colapse is also used to make the data in the table
                more nice to look at.
            </td>
        </tr>
        <tr class="para">
            <td class="main">body{</td>
            <td class="main">body is used to set the background-color: of the website to the desired color using hex code or the integrated 
                colors in html. color: is used to set the default text color in the body element
            </td>
        </tr>
        <tr class="para">
            <td class="main">h1{</td>
            <td class="main">All headers with the tags h1 will have text-aligned to center and font-size set to 35px to make all important 
                titles much larger then normal
            </td>
        </tr>
        <tr class="para">
            <td class="main">.para:nth-child(even){</td>
            <td class="main">nth-child is used to automate certain elements, in this case every other element, starting from the second will have a different 
                background-color
            </td>
        </tr>
        <tr class="para">
            <td class="main">.lablink</td>
            <td class="main">sets the desired links to be displayed as block elements. this is to make the links more readable and visually pleasing</td>
        </tr>
        <tr class="para">
            <td class="main">a:visited </td>
            <td class="main">a pseudo-element for all links, after the user has visited the link it will be displayed as a different color.</td>
        </tr>
        <tr class="para">
            <td class="main">.finalrow</td>
            <td class="main">the footer of the web page, has text-aligned to right and the height of the row set to 40px</td>
        </tr>
        
        <tr class="para">
            <td class="main">.main</td>
            <td class="main">tables with the class of main have borders set to zero and border-colapse set to colapsed</td>
        </tr>
    </table>
                   
<?php include("footer.php"); ?>