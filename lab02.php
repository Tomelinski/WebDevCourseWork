
<?php
	$title = "Lab 02";
	$file = "lab02.php";
	$description = "lab02 page for my WEBD2201 Website";
	$date = "March 2nd, 2020";
	$banner = "Lab 02 - Working with HTML Tables";
	include("header.php");
?>

    <p>
        In this web page I demonstrate a basic understanding of how tables in html work. Also using tables as a page 
        layout to make the web page more organised. I also used tables to making a tag description section, my 
        favourite books section and my second semester schedule.
    </p>
    
    <table id="descriptiontable">
        <caption>HTML Table Tags</caption>
        <tbody>
            <tr>
                <th class="left">Tag</th>
                <th class="right">Description</th>
            </tr>
            <tr>
                <td>&lt;table&gt;</td>
                <td>Denotes the start of an HTML table in a web page</td>
            </tr>
            <tr>
                <td>&lt;tr&gt;</td>
                <td>Denotes the start of a row in an HTML table(NOTE: these must exist inside 
                    &lt;table&gt;..&lt;/table&gt; tags in order to be valid and work properly)</td>
            </tr>
            <tr>
                <td>&lt;td&gt;</td>
                <td>Denotes a cell(or Table Data) in an HTML table (NOTE: these must exist inside 
                    &lt;tr&gt;..&lt;/tr&gt; tags in order to be valid and work properly)</td>
            </tr>
            <tr>
                <td>&lt;th&gt;</td>
                <td>Very similar to the &lt;td&gt; tags described above, but the text is bold and entered</td>
            </tr>
            <tr>
                <td>&lt;caption&gt;</td>
                <td>Will place a caption on an HTML table(NOTE: this tag must be implemented right after 
                    the opening &lt;table&gt; tag in order to be valid and work properly)</td>
            </tr>
        </tbody>
    </table>
    <!-- DivTable.com -->
    <hr>
    <table id="bookstable">
        <tbody>
            <tr>
                <th class="booktitle">Title</th>
                <th class="bookautor">Author</th>
                <th class="bookyear">Year of Publication</th>
                <th class="bookdesc">Description</th>
            </tr>
            <tr>
                <td>Speaker for the Dead</td>
                <td>Orson Scott Card</td>
                <td>1986</td>
                <td>
                    As humanity uses light-speed travel to establish new colonies,
                     Ender and his sister Valentine age slowly through relativistic
                    travel. Ender's older brother, the now-aged Hegemon Peter Wiggin,
                    recognizes Ender's writings in The Hive Queen, and requests Ender
                    write for him once he dies. Ender agrees and authors The Hegemon.
                </td>
            </tr>
            <tr>
                <td>All the Light We Cannot See</td>
                <td>Anthony Doerr</td>
                <td>2014</td>
                <td>
                    It starts late in World War II, as the Allies begin shelling the 
                    French city of Saint-Malo to drive out the remaining Nazi troops.
                    Our two main characters are Marie Laure, a blind French girl who 
                    fled here with her uncle from Paris, and Werner, a radio expert in 
                    the German army who is stuck in the city when the attack begins. We 
                    jump back and forth in time, and between the two characters’ 
                    perspectives to see how both young people were brought to this place.
                </td>
            </tr>
            <tr>
                <td>How Music Works</td>
                <td>David Byrne</td>
                <td>2012</td>
                <td>
                    Byrne gives us his take on music in a style that is very pleasant, 
                    straightforward, and conversational. He comes across as someone whose 
                    wide-ranging, collaborative experience and creative intelligence combine 
                    with an everyday kind of modesty in a way that allows you to imagine 
                    you could run into him in a club somewhere
                </td>
            </tr>
        </tbody>
    </table>
    <!-- DivTable.com -->
    <hr>
    <table id="schedule">
        <tbody>
            <tr>
                <th>&nbsp;</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
            </tr>
            <tr>
                <td class="times">8:10am-9:00am</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet class" rowspan="2">WEBD2201-03<br>CRN: 27125</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">9:10am-10:00am</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">10:10am-11:00am</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet class" rowspan="2">LINU 4100-01 <br><br>CRN: 25414</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet class" rowspan="2">GNED 1423-AA1<br>CRN: 25179</td>
            </tr>
            <tr>
                <td class="times">11:10am-12:00pm</td>
                <td class="timesheet class" rowspan="3">SYDE 2203-04<br>CRN: 27125</td>
                <td class="timesheet lunch" colspan="2">LUNCH</td>
            </tr>
            <tr>
                <td class="times">12:10pm-1:00pm</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">1:10pm-2:00pm</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">2:10pm-3:00pm</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet class" rowspan="2">WEBD2201-03<br>CRN: 26243</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">3:10pm-4:00pm</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
            <tr>
                <td class="times">4:10pm-5:00pm</td>
                <td class="timesheet class" rowspan="2">OOP 2200-02<br>CRN: 25738</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet class" rowspan="2">LINU 4100-01<br>CRN: 25414</td>
                <td class="timesheet class" rowspan="2">OOP 2200-02<br>CRN: 25738</td>
            </tr>
            <tr>
                <td class="times">5:10pm-6:00pm</td>
                <td class="timesheet">&nbsp;</td>
                <td class="timesheet">&nbsp;</td>
            </tr>
        </tbody>
    </table>
    <!-- DivTable.com -->

                    
<?php include("footer.php"); ?>